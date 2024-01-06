<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booker;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Pendaftar;

class AdminController extends Controller
{
    public function main()
    {
        $users = User::all();
        $data = Booker::all();
        $jumlah_pendaftar = $users->count();
        $jumlah_pembooking = $data->count();
        return view('main', [
            'jumlah_pendaftar' => $jumlah_pendaftar,
            'jumlah_pembooking' => $jumlah_pembooking
        ]);
    }
}
