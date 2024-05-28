<?php

declare(strict_types=1);

namespace SisLaravelMain\vendor\league\flysystem\src;

use InvalidArgumentException as BaseInvalidArgumentException;

class InvalidStreamProvided extends BaseInvalidArgumentException implements FilesystemException
{
}
