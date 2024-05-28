<?php declare(strict_types=1);

namespace SisLaravelMain\vendor\nikic\php-parser\lib\PhpParser\Node\Expr\Cast;

use PhpParser\Node\Expr\Cast;

class String_ extends Cast {
    public function getType(): string {
        return 'Expr_Cast_String';
    }
}
