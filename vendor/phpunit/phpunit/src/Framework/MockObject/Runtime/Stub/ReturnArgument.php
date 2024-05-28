<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SisLaravelMain\vendor\phpunit\phpunit\src\Framework\MockObject\Runtime\Stub;

use PHPUnit\Framework\MockObject\Invocation;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnArgument implements Stub
{
    private readonly int $argumentIndex;

    public function __construct(int $argumentIndex)
    {
        $this->argumentIndex = $argumentIndex;
    }

    public function invoke(Invocation $invocation): mixed
    {
        return $invocation->parameters()[$this->argumentIndex] ?? null;
    }
}
