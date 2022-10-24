@extends('dashboard.app')
@section('title', 'Siswa')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 text-gray-800">Masukan Data Siswa</h1>
        </div>
        <div class="card-body">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ Route('siswa.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-6">
                        <label for="nama">Nama</label>
                        <input name="nama" type="text" class="form-control form-control-user @error('nama') is-invalid @enderror" id="nama" placeholder="nama"
                            value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="nisn">NISN</label>
                        <input name="nisn" type="number" class="form-control form-control-user @error('nisn') is-invalid @enderror" id="nisn" placeholder="nisn"
                            value="{{ old('nisn') }}">
                        @error('nisn')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label for="filePhoto" class="form-label">Foto
                        </label>
                        <input class="form-control-file @error('foto') is-invalid @enderror" name="foto" type="file"
                            id="filefoto" accept="image/*" value="{{ old('foto') }}">
                        @error('foto')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="col-md-3">
                            <img id="output" class="mt-3" style="max-height: 200px; max-width: 300px;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="alamat">Alamat</label>
                            <input name="alamat" type="text" class="form-control form-control-user @error('alamat') is-invalid @enderror" id="alamat" placeholder="alamat"
                                value="{{ old('alamat') }}">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" placeholder="email"
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="">Silahkan Pilih Jenis Kelamin</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea class="form-control  @error('about') is-invalid @enderror" id="about" rows="3" name="about">{{ old('about') }}</textarea>
                        @error('about')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script>
        $(function() {
            $("#filefoto").change(function(event) {
                var x = URL.createObjectURL(event.target.files[0]);
                $("#output").attr("src", x);
                console.log(event);
            });
        });
    </script>
@endsection
