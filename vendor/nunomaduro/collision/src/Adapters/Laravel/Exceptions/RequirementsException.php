<?php

declare(strict_types=1);

namespace SisLaravelMain\vendor\nunomaduro\collision\src\Adapters\Laravel\Exceptions;

use NunoMaduro\Collision\Contracts\RenderlessEditor;
use NunoMaduro\Collision\Contracts\RenderlessTrace;
use RuntimeException;

/**
 * @internal
 */
final class RequirementsException extends RuntimeException implements RenderlessEditor, RenderlessTrace
{
}
