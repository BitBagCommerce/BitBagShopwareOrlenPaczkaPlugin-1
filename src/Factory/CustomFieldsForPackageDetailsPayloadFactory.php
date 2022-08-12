<?php

declare(strict_types=1);

namespace BitBag\ShopwareOrlenPaczkaPlugin\Factory;

use Shopware\Core\System\CustomField\CustomFieldTypes;

final class CustomFieldsForPackageDetailsPayloadFactory implements CustomFieldsForPackageDetailsPayloadFactoryInterface
{
    public function create(): array
    {
        $customFieldPrefix = CustomFieldsForPackageDetailsPayloadFactoryInterface::PACKAGE_DETAILS_KEY;

        return [
            'name' => $customFieldPrefix,
            'config' => [
                'label' => [
                    'en-GB' => 'Package details (Orlen Package)',
                    'pl-PL' => 'Szczegóły paczki (Orlen Paczka)',
                ],
                'translated' => true,
                'technical_name' => $customFieldPrefix,
            ],
            'customFields' => [
                [
                    'name' => $customFieldPrefix . '_insurance',
                    'label' => 'Insurance value (can be left empty)',
                    'type' => CustomFieldTypes::FLOAT,
                    'config' => [
                        'label' => [
                            'en-GB' => 'Insurance value (can be left empty)',
                            'pl-PL' => 'Wartość ubezpieczenia (może zostać puste)',
                        ],
                    ],
                ],
                [
                    'name' => $customFieldPrefix . '_height',
                    'label' => 'Height (cm)',
                    'type' => CustomFieldTypes::FLOAT,
                    'config' => [
                        'label' => [
                            'en-GB' => 'Height (cm)',
                            'pl-PL' => 'Wysokość (cm)',
                        ],
                    ],
                ],
                [
                    'name' => $customFieldPrefix . '_width',
                    'label' => 'Width (cm)',
                    'type' => CustomFieldTypes::FLOAT,
                    'config' => [
                        'label' => [
                            'en-GB' => 'Width (cm)',
                            'pl-PL' => 'Szerokość (cm)',
                        ],
                    ],
                ],
                [
                    'name' => $customFieldPrefix . '_depth',
                    'label' => 'Depth (cm)',
                    'type' => CustomFieldTypes::FLOAT,
                    'config' => [
                        'label' => [
                            'en-GB' => 'Depth (cm)',
                            'pl-PL' => 'Głębokość (cm)',
                        ],
                    ],
                ],
            ],
            'relations' => [[
                'entityName' => 'order',
            ]],
        ];
    }
}
