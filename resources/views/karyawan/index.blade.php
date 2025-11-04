@extends('karyawan.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Laravel 8 CRUD - Pemrograman Web Lanjut</h2>
        </div>
        <div class="float-left my-2">
            <h2><span class="label label-default">Daftar Karyawan</span></h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('karyawan.create') }}">Add New Record</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>No. HP</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($karyawan as $user)
    <tr>
        <td>{{ $karyawan->firstItem() + $loop->index }}</td>
        <td>{{ $user->nama }}</td>
        <td>{{ $user->tmp_lahir }}</td>
        <td>{{ $user->tgl_lahir }}</td>
        <td>{{ $user->alamat }}</td>
        <td>{{ $user->no_hp }}</td>
        <td>
            <form action="{{ route('karyawan.destroy', $user->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('karyawan.show', $user->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('karyawan.edit', $user->id) }}">Edit</a>

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<div class="text-center">
    {!! $karyawan->links() !!}
</div>

@endsection