<?php

namespace SisLaravelMain\vendor\egulias\email-validator\src\Result\Reason;

class ConsecutiveAt implements Reason
{
    public function code() : int
    {
        return 128;
    }

    public function description() : string
    {
        return '@ found after another @';
    }

}
