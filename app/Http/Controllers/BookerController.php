<?php

namespace App\Http\Controllers;

use App\Models\Booker;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

class BookerController extends Controller
{
    public function pembooking()
    {
        $data = Booker::all();
        return view('pembooking',['data' => $data]);
    }
    public function form()
    {
        return view('form');
    }

    public function book(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'jam'=>'required',
            'pesan'=>'required'
        ]);
        
        $table = new Booker;
        $table->nama = $request->nama;
        $table->jam = $request->jam;
        $table->pesan = $request->pesan;
        $table->save();
        if($table->save())
        {
            return redirect('/booking')->with('Berhasil');
        }
    }

}
