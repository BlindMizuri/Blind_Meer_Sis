<?php

namespace SisLaravelMain\vendor\egulias\email-validator\src\Result\Reason;

class EmptyReason implements Reason
{
    public function code() : int
    {
        return 0;
    }

    public function description() : string
    {
        return 'Empty reason';
    }
}
