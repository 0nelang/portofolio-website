@extends('dashboard.app')
@section('title', 'siswa')
@section('content')
<h1 class="h3 mb-2 text-gray-800">MASTER SISWA</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            @admin
            <a href="{{ route('siswa.create') }}" class="btn btn-success">Tambah Data</a>
            @endadmin
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>NISN</th>
                            <th>Foto</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>NISN</th>
                            <th>Foto</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nisn }}</td>
                            <td><img onclick="image()" src="{{ asset('storage/' . $item->foto) }}"
                                style="height: 200px; width:200px; object-fit:cover"></td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="{{ route('siswa.show', ['siswa' => $item->id]) }}" class="btn btn-primary btn-circle btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                @admin
                                <a href="{{ route('siswa.edit', ['siswa' => $item->id]) }}" class="btn btn-warning btn-circle btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form id="form-delete{{ $item->id }}"
                                    action="{{ route('siswa.destroy', ['siswa' => $item->id]) }}"
                                    method="post" style="display: none">
                                    @method('delete')
                                    @csrf
                                </form>
                                <a href="#" onclick="what({{ $item->id }})" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-skull-crossbones"></i>
                                </a>
                                @endadmin
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
