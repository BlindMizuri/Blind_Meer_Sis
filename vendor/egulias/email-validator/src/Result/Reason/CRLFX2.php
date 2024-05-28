<?php

namespace SisLaravelMain\vendor\egulias\email-validator\src\Result\Reason;

class CRLFX2 implements Reason
{
    public function code() : int
    {
        return 148;
    }

    public function description() : string
    {
        return 'CR  LF tokens found twice';
    }
}
