<?php

namespace SisLaravelMain\vendor\egulias\email-validator\src\Result\Reason;

class NoDomainPart implements Reason
{
    public function code() : int
    {
        return 131;
    }

    public function description() : string
    {
        return 'No domain part found';
    }
}
