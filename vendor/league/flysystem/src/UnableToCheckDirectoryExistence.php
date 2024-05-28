<?php

declare(strict_types=1);

namespace SisLaravelMain\vendor\league\flysystem\src;

class UnableToCheckDirectoryExistence extends UnableToCheckExistence
{
    public function operation(): string
    {
        return FilesystemOperationFailed::OPERATION_DIRECTORY_EXISTS;
    }
}
