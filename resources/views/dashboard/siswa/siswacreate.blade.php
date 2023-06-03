@extends('dashboard.app')
@section('title', 'Siswa')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 text-gray-800">Masukan Data Experience</h1>
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
                    <div class="form-group col-4">
                        <label for="title">Title</label>
                        <input name="title" type="text"
                            class="form-control form-control-user @error('title') is-invalid @enderror" id="title"
                            placeholder="title" value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label for="place">Place</label>
                        <input name="place" type="text"
                            class="form-control form-control-user @error('place') is-invalid @enderror" id="place"
                            placeholder="place" value="{{ old('place') }}">
                        @error('place')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label for="year">Year</label>
                        <input name="year" type="text"
                            class="form-control form-control-user @error('year') is-invalid @enderror" id="year"
                            placeholder="year" value="{{ old('year') }}">
                        @error('year')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
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
