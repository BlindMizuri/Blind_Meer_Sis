<?php

namespace SisLaravelMain\vendor\fakerphp\faker\src\Faker\Provider\sl_SI;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = [
        '+386 ## ### ###',
        '00386 ## ### ###',
        '0## ### ###',
        '00386########',
        '+386########',
        '0########',
        '+386 # ### ####',
        '00386 # ### ####',
        '0# ### ####',
    ];
}
