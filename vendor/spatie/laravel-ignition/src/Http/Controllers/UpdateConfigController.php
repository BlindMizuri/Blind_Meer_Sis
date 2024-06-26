<?php

namespace SisLaravelMain\vendor\spatie\laravel-ignition\src\Http\Controllers;

use Spatie\Ignition\Config\IgnitionConfig;
use Spatie\LaravelIgnition\Http\Requests\UpdateConfigRequest;

class UpdateConfigController
{
    public function __invoke(UpdateConfigRequest $request)
    {
        $result = (new IgnitionConfig())->saveValues($request->validated());

        return response()->json($result);
    }
}
