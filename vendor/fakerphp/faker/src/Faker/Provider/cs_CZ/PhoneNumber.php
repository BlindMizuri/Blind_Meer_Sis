<?php

namespace SisLaravelMain\vendor\fakerphp\faker\src\Faker\Provider\cs_CZ;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = [
        '+420 %## ### ###',
        '%## ### ###',
        '00420%########',
        '+420%########',
        '%########',
    ];
}
