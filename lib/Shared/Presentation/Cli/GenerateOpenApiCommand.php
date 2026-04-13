<?php
declare(strict_types=1);
namespace App\Shared\Presentation\Cli;

use App\Shared\Infrastructure\OpenApi\OpenApiGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;
use Throwable;



final class GenerateOpenApiCommand extends Command
{
    private const DEFAULT_SCAN_ROOTS = ['lib'];
    private const DEFAULT_PATH_PATTERN = '#/Presentation/Api/#';


    protected function configure(): void
    {
        $this
            ->setName('oz:openapi:generate')
            ->setDescription('Generates OpenAPI schema from PHP attributes.')
            ->addOption(
                'output',
                'o',
                InputOption::VALUE_REQUIRED,
                'Output file path.',
                'openapi.yaml'
            )
            ->addOption(
                'format', 
                'f',
                InputOption::VALUE_REQUIRED, 
                'Output format: yaml or json.', 
                'yaml'
            )
            ->addOption('scan-path',
                's',
                InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                'Root path to scan with Symfony Finder. Can be passed multiple times.',
                self::DEFAULT_SCAN_ROOTS
            )
            ->addOption(
                'path-pattern',
                null,
                InputOption::VALUE_REQUIRED,
                'Regex pattern for source file paths.',
                self::DEFAULT_PATH_PATTERN
            );
    }


    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ): int
    {
        $projectRoot = dirname(__DIR__, 4);
        $outputPath  = $this->resolvePath($projectRoot, $input->getOption('output'));
        $scanRoots   = $this->resolvePaths($projectRoot, $input->getOption('scan-path'));


        $sources = $this->findSourceFiles(
            scanRoots: $scanRoots,
            pathPattern: $input->getOption('path-pattern'),
        );
    
        try
        {
            $output->writeln(sprintf(
                '<comment>Scanning OpenAPI sources: %s</comment>',
                implode(', ', $scanRoots)
            ));
            
            (new OpenApiGenerator)
                ->generate(
                    sources: $sources,
                    outputPath: $outputPath,
                    format: $input->getOption('format')
                );
        }
        catch (Throwable $exception)
        {
            $output->writeln(sprintf(
                '<error>OpenAPI generation failed: %s</error>',
                $exception->getMessage()
            ));

            return Command::FAILURE;
        }

        $output->writeln(sprintf('<info>OpenAPI schema generated: %s</info>', $outputPath));

        return Command::SUCCESS;
    }


    /**
     * Finds PHP source files under the provided scan roots and keeps only files
     * whose normalized absolute path matches the given regular expression.
     *
     * @param list<string> $scanRoots
     * @param string $pathPattern
     * 
     * @return list<string>
    */
    private function findSourceFiles(
        array $scanRoots,
        string $pathPattern
    ): array
    {
        $finder = Finder::create()
            ->files()
            ->name('*.php')
            ->in($scanRoots)
            ->filter(
                static function (SplFileInfo $file) use ($pathPattern): bool
                {
                    $realPath = $file->getRealPath();

                    if ($realPath === false)
                    {
                        return false;
                    }

                    $path = str_replace('\\', '/', $realPath);

                    if (!preg_match($pathPattern, $path))
                    {
                        return false;
                    }

                    return true;
                }
            );

        return array_values(array_map(
            static fn (SplFileInfo $file): string => $file->getRealPath(),
            iterator_to_array($finder, false)
        ));
    }


    /**
     * Resolves a list of input paths against the project root.
     *
     * @param string $projectRoot
     * @param list<string>|mixed $paths
     * 
     * @return list<string>
    */
    private function resolvePaths(
        string $projectRoot,
        mixed $paths
    ): array
    {
        if (!is_array($paths))
        {
            return [];
        }

        return array_map(
            fn (string $path): string => $this->resolvePath($projectRoot, $path),
            $paths
        );
    }


    /**
     * Resolves an input path against the project root.
     *
     * Absolute paths are returned unchanged; relative paths are treated as
     * project-root-relative paths.
     * 
     * @param string $projectRoot
     * @param string $path
     * 
     * @return string
    */
    private function resolvePath(
        string $projectRoot,
        string $path
    ): string
    {
        if ($path === '')
        {
            return $path;
        }

        if ($path[0] === DIRECTORY_SEPARATOR)
        {
            return $path;
        }

        return rtrim($projectRoot, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $path;
    }
}
