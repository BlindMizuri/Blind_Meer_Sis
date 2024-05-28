<?php

namespace SisLaravelMain\vendor\egulias\email-validator\src\Result\Reason;

class RFCWarnings implements Reason
{
    public function code() : int
    {
        return 997;
    }

    public function description() : string
    {
        return 'Warnings found after validating';
    }
}
