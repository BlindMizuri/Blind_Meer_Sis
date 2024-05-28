<?php

namespace SisLaravelMain\vendor\egulias\email-validator\src\Result\Reason;

class DotAtEnd implements Reason
{
    public function code() : int
    {
        return 142;
    }

    public function description() : string
    {
        return 'Dot at the end';
    }
}
