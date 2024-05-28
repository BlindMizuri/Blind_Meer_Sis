<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SisLaravelMain\vendor\symfony\mailer\Exception;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface TransportExceptionInterface extends ExceptionInterface
{
    public function getDebug(): string;

    public function appendDebug(string $debug): void;
}
