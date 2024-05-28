<?php

namespace SisLaravelMain\vendor\egulias\email-validator\src\Result\Reason;

class UnclosedQuotedString implements Reason
{
    public function code() : int
    {
        return 145;
    }

    public function description() : string
    {
        return "Unclosed quoted string";
    }
}
