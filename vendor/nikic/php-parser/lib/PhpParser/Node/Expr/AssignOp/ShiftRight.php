<?php declare(strict_types=1);

namespace SisLaravelMain\vendor\nikic\php-parser\lib\PhpParser\Node\Expr\AssignOp;

use PhpParser\Node\Expr\AssignOp;

class ShiftRight extends AssignOp {
    public function getType(): string {
        return 'Expr_AssignOp_ShiftRight';
    }
}
