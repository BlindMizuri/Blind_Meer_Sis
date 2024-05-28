<?php

namespace SisLaravelMain\vendor\spatie\ignition\src\Contracts;

interface ConfigManager
{
    /** @return array<string, mixed> */
    public function load(): array;

    /** @param array<string, mixed> $options */
    public function save(array $options): bool;

    /** @return array<string, mixed> */
    public function getPersistentInfo(): array;
}
