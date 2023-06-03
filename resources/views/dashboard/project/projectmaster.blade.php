@extends('dashboard.app')
@section('title', 'project')
@section('content')
<h1 class="h3 mb-2 text-gray-800">MY PROJECT</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            @admin
            <a href="{{ route('project.create') }}" class="btn btn-success">Tambah Data</a>
            @endadmin
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->category }}</td>
                            <td>
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
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
