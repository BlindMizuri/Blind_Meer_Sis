<?php

declare(strict_types=1);

namespace SisLaravelMain\vendor\league\flysystem\src;

class UnableToCheckFileExistence extends UnableToCheckExistence
{
    public function operation(): string
    {
        return FilesystemOperationFailed::OPERATION_FILE_EXISTS;
    }
}
