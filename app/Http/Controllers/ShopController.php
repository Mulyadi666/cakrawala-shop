<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Selamat datang di Cakrawala Shop']);
    }
}
