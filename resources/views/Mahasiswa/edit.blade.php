@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Edit Data</div>

                <div class="card-body">
                    <form method="post" action="/mahasiswa/{{$mahasiswa->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" value="{{$mahasiswa->nama}}" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" value="{{$mahasiswa->email}}" name="email" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Kelas</label>
                            <select name="kelas" id="" class="form-control">
                                <option value="{{$mahasiswa->kelas}}">{{$mahasiswa->kelas}}</option>
                                <option value="IPS">IPS</option>
                                <option value="IPA">IPA</option>
                                <option value="Bahasa Indo">Bahasa Indo</option>
                                <option value="Matematika">Matematika</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No HP</label>
                            <input type="text" name="no_hp" value="{{ $mahasiswa->no_hp }}" class="form-control" id="no_hp"
                            placeholder="08xxxxx" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <input type="alamat" name="alamat" value="{{$mahasiswa->alamat}}" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
