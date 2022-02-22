@extends('layout/layout')

@section('content')
<div class="card border-0 box-shadow">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h5 class="text-blue">Daftar Buku</h5>
            <a href="{{ route('buku.create') }}" class="btn btn-primary btn-fw">
                <i class="fa fa-plus">
                </i>
                    Tambah Buku
            </a>    
        </div>
    </div>
    <div class="card-block">
        <table class="table table-hover data-table">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>ISBN</th>
                    <th>Penerbit</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Jumlah Buku</th>
                    <th>Lokasi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($databuku  as $data)
                <tr>
                <td>{{$data->judul}}</td>
                <td>{{ $data->isbn }}</td>
                <td>{{ $data->penerbit }}</td>
                <td>{{ $data->pengarang }}</td>
                <td>{{ $data->tahun_terbit }}</td>
                <td>{{ $data->jumlah_buku }}</td>
                <td>{{ $data->lokasi }}</td>
                <td>
                    <div class="btn-group dropdown">
                   <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Action
                   </button>
                   <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                     <a class="dropdown-item" href="{{route('buku.edit', $data->id)}}"> Edit </a>
                     <form action="{{ route('buku.index', $data->id) }}" class="pull-left"  method="post">
                     {{ csrf_field() }}
                     {{ method_field('delete') }}
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