@extends('layout/layout')

@section('content')
    <form class="form-horizontal" method="POST" action="{{ route('anggota.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
    <div class="form-group {{ $errors->has('npm') ? ' has-error' : '' }}">
        <label class="col-lg-2 control-label">NPM</label>
        <div class="col-lg-5">
            <input id="nama" type="text" name="npm" class="form-control" name="npm" value="{{ old('npm') }}" required>
            @if ($errors->has('npm'))
            <span class="help-block">
                <strong>{{ $errors->first('npm') }}</strong>
            </span>
        @endif
        </div>
    </div>
    <div class="form-group {{ $errors->has('npm') ? ' has-error' : '' }}">
        <label class="col-lg-2 control-label">Nama</label>
        <div class="col-lg-5">
            <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required>
            @if ($errors->has('nama'))
                <span class="help-block">
                    <strong>{{ $errors->first('nama') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group {{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
        <label class="col-lg-2 control-label">Tempat Lahir</label>
        <div class="col-lg-5">
            <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required>
            @if ($errors->has('tempat_lahir'))
                <span class="help-block">
                    <strong>{{ $errors->first('tempat_lahir') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group {{ $errors->has('tgl_lahir') ? ' has-error' : '' }}">
        <label class="col-lg-2 control-label">Tanggal Lahir</label>
        <div class="col-lg-5">
            <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required>
            @if ($errors->has('tgl_lahir'))
                <span class="help-block">
                    <strong>{{ $errors->first('tgl_lahir') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group {{  $errors->has('level') ? ' has-error' : ''  }}">
        <label class="col-lg-2 control-label">Jenis Kelamin</label>
        <div class="col-lg-5">
            <select class="form-control" name="jk" required="">
                <option value=""></option>
                <option value="L">Laki - Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
    </div>
    <div class="form-group {{ $errors->has('prodi') ? ' has-error' : '' }}">
        <label class="col-lg-2 control-label">Prodi</label>
        <div class="col-lg-5">
            <select class="form-control" name="prodi" required="">
                <option value=""></option>
                <option value="IF">Informatika</option>
                <option value="SI">Sistem Informasi</option>
            </select>
        </div>
    </div>
    <div class="form-group well">
        <button class="btn btn-primary ml-3" type="submit" id="submit"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        <a href="{{ url('anggota.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection

@section('script')
@endsection