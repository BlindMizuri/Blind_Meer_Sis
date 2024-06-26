<?php

namespace SisLaravelMain\vendor\spatie\ignition\src\ErrorPage;

class Renderer
{
    /**
     * @param array<string, mixed> $data
     *
     * @return void
     */
    public function render(array $data, string $viewPath): void
    {
        $viewFile = $viewPath;

        extract($data, EXTR_OVERWRITE);

        include $viewFile;
    }

    public function renderAsString(array $date, string $viewPath): string
    {
        ob_start();

        $this->render($date, $viewPath);

        return ob_get_clean();
    }
}
