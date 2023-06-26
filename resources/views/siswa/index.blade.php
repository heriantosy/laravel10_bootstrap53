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
              <button onclick="window.location='{{ url('siswa/'.$row->id_siswa) }}'" type="button" class="btn btn-sm btn-warning" title="Edit Data">
                <i class="fas fa-edit"></i>
              </button>

              <form onsubmit="return deleteData('{{ $row->nama_siswa }}')" style="display: inline" method="POST"  action="{{ url('siswa/'.$row->id_siswa) }}">
                @csrf
                @method('DELETE')
                <button  type="submit"  title="Hapus Data" class="btn btn-danger btn-sm">
                <i class="fas fa-trash-alt"></i>
                </button>
               
              </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>

<script>
  function deleteData(name){
    pesan = confirm('Yakin data dengan nama ${name} ini dihapus?');
    if(pesan) return true;
    else return false;
  }
</script>
@endsection