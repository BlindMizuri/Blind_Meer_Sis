<?php

namespace SisLaravelMain\vendor\egulias\email-validator\src\Warning;

class CFWSNearAt extends Warning
{
    public const CODE = 49;

    public function __construct()
    {
        $this->message = "Deprecated folding white space near @";
    }
}
