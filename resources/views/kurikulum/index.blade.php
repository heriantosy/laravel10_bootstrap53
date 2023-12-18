@extends('layout.main')
@section('content')

<h1>Master Kurikulum</h1>
<div class="card">
        <div class="card-header">
        <a href="{{ route('kurikulum.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
        </div>
        <div class="card-body">   
            <table class="table table-sm table-stripped table-bordered">
                <thead>
            <tr>
                <td>No</td>
                <td>Nama Kurikulum</td>
                <td>Tahun</td>
            </tr>
            </thead>
            @foreach ($kurikulum as $rows)
            <tbody>
                 <tr>
                    <td>{{ $loop->iteration }} </td>
                    <td>{{ $rows->nama_kurikulum }}</td>
                    <td>{{ $rows->tahun }} </td>
                 </tr>   
            @endforeach
            </tbody>
            </table>
        </div>
</div>

@endsection