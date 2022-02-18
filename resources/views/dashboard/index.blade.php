@extends('layout')

@section('content')
<div class="card border-0 box-shadow">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h5 class="text-blue">Daftar Supplier</h5>
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#create" type="button">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Tambah
            </button>
        </div>
    </div>
    <div class="card-block">
        <table class="table table-hover data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Tanggal</th>
                    <th>Nama Bahan</th>
                    <th>Quantity</th>
                    <th>Harga</th>
                    <th>Supplier</th>
                </tr>
            </thead>
            <tbody>
                <td>1</td>
                <td>101</td>
                <td>22 Januari 2022</td>
                <td>Testing</td>
                <td>1</td>
                <td>10000</td>
                <td>A</td>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('script')
@endsection