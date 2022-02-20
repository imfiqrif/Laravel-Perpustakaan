@extends('layout/layout')

@section('content')
<div class="card border-0 box-shadow">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h5 class="text-blue">Daftar Anggota</h5>
            <a href="{{ url('anggota.tambah') }}" class="btn btn-primary btn-fw">
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
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Prodi</th>
                    <th>Jenis Kelamin</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($breadcumb as $data)
                <td></td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->npm }}</td>
                <td>{{ $data->prodi }}</td>
                <td> {{$data->jk === "L" ? "Laki - Laki" : "Perempuan"}}</td>
                <td>
                    <div class="btn-group dropdown">
                   <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Action
                   </button>
                   <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                     <a class="dropdown-item" href="{{url('anggota.index', $data->id)}}"> Edit </a>
                     <form action="{{ url('anggota.index', $data->id) }}" class="pull-left"  method="post">
                     {{ csrf_field() }}
                     {{ method_field('delete') }}
                     <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete
                     </button>
                   </form>
                   </div>
                 </div>
                   </td>
                   @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('script')
@endsection