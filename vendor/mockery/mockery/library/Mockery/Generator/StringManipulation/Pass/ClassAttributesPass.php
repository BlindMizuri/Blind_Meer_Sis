<?php

/**
 * Mockery (https://docs.mockery.io/)
 *
 * @copyright https://github.com/mockery/mockery/blob/HEAD/COPYRIGHT.md
 * @license https://github.com/mockery/mockery/blob/HEAD/LICENSE BSD 3-Clause License
 * @link https://github.com/mockery/mockery for the canonical source repository
 */

namespace SisLaravelMain\vendor\mockery\mockery\library\Mockery\Generator\StringManipulation\Pass;

use Mockery\Generator\MockConfiguration;

use function implode;
use function str_replace;

class ClassAttributesPass implements Pass
{
    public function apply($code, MockConfiguration $config)
    {
        $class =  $config->getTargetClass();

        if (! $class) {
            return $code;
        }

        /** @var array<string> $attributes */
        $attributes = $class->getAttributes();

        if ($attributes !== []) {
            return str_replace('#[\AllowDynamicProperties]', '#[' . implode(',', $attributes) . ']', $code);
        }

        return $code;
    }
}
