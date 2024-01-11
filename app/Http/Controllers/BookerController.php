<?php

namespace App\Http\Controllers;

use App\Models\Booker;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use App\Models\Caffe;

class BookerController extends Controller
{
    public function pembooking()
    {
        $data = Booker::all();
        $caffes = Caffe::all();
        return view('pembooking', ['data' => $data, 'caffes' => $caffes]);
    }
    public function form($id)
    {
        $caffes = Caffe::find($id);
        return view('form', compact('caffes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'caffe' => 'required',
            'nama' => 'required',
            'jam' => 'required',
            'pesan' => 'required'
        ]);

        $table = new Booker;
        $table->caffe = $request->caffe;
        $table->nama = $request->nama;
        $table->jam = $request->jam;
        $table->pesan = $request->pesan;
        $table->save();
        if ($table->save()) {
            return redirect('/booking')->with('Berhasil');
        }
    }
}
