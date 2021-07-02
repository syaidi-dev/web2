@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="panel-heading">
                <h4>Edit Data Mahasiswa</h4>
            </div>
            <div class="panel-body">
                <form action="{{ route('mahasiswa.update', $mahasiswa->id)}}" method="post">
                @csrf 
                
                    <div class="form-group row">
                        <label for="nim" class="col-sm-2 col-form-label">NPM</label>
                        <div class="col-sm-3">
                            <input type="text" name="npm" id="npm" class="form-control" value="{{ is_null($mahasiswa) ?'' : $mahasiswa->npm}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_mahasiswa" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-4">
                            <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control" value="{{ is_null($mahasiswa) ?'' : $mahasiswa->nama_mahasiswa}}">
                        </div>
                    </div>      
                    <div class="form-group row">
                        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-3">
                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="{{ is_null($mahasiswa) ?'' : $mahasiswa->tempat_lahir}}">
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="thl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-2">
                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{ is_null($mahasiswa) ?'' : $mahasiswa->tgl_lahir}}">
                        </div>
                    </div>              
                    <div class="form-group row">
                        <label for="jurusan" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-2">
                            <select name="jenis_kelamin" class="custom_select form-control" id="jenis_kelamin" value="{{ is_null($mahasiswa) ?'' : $mahasiswa->jenis_kelamin}}">
                              <option value="L">Laki-laki</option>
                              <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-2">
                            <input type="text" name="telepon" id="telepon" class="form-control" value="{{ is_null($mahasiswa) ?'' : $mahasiswa->telepon}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" id="alamat" class="form-control" value="{{ is_null($mahasiswa) ?'' : $mahasiswa->alamat}}">
                        </div>
                    </div> 
                    <div class="form-group">
                        <div class="form-row float-right">
                            <div class="col">
                                <button type="submit" class="btn btn-success">UPDATE</button>{!!csrf_field()!!}
                                <a href="{{ route('mahasiswa') }}" class="btn btn-md btn-danger">BATAL</a>  
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection