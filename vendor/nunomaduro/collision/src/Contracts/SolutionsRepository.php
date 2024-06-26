<?php

declare(strict_types=1);

namespace SisLaravelMain\vendor\nunomaduro\collision\src\Contracts;

use Spatie\Ignition\Contracts\Solution;
use Throwable;

/**
 * @internal
 */
interface SolutionsRepository
{
    /**
     * Gets the solutions from the given `$throwable`.
     *
     * @return array<int, Solution>
     */
    public function getFromThrowable(Throwable $throwable): array;
}
