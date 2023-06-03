@extends('dashboard.app')
@section('title', 'Project')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 text-gray-800">Masukan Data Project</h1>
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
            <form action="{{ Route('project.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-4">
                        <label for="name">Name</label>
                        <input name="name" type="text"
                            class="form-control form-control-user @error('name') is-invalid @enderror" id="name"
                            placeholder="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label for="category">Category</label>
                        <input name="category" type="text"
                            class="form-control form-control-user @error('category') is-invalid @enderror" id="category"
                            categoryholder="category" value="{{ old('category') }}">
                        @error('category')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label for="link">Link</label>
                        <input name="link" type="text"
                            class="form-control form-control-user @error('link') is-invalid @enderror" id="link"
                            placeholder="link" value="{{ old('link') }}">
                        @error('link')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 form-group">
                    <label for="filePhoto" class="form-label">Foto
                    </label>
                    <input class="form-control-file @error('foto') is-invalid @enderror" name="foto" type="file"
                        id="filefoto" accept="image/*" >
                    @error('foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="col-md-3">
                        <img id="output" class="mt-3" style="max-height: 200px; max-width: 300px;"
                            src="">
                    </div>
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
