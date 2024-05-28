<?php

namespace SisLaravelMain\vendor\egulias\email-validator\src\Result\Reason;

class CRNoLF implements Reason
{
    public function code() : int
    {
        return 150;
    }

    public function description() : string
    {
        return 'Missing LF after CR';
    }
}
