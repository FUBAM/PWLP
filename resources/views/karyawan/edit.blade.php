@extends('karyawan.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 28rem;">
            <div class="card-header">
                Edit Data Karyawan
            </div>
            <div class="card-body">
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Duh!</strong> Ada kesalahan input brok.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form method="post" action="{{ route('karyawan.update', $karyawan->id) }}" id="myForm">
                    @csrf
                    @method('PUT') 

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" 
                            value="{{ $karyawan->nama }}" aria-describedby="nama">
                    </div>
                    
                    <div class="form-group">
                        <label for="tmp_lahir">Tempat Lahir</label>
                        <input type="text" name="tmp_lahir" class="form-control" id="tmp_lahir"
                            value="{{ $karyawan->tmp_lahir }}" aria-describedby="tmp_lahir">
                    </div>

                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" 
                            value="{{ $karyawan->tgl_lahir }}" aria-describedby="tgl_lahir">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat"
                            value="{{ $karyawan->alamat }}" aria-describedby="alamat">
                    </div>

                    <div class="form-group">
                        <label for="no_hp">Nomor HP</label>
                        <input type="text" name="no_hp" class="form-control" id="no_hp"
                            value="{{ $karyawan->no_hp }}" aria-describedby="no_hp">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a class="btn btn-secondary" href="{{ route('karyawan.index') }}">Batal</a>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection