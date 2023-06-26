@extends('layout.main')
@section('content')
<h3>Data Guru</h3>
<div class="card">
<div class="card-header">
<button type="button" class="btn btn-sm btn-primary"  onclick="window.location='{{ url('siswa/add') }}'">
  
    <i class="fas fa-plus-circle">Add</i>
</button>
</div>
<div class="card-body">
@if (session('msg')) 
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil</strong> {{ session('msg') }}
      <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <table class="table table-sm table-stripped table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Guru</th>
            <th>Genre</th>
        </tr>
    </thead>
    <tbody>
        @foreach($guru as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->nama_guru }}</td>
            <td>{{ ($row->gender=='M') ? 'Male' : 'Female' }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection