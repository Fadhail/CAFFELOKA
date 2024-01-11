<div class="card">
  <div class="card-header">
      <h3 class="card-title">Data Caffe</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
      <table class="min-w-full table-auto">
          <thead>
              <tr>
                  <th class="px-4 py-2">No</th>
                  <th class="px-4 py-2">Nama Caffe</th>
                  <th class="px-4 py-2">Alamat</th>
                  <th class="px-4 py-2">Gambar</th>
                  <th class="px-4 py-2">Action</th> <!-- Add a column for actions -->
              </tr>
          </thead>
          <tbody>
              @foreach ($caffes as $caffe)
                  <tr>
                      <td class="px-4 py-2">{{ $caffe->id }}</td>
                      <td class="px-4 py-2">{{ $caffe->namacaffe }}</td>
                      <td class="px-4 py-2">{{ $caffe->alamat }}</td>
                      <td class="px-4 py-2"><img src="{{ asset('fotoCaffe/' . $caffe->foto) }}" alt="Caffe"></td>
                      <td class="px-4 py-2">
                          <!-- Update Button -->
                          <a href="{{ route('caffes.edit', ['id' => $caffe->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</a><br>
                          <br>
                          <!-- Delete Button -->
                          <form action="{{ route('caffes.destroy', ['id' => $caffe->id]) }}" method="POST" style="display: inline;">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Kamu yakin ingin menghapus caffe?')">Delete</button>
                          </form>
                      </td>
                  </tr>
              @endforeach
          </tbody>
      </table>
  </div>
</div>
