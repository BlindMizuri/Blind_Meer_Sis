<?php

namespace SisLaravelMain\vendor\nunomaduro\collision\src\Contracts;

use Whoops\Exception\Frame;

interface RenderableOnCollisionEditor
{
    /**
     * Returns the frame to be used on the Collision Editor.
     */
    public function toCollisionEditor(): Frame;
}
