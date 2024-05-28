<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SisLaravelMain\vendor\phpunit\phpunit\src\Framework\Exception\ObjectEquals;

use function sprintf;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ComparisonMethodDoesNotDeclareExactlyOneParameterException extends Exception
{
    public function __construct(string $className, string $methodName)
    {
        parent::__construct(
            sprintf(
                'Comparison method %s::%s() does not declare exactly one parameter.',
                $className,
                $methodName,
            ),
        );
    }
}
