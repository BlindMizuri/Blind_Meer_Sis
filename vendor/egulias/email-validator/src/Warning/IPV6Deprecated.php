<?php

namespace SisLaravelMain\vendor\egulias\email-validator\src\Warning;

class IPV6Deprecated extends Warning
{
    public const CODE = 13;

    public function __construct()
    {
        $this->message = 'Deprecated form of IPV6';
        $this->rfcNumber = 5321;
    }
}
