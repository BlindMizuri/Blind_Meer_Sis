<?php

/**
 * Mockery (https://docs.mockery.io/)
 *
 * @copyright https://github.com/mockery/mockery/blob/HEAD/COPYRIGHT.md
 * @license https://github.com/mockery/mockery/blob/HEAD/LICENSE BSD 3-Clause License
 * @link https://github.com/mockery/mockery for the canonical source repository
 */

namespace SisLaravelMain\vendor\mockery\mockery\library\Mockery\Generator;

use function implode;
use function str_replace;

class MockNameBuilder
{
    protected $parts = [];

    protected static $mockCounter = 0;

    public function addPart($part)
    {
        $this->parts[] = $part;

        return $this;
    }

    public function build()
    {
        $parts = ['Mockery', static::$mockCounter++];

        foreach ($this->parts as $part) {
            $parts[] = str_replace('\\', '_', $part);
        }

        return implode('_', $parts);
    }
}
