<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SisLaravelMain\vendor\phpunit\phpunit\src\Framework\TestSize;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
abstract class Known extends TestSize
{
    /**
     * @psalm-assert-if-true Known $this
     */
    public function isKnown(): bool
    {
        return true;
    }

    abstract public function isGreaterThan(self $other): bool;
}
