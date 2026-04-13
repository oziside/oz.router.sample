<?php
declare(strict_types=1);
namespace App\Shared\Presentation\Api\OpenApi;

use OpenApi\Attributes as OA;


/**
 * Root OpenAPI document metadata for the public module API.
 *
 * This class is intentionally empty: swagger-php reads the attributes from it
 * during schema generation. Keep only API-wide metadata here, such as info,
 * servers, tags, security schemes, and reusable global responses.
 *
 * Endpoint-specific paths, parameters, request bodies, and response schemas
 * should stay near their Presentation\Api controllers and DTO classes.
 */
#[OA\OpenApi(
    info: new OA\Info(
        title: 'oz.router.sample API',
        description: 'API sample module for Bitrix D7 built with oz.router, Clean Architecture, and OpenAPI attributes.',
        version: '1.0.0'
    ),
    servers: [
        new OA\Server(
            url: '/api/v1',
            description: 'API v1'
        ),
    ],
    tags: [
        new OA\Tag(
            name: 'Products',
            description: 'Операции с товарами каталога'
        ),
        new OA\Tag(
            name: 'Cart',
            description: 'Операции с корзиной покупателя'
        ),
    ]
)]
final class OpenApiSpec
{
}
