<?php

namespace SisLaravelMain\vendor\egulias\email-validator\src\Result\Reason;

class CommaInDomain implements Reason
{
    public function code() : int
    {
        return 200;
    }

    public function description() : string
    {
        return "Comma ',' is not allowed in domain part";
    }
}
