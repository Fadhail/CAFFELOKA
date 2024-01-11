<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caffe;

class Caffe2Controller extends Controller
{
    public function index()
    {
        $caffes = Caffe::all();
        return view('caffe.uploadcaffe', compact('caffes'));
    }

    public function store(Request $request)
    {
        // Validation rules
        $validate = $request->validate([
            'namacaffe' => 'required',
            'alamat' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // Create a new Caffe instance
        $input = new Caffe();
        $input->namacaffe = $request->namacaffe;
        $input->alamat = $request->alamat;

        // Process image upload
        if ($request->hasFile('foto')) {
            $gambar = $request->file('foto');
            $namaFile = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('fotoCaffe'), $namaFile);

            $input->foto = $namaFile; // Save the image file name in the model
        }

        $input->save();

        if ($input) {
            return redirect()->back()->with('success', 'Caffe created successfully!');
        }
    }

    public function update(Request $request, $id)
    {
        // Find the Caffe record by ID
        $caffe = Caffe::find($id);

        // Validation rules for update
        $validate = $request->validate([
            'namacaffe' => 'required',
            'alamat' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // Update Caffe details
        $caffe->namacaffe = $request->namacaffe;
        $caffe->alamat = $request->alamat;

        // Process image update
        if ($request->hasFile('foto')) {
            $gambar = $request->file('foto');
            $namaFile = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('fotoCaffe'), $namaFile);

            $caffe->foto = $namaFile; // Save the updated image file name in the model
        }

        $caffe->save();

        return redirect()->back()->with('success', 'Caffe updated successfully!');
    }

    public function destroy($id)
    {
        // Find the Caffe record by ID and delete it
        $caffe = Caffe::find($id);
        $caffe->delete();

        return redirect()->back()->with('success', 'Caffe deleted successfully!');
    }
}
