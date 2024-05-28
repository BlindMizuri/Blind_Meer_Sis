<?php

namespace SisLaravelMain\vendor\fakerphp\faker\src\Faker\Provider\sl_SI;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = ['gmail.com', 'gmail.com', 'gmail.com', 'hotmail.com', 'yahoo.com', 'siol.net', 't-2.net'];

    protected static $tld = ['si', 'si', 'si', 'si', 'eu', 'com', 'info', 'net', 'org'];
}
