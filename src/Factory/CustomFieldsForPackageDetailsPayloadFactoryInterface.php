<?php

declare(strict_types=1);

namespace BitBag\ShopwareOrlenPaczkaPlugin\Factory;

interface CustomFieldsForPackageDetailsPayloadFactoryInterface
{
    public const PACKAGE_DETAILS_KEY = 'bitbag_orlen_package_details';

    public const TECHNICAL_NAME = 'config.technical_name';

    public function create(): array;
}
