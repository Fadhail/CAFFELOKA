<!-- Improved Card -->
@foreach ($caffes as $caffe)
    <a href="/pembooking/form/{{ $caffe->id }}">
<div class="relative overflow-hidden bg-gray-50 mb-8 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
    <div class="absolute inset-0 bg-center dark:bg-black"></div>
    <div class="group relative flex h-full rounded-xl border border-gray-200 transition duration-300 ease-in-out group-hover:border-gray-700 dark:border-gray-700">
        <img src="{{ asset('fotoCaffe/' . $caffe->foto) }}"
            class="block w-full h-full object-cover transition duration-300 transform scale-100 group-hover:scale-110" alt="" />
        <div class="absolute bottom-0 p-4 text-white transition duration-300 ease-in-out transform translate-y-0 translate-x-0 group-hover:-translate-y-1 group-hover:translate-x-3">
            <h1 class="text-2xl font-bold">{{ $caffe->namacaffe }}</h1>
            <p class="text-sm font-light">{{ $caffe->alamat }}</p>
        </div>
    </div>
</div>
</a>
@endforeach
