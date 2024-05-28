<?php

namespace SisLaravelMain\vendor\fakerphp\faker\src\Faker\Provider\de_CH;

class Company extends \Faker\Provider\Company
{
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    ];

    protected static $companySuffix = ['AG', 'GmbH'];
}
