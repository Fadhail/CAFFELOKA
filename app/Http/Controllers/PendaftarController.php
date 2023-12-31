<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function pendaftar()
    {
        $users = User::all();
        return View('pendaftar', [
            'users' => $users
        ]);
    }
}
