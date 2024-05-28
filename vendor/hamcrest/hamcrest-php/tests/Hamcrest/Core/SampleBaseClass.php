<?php
namespace SisLaravelMain\vendor\hamcrest\hamcrest-php\tests\Hamcrest\Core;

class SampleBaseClass
{

    private $_arg;

    public function __construct($arg)
    {
        $this->_arg = $arg;
    }

    public function __toString()
    {
        return $this->_arg;
    }
}
