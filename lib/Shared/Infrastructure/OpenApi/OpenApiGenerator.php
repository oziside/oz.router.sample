<?php
declare(strict_types=1);
namespace App\Shared\Infrastructure\OpenApi;

use InvalidArgumentException;
use OpenApi\Generator;
use RuntimeException;


final class OpenApiGenerator
{
    private const FORMAT_JSON = 'json';
    private const FORMAT_YAML = 'yaml';


    /**
     * Generates an OpenAPI schema file from the provided sources.
     *
     * This method takes one or more OpenAPI source files, processes them using
     * the OpenAPI Generator, and writes the resulting schema to the specified
     * output path in the requested format (JSON or YAML).
     * 
     * @param iterable<mixed> $sources
     * @param string $outputPath
     * @param string $format
     * 
     * @return void
    */
    public function generate(
        iterable $sources,
        string $outputPath,
        string $format = self::FORMAT_YAML
    ): void
    {
        $format = $this->normalizeFormat($format);
        $sources = is_array($sources) ? $sources : iterator_to_array($sources, false);

        if ($sources === [])
        {
            throw new InvalidArgumentException('At least one OpenAPI source file is required.');
        }

        $openApi = (new Generator())->generate($sources);

        if ($openApi === null)
        {
            throw new RuntimeException('Unable to generate OpenAPI schema: no OpenAPI annotations were found.');
        }

        $contents = match ($format)
        {
            self::FORMAT_JSON => $openApi->toJson(),
            self::FORMAT_YAML => $openApi->toYaml(),
        };

        $outputDirectory = dirname($outputPath);

        if (!is_dir($outputDirectory) && !mkdir($outputDirectory, 0775, true) && !is_dir($outputDirectory))
        {
            throw new RuntimeException(sprintf('Unable to create OpenAPI output directory: %s', $outputDirectory));
        }

        if (file_put_contents($outputPath, $contents) === false)
        {
            throw new RuntimeException(sprintf('Unable to write OpenAPI schema to: %s', $outputPath));
        }
    }


    /**
     * Normalizes and validates the output file format.
     * 
     * Converts the format string to lowercase, trims whitespace, and validates
     * that it is a supported OpenAPI format (JSON or YAML). The 'yml' alias
     * is automatically converted to 'yaml'.
     * 
     * @param string $format
     * 
     * @return self::FORMAT_JSON|self::FORMAT_YAML
    */
    private function normalizeFormat(
        string $format
    ): string
    {
        $format = strtolower(trim($format));

        if ($format === 'yml')
        {
            return self::FORMAT_YAML;
        }

        if ($format !== self::FORMAT_JSON && $format !== self::FORMAT_YAML)
        {
            throw new InvalidArgumentException('OpenAPI format must be "yaml" or "json".');
        }

        return $format;
    }
}
