<?php

namespace SisLaravelMain\vendor\fakerphp\faker\src\Faker\Provider\zh_TW;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = [
        '+8869########',
        '+886-9##-###-###',
        '09########',
        '09##-###-###',
        '(02)########',
        '(02)####-####',
        '(0#)#######',
        '(0#)###-####',
        '(0##)######',
        '(0##)###-###',
    ];
}
