<?php

namespace SisLaravelMain\vendor\egulias\email-validator\src\Result\Reason;

interface Reason
{
    /**
     * Code for user land to act upon;
     */
    public function code() : int;

    /**
     * Short description of the result, human readable.
     */
    public function description() : string;
}
