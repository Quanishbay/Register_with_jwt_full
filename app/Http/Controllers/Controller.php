<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller as BaseController;
use Laravel\Sanctum\HasApiTokens;

// Здесь используем правильный класс

class Controller extends BaseController // Наследуемся от BaseController
{
    use AuthorizesRequests;
}
