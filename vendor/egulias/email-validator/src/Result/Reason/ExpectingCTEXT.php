<?php

namespace SisLaravelMain\vendor\egulias\email-validator\src\Result\Reason;

class ExpectingCTEXT implements Reason
{
    public function code() : int
    {
        return 139;
    }

    public function description() : string
    {
        return 'Expecting CTEXT';
    }
}
