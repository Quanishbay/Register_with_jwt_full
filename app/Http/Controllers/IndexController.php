<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $fruits = Fruit::all();
        return response()->json($fruits);
    }
}
