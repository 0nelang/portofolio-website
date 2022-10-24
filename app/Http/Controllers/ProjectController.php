<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\siswa;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin')->except("index","show");
    }

    public function index()
    {
        return view("dashboard.project.projectmaster", [
            "data" => siswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view("dashboard.project.projectcreate", [
            "siswa" => siswa::find($id)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama_project" => "required",
            "deskripsi" => "required",
            "tanggal" => "required"
        ]);
        Proyek::create([
            'id_siswa' => $request->id_siswa,
            'nama_proyek' => $request->nama_project,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('project.index')->with('pesan', 'Project baru berhasil ditambahkan ! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Siswa::find($id);
        $projek = $data->proyek;
        return view('dashboard.project.projectshow',compact('projek'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.project.projectedit', [
            "projek" => Proyek::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Proyek::find($id);
        $project->id_siswa = $request->id_siswa;
        $project->nama_proyek = $request->nama_proyek;
        $project->deskripsi = $request->deskripsi;
        $project->tanggal = $request->tanggal;
        $project->save();

        return redirect()->route('project.index')->with('pesan', 'Data Berhasil Diubah ! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Siswa::destroy($id);
        return redirect()->back();
    }
}
