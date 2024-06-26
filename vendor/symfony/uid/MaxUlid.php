<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SisLaravelMain\vendor\symfony\uid;

class MaxUlid extends Ulid
{
    public function __construct()
    {
        $this->uid = parent::MAX;
    }
}
