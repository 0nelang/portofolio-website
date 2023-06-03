@extends('dashboard.app')
@section('title', 'biodata')
@section('content')
    <h1 class="h3 mb-2 text-gray-800">BIODATA</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
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
            <form action="{{ Route('biodata.store', ['id' => 1]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-6">
                        <label for="name">Name</label>
                        <input name="name" type="text"
                            class="form-control form-control-user @error('name') is-invalid @enderror" id="name"
                            placeholder="name" value="{{ $user->name }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="title">Title</label>
                        <input name="title" type="text"
                            class="form-control form-control-user @error('title') is-invalid @enderror" id="title"
                            placeholder="title" value="{{ $user->title }}">
                        @error('title')
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
                            id="filefoto" accept="image/*" value="{{ $user->foto }}">
                        @error('foto')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="col-md-3">
                            <img id="output" class="mt-3" style="max-height: 200px; max-width: 300px;"
                                src="{{ asset('storage/' . $user->foto) }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-4">
                            <label for="alamat">Alamat</label>
                            <input name="alamat" type="text"
                                class="form-control form-control-user @error('alamat') is-invalid @enderror" id="alamat"
                                placeholder="alamat" value="{{ $user->alamat }}">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-4">
                            <label for="email">Email</label>
                            <input name="email" type="email"
                                class="form-control form-control-user @error('email') is-invalid @enderror" id="email"
                                placeholder="email" value="{{ $user->email }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-4">
                            <label for="phone">Phone</label>
                            <input name="phone" type="phone"
                                class="form-control form-control-user @error('phone') is-invalid @enderror" id="phone"
                                placeholder="phone" value="{{ $user->phone }}">
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-3">
                            <label for="facebook">Facebook</label>
                            <input name="facebook" type="text"
                                class="form-control form-control-user @error('facebook') is-invalid @enderror"
                                id="facebook" placeholder="facebook" value="{{ $user->facebook }}">
                            @error('facebook')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-3">
                            <label for="instagram">Instagram</label>
                            <input name="instagram" type="instagram"
                                class="form-control form-control-user @error('instagram') is-invalid @enderror"
                                id="instagram" placeholder="instagram" value="{{ $user->instagram }}">
                            @error('instagram')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-3">
                            <label for="github">Github</label>
                            <input name="github" type="github"
                                class="form-control form-control-user @error('github') is-invalid @enderror" id="github"
                                placeholder="github" value="{{ $user->github }}">
                            @error('github')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-3">
                            <label for="linkedin">LinkedIn</label>
                            <input name="linkedin" type="linkedin"
                                class="form-control form-control-user @error('linkedin') is-invalid @enderror"
                                id="linkedin" placeholder="linkedin" value="{{ $user->linkedin }}">
                            @error('linkedin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea class="form-control  @error('about') is-invalid @enderror" id="about" rows="3" name="about">{{ $user->about }}</textarea>
                        @error('about')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="language">language</label>
                        <select class="form-control @error('language') is-invalid @enderror selectlanguage"
                            id="language" name="language[]" multiple="multiple">
                            <option value="">Silahkan Pilih language</option>
                            @foreach ($languages as $language)
                                <option value="{{ $language->language }}" selected>
                                    {{ $language->language }}</option>
                            @endforeach
                        </select>
                        @error('language')
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
