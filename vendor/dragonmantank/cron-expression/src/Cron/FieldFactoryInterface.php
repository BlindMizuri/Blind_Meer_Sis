<?php

namespace SisLaravelMain\vendor\dragonmantank\cron-expression\src\Cron;

interface FieldFactoryInterface
{
    public function getField(int $position): FieldInterface;
}
