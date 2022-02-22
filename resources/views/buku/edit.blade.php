@extends('layout/layout')

@section('content')

<form action="{{ route('buku.update', $databuku->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}

                        <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                            <label for="judul" class="col-md-4 control-label">Judul</label>
                             <div class="col-lg-5">
                                <input id="judul" type="text" class="form-control" name="judul" value="{{ $databuku->judul }}" required>
                                @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('npm') ? ' has-error' : '' }}">
                            <label for="isbn" class="col-md-4 control-label">ISBN</label>
                            <div class="col-lg-5">
                                <input id="isbn" type="text" class="form-control" name="isbn" value="{{ $databuku->isbn }}" required>
                                @if ($errors->has('isbn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isbn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('pengarang') ? ' has-error' : '' }}">
                            <label for="pengarang" class="col-md-4 control-label">Pengarang</label>
                            <div class="col-lg-5">
                                <input id="pengarang" type="text" class="form-control" name="pengarang" value="{{ $databuku->pengarang }}" required>
                                @if ($errors->has('pengarang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pengarang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('penerbit') ? ' has-error' : '' }}">
                            <label for="penerbit" class="col-md-4 control-label">Penerbit</label>
                            <div class="col-lg-5">
                                <input id="penerbit" type="text" class="form-control" name="penerbit" value="{{ $databuku->penerbit }}" required>
                                @if ($errors->has('penerbit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('penerbit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tahun_terbit') ? ' has-error' : '' }}">
                            <label for="tahun_terbit" class="col-md-4 control-label">Tahun Terbit</label>
                            <div class="col-lg-5">
                                <input id="tahun_terbit" type="number" maxlength="4" class="form-control" name="tahun_terbit" value="{{ $databuku->tahun_terbit }}" required>
                                @if ($errors->has('tahun_terbit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tahun_terbit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('jumlah_buku') ? ' has-error' : '' }}">
                            <label for="jumlah_buku" class="col-md-4 control-label">Jumlah Buku</label>
                            <div class="col-lg-5">
                                <input id="jumlah_buku" type="number" maxlength="4" class="form-control" name="jumlah_buku" value="{{ $databuku->jumlah_buku }}" required>
                                @if ($errors->has('jumlah_buku'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jumlah_buku') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('lokasi') ? ' has-error' : '' }}">
                            <label for="lokasi" class="col-md-4 control-label">Lokasi</label>
                            <div class="col-lg-5">
                            <select class="form-control" name="lokasi" required="">
                                <option value="rak1" {{$databuku->lokasi === "rak1" ? "selected" : ""}}>Rak 1</option>
                                <option value="rak2" {{$databuku->lokasi === "rak2" ? "selected" : ""}}>Rak 2</option>
                                <option value="rak3" {{$databuku->lokasi === "rak3" ? "selected" : ""}}>Rak 3</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group well">
                            <button type="submit" class="btn btn-primary" id="submit">Update</button>
                            <a href="{{route('buku.index')}}" class="btn btn-light pull-right">Back</a>
                        </div>    
</form>
@endsection