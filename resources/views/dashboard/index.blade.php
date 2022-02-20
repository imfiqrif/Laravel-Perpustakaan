@extends('layout.layout')

@section('content')
<div class="card border-0 box-shadow">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h5 class="text-blue">Daftar Buku</h5>
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
                    <th>No</th>
                    <th>Cover</th>
                    <th>Kode Buku</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Klasifikasi</th>
                </tr>
            </thead>
            <tbody>
                <td>1</td>
                <td>101</td>
                <td>22 Januari 2022</td>
                <td>Testing</td>
                <td>1</td>
                <td>10000</td>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('script')
@endsection