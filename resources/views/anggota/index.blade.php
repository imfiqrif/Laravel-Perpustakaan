@extends('layout/layout')

@section('content')
<div class="card border-0 box-shadow">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h5 class="text-blue">Daftar Anggota</h5>
            <a href="{{ route('anggota.create') }}" class="btn btn-primary btn-fw">
                <i class="fa fa-plus">
                </i>
                    Tambah Anggota
            </a>    
        </div>
    </div>
    <div class="card-block">
        <table class="table table-hover data-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tangal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Prodi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataanggota  as $data)
                <tr>
                <td>{{ $data->user_id }}</td>
                <td>{{ $data->npm }}</a></td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->tempat_lahir }}</td>
                <td>{{ $data->tgl_lahir }}</td>
                <td> {{$data->jk === "L" ? "Laki - Laki" : "Perempuan"}}</td>
                <td>{{ $data->prodi }}</td>
                <td>
                    <div class="btn-group dropdown">
                   <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Action
                   </button>
                   <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                     <a class="dropdown-item" href="{{route('anggota.edit', $data->id)}}"> Edit </a>
                     <form action="{{ route('anggota.index', $data->id) }}" class="pull-left"  method="POST">
                     {{ csrf_field() }}
                     {{ method_field('DELETE') }}
                     <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete
                     </button>
                   </form>
                   </div>
                 </div>
                   </td>
                </tr>
                   @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('script')
@endsection