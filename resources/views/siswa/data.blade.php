@extends('layout.main')
@section('content')
<div class="card">
<div class="card-header">
<button type="button" class="btn btn-sm btn-primary">
        <i class="fas fa-plus-circle">Add</i>
</button>
</div>
<div class="card-body">
  <table class="table table-sm table-stripped table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Genre</th>
        </tr>
    </thead>

    <tbody>
        @foreach($guru as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->nama_siswa }}</td>
            <td>{{ ($row->gender=='M') ? 'Male' : 'Female' }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection