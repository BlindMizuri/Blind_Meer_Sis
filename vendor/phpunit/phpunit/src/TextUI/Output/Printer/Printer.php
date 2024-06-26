<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SisLaravelMain\vendor\phpunit\phpunit\src\TextUI\Output\Printer;

/**
 * @internal This interface is not covered by the backward compatibility promise for PHPUnit
 */
interface Printer
{
    public function print(string $buffer): void;

    public function flush(): void;
}
