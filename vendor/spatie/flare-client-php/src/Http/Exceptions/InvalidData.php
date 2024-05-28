<?php

namespace SisLaravelMain\vendor\spatie\flare-client-php\src\Http\Exceptions;

use Spatie\FlareClient\Http\Response;

class InvalidData extends BadResponseCode
{
    public static function getMessageForResponse(Response $response): string
    {
        return 'Invalid data found';
    }
}
