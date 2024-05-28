<?php
declare(strict_types=1);

namespace SisLaravelMain\vendor\league\flysystem\src\UrlGeneration;

use DateTimeInterface;
use League\Flysystem\Config;
use League\Flysystem\UnableToGenerateTemporaryUrl;

interface TemporaryUrlGenerator
{
    /**
     * @throws UnableToGenerateTemporaryUrl
     */
    public function temporaryUrl(string $path, DateTimeInterface $expiresAt, Config $config): string;
}
