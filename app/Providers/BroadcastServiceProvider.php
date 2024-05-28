<?php

<<<<<<< HEAD
namespace SisLaravelMain\app\Providers;
=======
namespace App\Providers;
>>>>>>> b3251bc7753aafdbd99fc811f81d2827256b9882

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
