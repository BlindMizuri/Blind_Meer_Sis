<?php

declare(strict_types=1);

/**
 * This file is part of Collision.
 *
 * (c) Nuno Maduro <enunomaduro@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace SisLaravelMain\vendor\nunomaduro\collision\src\Adapters\Laravel;

use Whoops\Exception\Inspector as BaseInspector;

/**
 * @internal
 */
final class Inspector extends BaseInspector
{
    /**
     * {@inheritdoc}
     */
    protected function getTrace($e)
    {
        return $e->getTrace();
    }
}
