@extends('layout.layout')

@section('content')

<form action="{{ route('anggota.update', $dataanggota->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}

                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama</label>
                            <div class="col-lg-5">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ $dataanggota->nama }}" required>
                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('npm') ? ' has-error' : '' }}">
                            <label for="npm" class="col-md-4 control-label">NPM</label>
                            <div class="col-lg-5">
                                <input id="npm" type="number" class="form-control" name="npm" value="{{ $dataanggota->npm }}" maxlength="8" required>
                                @if ($errors->has('npm'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('npm') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
                            <label for="tempat_lahir" class="col-md-4 control-label">Tempat Lahir</label>
                            <div class="col-lg-5">
                                <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir" value="{{ $dataanggota->tempat_lahir }}" required>
                                @if ($errors->has('tempat_lahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tempat_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tgl_lahir') ? ' has-error' : '' }}">
                            <label for="tgl_lahir" class="col-md-4 control-label">Tanggal Lahir</label>
                            <div class="col-lg-5">
                                <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir" value="{{ $dataanggota->tgl_lahir }}" required>
                                @if ($errors->has('tgl_lahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tgl_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
                            <label for="level" class="col-md-4 control-label">Jenis Kelamin</label>
                            <div class="col-lg-5">
                            <select class="form-control" name="jk" required="">
                                <option value=""></option>
                                <option value="L" {{$dataanggota->jk === "L" ? "selected" : ""}}>Laki - Laki</option>
                                <option value="P" {{$dataanggota->jk === "P" ? "selected" : ""}}>Perempuan</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('prodi') ? ' has-error' : '' }}">
                            <label for="prodi" class="col-md-4 control-label">Prodi</label>
                            <div class="col-lg-5">
                            <select class="form-control" name="prodi" required="">
                                <option value=""></option>
                                <option value="TI" {{$dataanggota->prodi === "TI" ? "selected" : ""}} >Teknik Informatika</option>
                                <option value="SI" {{$dataanggota->prodi === "SI" ? "selected" : ""}} >Sistem Informasi</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group well">
                            <button type="submit" class="btn btn-primary ml-3" id="submit">Update</button>
                            <a href="{{route('anggota.index')}}" class="btn btn-light pull-right">Back</a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>
@endsection