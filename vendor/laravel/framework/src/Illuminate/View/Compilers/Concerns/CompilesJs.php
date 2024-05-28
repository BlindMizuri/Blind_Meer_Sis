<?php

namespace SisLaravelMain\vendor\laravel\framework\src\Illuminate\View\Compilers\Concerns;

use Illuminate\Support\Js;

trait CompilesJs
{
    /**
     * Compile the "@js" directive into valid PHP.
     *
     * @param  string  $expression
     * @return string
     */
    protected function compileJs(string $expression)
    {
        return sprintf(
            "<?php echo \%s::from(%s)->toHtml() ?>",
            Js::class, $this->stripParentheses($expression)
        );
    }
}
