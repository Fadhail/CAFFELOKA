<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="flex items-center mb-4">
            <h2 class="text-2xl font-bold ml-4">Edit Caffe</h2>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('caffes.update', $caffe->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="namacaffe" class="block text-sm font-medium text-gray-600">Nama Caffe:</label>
                <input type="text" name="namacaffe" class="mt-1 p-2 border rounded-md w-full" value="{{ $caffe->namacaffe }}" required>
            </div>

            <div class="mb-4">
                <label for="alamat" class="block text-sm font-medium text-gray-600">Alamat:</label>
                <input type="text" name="alamat" class="mt-1 p-2 border rounded-md w-full" value="{{ $caffe->alamat }}" required>
            </div>

            <div class="mb-4">
                <label for="foto" class="block text-sm font-medium text-gray-600">Foto:</label>
                <input type="file" name="foto" class="mt-1 p-2 border rounded-md w-full">
                
                @if($caffe->foto)
                    <img src="{{ asset('fotoCaffe/' . $caffe->foto) }}" alt="Caffe Image" class="mt-2" style="max-width: 200px;">
                @endif
            </div>

            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700"><a href="{{ route('caffes.index') }}" class="text-white">&lt; Back</a></button>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Update Caffe</button>
        </form>
        

        
    </div>
</x-app-layout>
