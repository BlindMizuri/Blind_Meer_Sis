<?php

<<<<<<< HEAD
namespace SisLaravelMain\app\Http\Middleware;
=======
namespace App\Http\Middleware;
>>>>>>> b3251bc7753aafdbd99fc811f81d2827256b9882

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
    public function hosts(): array
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
