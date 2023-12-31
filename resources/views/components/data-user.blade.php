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
          <th>Email</th>
          <th>Password</th>
          <th>Dibuat</th>
        </tr>
        </thead>
        <tbody>
              @foreach ($users as $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->created_at }}</td>
                  </tr>
              @endforeach
        </tbody>
      </table>
    </div>
</div>