@extends('layout.main')
@section('content')

<h3>Data Siswa</h3>
<div class="card">
<div class="card-header">
<button type="button" class="btn btn-sm btn-success" onclick="window.location='{{ url('siswa/add') }}'">
        <i class="fas fa-plus-circle"></i> Add
</button>
</div>
<div class="card-body">
  <table class="table table-sm table-stripped table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Genre</th>
            <th>Aksi</th>            
        </tr>
    </thead>

    <tbody>
        @foreach($siswa as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->nama_siswa }}</td>
            <td>{{ ($row->gender=='M') ? 'Male' : 'Female' }}</td>
            <td>
              <button onclick="window.location='{{ url('siswa/'.$row->id_siswa) }}'" class="btn btn-sn btn-warning" title="Edit Data">
                <i class="fas fa-edit"></i>
              </button>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection