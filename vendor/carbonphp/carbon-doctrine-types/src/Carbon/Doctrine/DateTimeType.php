<?php

namespace SisLaravelMain\vendor\carbonphp\carbon-doctrine-types\src\Carbon\Doctrine;

use Carbon\Carbon;
use Doctrine\DBAL\Types\VarDateTimeType;

class DateTimeType extends VarDateTimeType implements CarbonDoctrineType
{
    /** @use CarbonTypeConverter<Carbon> */
    use CarbonTypeConverter;
}
