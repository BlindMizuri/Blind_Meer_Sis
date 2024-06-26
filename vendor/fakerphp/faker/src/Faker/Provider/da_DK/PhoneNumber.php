<?php

namespace SisLaravelMain\vendor\fakerphp\faker\src\Faker\Provider\da_DK;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @var array Danish phonenumber formats.
     */
    protected static $formats = [
        '+45 ## ## ## ##',
        '+45 #### ####',
        '+45########',
        '## ## ## ##',
        '#### ####',
        '########',
    ];
}
