<?php

namespace SisLaravelMain\tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;use SisLaravelMain\tests\CreatesApplication;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
}
