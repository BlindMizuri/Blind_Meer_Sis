<?php declare(strict_types=1);

namespace SisLaravelMain\vendor\nikic\php-parser\lib\PhpParser\Node\Stmt;

use PhpParser\Node;

abstract class TraitUseAdaptation extends Node\Stmt {
    /** @var Node\Name|null Trait name */
    public ?Node\Name $trait;
    /** @var Node\Identifier Method name */
    public Node\Identifier $method;
}
