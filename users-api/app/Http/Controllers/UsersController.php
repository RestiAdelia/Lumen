<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;

class UsersController extends Controller
{
    public function index()
    {
        return response()->json([
            'users' => [
                ['id' => 1, 'name' => 'iki'],
                ['id' => 2, 'name' => 'Resti'],
                ['id' => 3, 'name' => 'Adelia'],
                ['id' => 4, 'name' => 'AdeliaRsti'],
                ['id' => 5, 'name' => 'Res'],
                ['id' => 6, 'name' => 'adel'],
            ]
        ]);
    }
}
