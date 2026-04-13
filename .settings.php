<?php
declare(strict_types=1);

return [
    'console' => [
        'value' => [
            'commands' => [
                \App\Shared\Presentation\Cli\GenerateOpenApiCommand::class,
            ],
        ],
        'readonly' => true,
    ],
];
