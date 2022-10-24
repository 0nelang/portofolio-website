<ol class="list-group list-group-numbered">

    @foreach($projek as $item)
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold" style="font-weight:bold;text-align:left;">{{ $item->nama_proyek }}</div>
        <span style="text-align: right;">Deskripsi : </span> <span style="text-align: right;"> {{ $item->deskripsi }} </span>
        @admin
        <div style="text-align: left">
            <a class="btn btn-warning mt-2" type="button" href="{{ route('project.edit',['project' => $item->id] )}} "><i class="fas fa-edit"></i> Edit your project</a>
            <form id="form-delete{{ $item->id }}"
                action="{{ route('project.destroy', ['project' => $item->id]) }}"
                method="post" style="display: none">
                @method('delete')
                @csrf
            </form>
            <a onclick="what({{ $item->id }})" class="btn btn-danger mt-2">
                <i class="fas fa-trash-alt"></i></a>
            </a>
        </div>
        @endadmin

      </div>
      <span class="badge bg-primary rounded-pill" style="color: white;">{{ $item->tanggal }}</span>
    </li>
    @endforeach

</ol>
