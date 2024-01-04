<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Pendaftar</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jam Kedatangan</th>
          <th>Pesan</th>
        </tr>
        </thead>
        <tbody>
              @foreach ($data as $item)
                  <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jam }}</td>
                    <td>{{ $item->pesan }}</td>
                  </tr>
              @endforeach
        </tbody>
      </table>
    </div>
</div>