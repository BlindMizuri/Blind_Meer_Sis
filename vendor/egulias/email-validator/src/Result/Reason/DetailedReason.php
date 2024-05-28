<?php

namespace SisLaravelMain\vendor\egulias\email-validator\src\Result\Reason;

abstract class DetailedReason implements Reason
{
    protected $detailedDescription;

    public function __construct(string $details)
    {
        $this->detailedDescription = $details;
    }
}
