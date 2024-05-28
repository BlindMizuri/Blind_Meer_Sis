<?php

namespace SisLaravelMain\vendor\fakerphp\faker\src\Faker\Provider\hu_HU;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = [
        '+36-##-###-####',
        '+36#########',
        '+36(##)###-###',
        '06-##-###-####',
        '06(##)###-###',
    ];
}
