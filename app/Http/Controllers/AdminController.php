<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Selamat datang di Dashboard Admin']);
    }

    public function products()
    {
        return response()->json(['message' => 'Daftar Produk']);
    }
}
