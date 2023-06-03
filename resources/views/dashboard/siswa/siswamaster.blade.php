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
                            <th>Title</th>
                            <th>Place</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Place</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->place }}</td>
                            <td>{{ $item->year }}</td>
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
