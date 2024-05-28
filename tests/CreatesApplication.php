<?php

<<<<<<< HEAD
namespace SisLaravelMain\tests;
=======
namespace Tests;
>>>>>>> b3251bc7753aafdbd99fc811f81d2827256b9882

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Application;

trait CreatesApplication
{
    /**
     * Creates the application.
     */
    public function createApplication(): Application
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
