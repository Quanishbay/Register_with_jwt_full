<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
    public function store(StoreRequest $request) {
        $data = $request ->validated();
        $data['password'] = Hash::make($data['password']);
        $user = User::firstOrCreate([
            'email' => $data['email']
        ], $data);

        return response()->json([
            'user' => [
                'name' => $user->name,
                'email' => $user->email,
            ]
        ]);
    }
}
