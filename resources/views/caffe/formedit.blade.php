<!-- resources/views/caffe/editcaffe.blade.php -->

@extends('layouts.app') <!-- Make sure to adjust the layout as needed -->

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Caffe</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <!-- Form for editing a cafe -->
        <form action="{{ route('caffes.update', ['id' => $caffe->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Add form fields for editing cafe details -->
            <div class="form-group">
                <label for="namacaffe">Nama Caffe:</label>
                <input type="text" name="namacaffe" class="form-control" value="{{ $caffe->namacaffe }}" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" class="form-control" value="{{ $caffe->alamat }}" required>
            </div>

            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" name="foto" class="form-control">
                <small class="text-muted">Leave it blank if you don't want to update the photo.</small>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary">Update Caffe</button>
        </form>
    </div>
</div>

@endsection
