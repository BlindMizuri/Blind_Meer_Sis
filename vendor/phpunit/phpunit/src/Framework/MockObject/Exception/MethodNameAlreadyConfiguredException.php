<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SisLaravelMain\vendor\phpunit\phpunit\src\Framework\MockObject\Exception;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MethodNameAlreadyConfiguredException extends \PHPUnit\Framework\Exception implements Exception
{
    public function __construct()
    {
        parent::__construct('Method name is already configured');
    }
}