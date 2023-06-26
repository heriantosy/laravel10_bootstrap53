@extends('layout.main')
@section('content')

<h3>Add Data</h3>
<div class="card">
  <div class="card-header">
    <button type="button" class="btn btn-sm btn-primary" 
    onclick="window.location='{{ url('siswa') }}'">
            <i class="fas fa-plus-circle">Kembali</i>
    </button>
    </div>
    <div class="card-body">
    <form method="POST" action="{{ url('siswa') }}">
            <div class="row mb-3">
              <label for="id_siswa" class="col-sm-2 col-form-label">ID Siswa</label>
              <div class="col-sm-10">
                <input type="text" class="form-control-sm" id="id_siswa" name="id_siswa">
              </div>
            </div>

            <div class="row mb-3">
              <label for="nama_siswa" class="col-sm-2 col-form-label">Nama Siswa</label>
              <div class="col-sm-10">
                <input type="text" class="form-control-sm" id="nama_siswa" name="id_siswa">
              </div>
            </div>
          
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
    </div>
</div>
@endsection