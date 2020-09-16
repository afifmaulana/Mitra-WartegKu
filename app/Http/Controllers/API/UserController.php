<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function users()
    {
        $user = User::all();
        return response()->json([
            'message' => 'Berhasil menampilkan semua User',
            'status' => true,
            'data' => $user
        ]);
    }
}
