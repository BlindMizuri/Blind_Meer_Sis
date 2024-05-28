<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SisLaravelMain\vendor\phpunit\phpunit\src\Event\Events\Test\Outcome;

use PHPUnit\Event\Subscriber;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface SkippedSubscriber extends Subscriber
{
    public function notify(Skipped $event): void;
}
