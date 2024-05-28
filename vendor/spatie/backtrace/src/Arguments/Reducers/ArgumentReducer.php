<?php

namespace SisLaravelMain\vendor\spatie\backtrace\src\Arguments\Reducers;

use Spatie\Backtrace\Arguments\ReducedArgument\ReducedArgumentContract;

interface ArgumentReducer
{
    /**
     * @param mixed $argument
     */
    public function execute($argument): ReducedArgumentContract;
}
