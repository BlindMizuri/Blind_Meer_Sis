<?php

<<<<<<< HEAD
namespace SisLaravelMain\app\Http\Controllers;
=======
namespace App\Http\Controllers;
>>>>>>> b3251bc7753aafdbd99fc811f81d2827256b9882

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
