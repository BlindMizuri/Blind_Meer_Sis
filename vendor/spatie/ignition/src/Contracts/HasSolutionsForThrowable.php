<?php

namespace SisLaravelMain\vendor\spatie\ignition\src\Contracts;

use Throwable;

/**
 * Interface used for SolutionProviders.
 */
interface HasSolutionsForThrowable
{
    public function canSolve(Throwable $throwable): bool;

    /** @return array<int, \Spatie\Ignition\Contracts\Solution> */
    public function getSolutions(Throwable $throwable): array;
}
