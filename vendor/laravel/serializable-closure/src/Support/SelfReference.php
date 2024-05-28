<?php

namespace SisLaravelMain\vendor\laravel\serializable-closure\src\Support;

class SelfReference
{
    /**
     * The unique hash representing the object.
     *
     * @var string
     */
    public $hash;

    /**
     * Creates a new self reference instance.
     *
     * @param  string  $hash
     * @return void
     */
    public function __construct($hash)
    {
        $this->hash = $hash;
    }
}
