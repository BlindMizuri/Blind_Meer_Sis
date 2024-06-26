<?php

namespace SisLaravelMain\vendor\egulias\email-validator\src\Warning;

class IPV6BadChar extends Warning
{
    public const CODE = 74;

    public function __construct()
    {
        $this->message = 'Bad char in IPV6 domain literal';
        $this->rfcNumber = 5322;
    }
}
