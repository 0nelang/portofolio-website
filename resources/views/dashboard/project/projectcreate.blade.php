@extends('dashboard.app')
@section('title', 'Create Master Project')
@section('content')

    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">create your new project</h6>
        </div>
        <div class="card-body">
            <form class="row g-3" method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_siswa" value="{{ $siswa['id'] }}">
                <div class="col-12 mb-2">
                    <label for="nama_proyect" class="form-label">Nama Project</label>
                    <input type="text" class="form-control @error('nama_project') is-invalid @enderror" id="nama_project"
                        name="nama_project" value="{{ old('nama_project') }}">
                    @error('nama_project')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12 ">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi"
                        name="deskripsi" value="{{ old('deskripsi') }}">
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="tanggal">Tanggal project</label>
                    <input type="date" class="form-control @error('deskripsi') is-invalid @enderror" id="tanggal"
                        name="tanggal" value="{{ old('tanggal') }}">
                    @error('tanggal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12 mt-4">
                    <button class="btn btn-primary " type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>


@endsection
