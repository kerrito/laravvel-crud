<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use GuzzleHttp\Psr7\Request;
use App\Http\Controllers\mycontroller;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
   


}
