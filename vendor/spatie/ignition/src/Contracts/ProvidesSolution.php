<?php

namespace SisLaravelMain\vendor\spatie\ignition\src\Contracts;

/**
 * Interface to be used on exceptions that provide their own solution.
 */
interface ProvidesSolution
{
    public function getSolution(): Solution;
}
