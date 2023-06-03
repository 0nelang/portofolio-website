<?php

namespace App\Http\Controllers;

use App\Models\Experiance;
use App\Models\User;
use App\Models\siswa;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
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
        return view("dashboard.siswa.siswamaster", [
            "user" => User::find(1),
            "data"=> Experiance::all(),
        ]);
    }

    /**
     * Show the form for creating a new $validate = $request->validate([
     * 'nama' => 'required',])
     * 'nama' => 'required',])
     * 'nama' => 'required',])
     * 'nama' => 'required',])
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.siswa.siswacreate",[
            "user" => User::find(1)
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
        // dd($request);
        $message = [
            'required' => ':attribute harus diisi dulu bro!!',
        ];

        $validated = $request->validate([
            'title'=>'required',
            'place'=>'required',
            'year'=>'required',
            'about'=>'required'
        ],$message);
        Experiance::create($validated);

        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.siswa.siswashow', [
            'siswa' => Siswa::find($id),
            'kontak' => Siswa::find($id)->kontak,
            'project' => Siswa::find($id)->proyek,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.siswa.siswaedit', [
            'siswa' => Siswa::find($id)
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
        // dd($request);
        $siswa = Siswa::find($id);
        $message = [
            'required' => ':attribute harus diisi dulu bro!!',
            'email' => ':attribute harus email yang bener bro!!, contoh = email@email.email',
            'nama.min' => ':attribute minimal 5 bang',
            'nisn.min' => ':attribute minimal isi 6 lah',
            'nisn.max' => ':attribute maximal 12,ojk akeh akeh',
            'unique' => ':attribute harus unik bang',
            'digits_between' => ':attribute minimal panjang 6,maximal panjang 12',
        ];
        if ($request->email == $siswa->email) {
            $validated = $request->validate([
                "nama" => "required|min:5",
                "about" => "required",
                "email" => "required|email",
                "jenis_kelamin" => "required",
                "alamat" => "required",
                "nisn" => "required|numeric|digits_between:6,12",
            ],$message);
        } else {
            $validated = $request->validate([
                "nama" => "required|min:5",
                "about" => "required",
                "email" => "required|email|unique:siswa",
                "jenis_kelamin" => "required",
                "alamat" => "required",
                "nisn" => "required|numeric|digits_between:6,12",
            ],$message);
        }
        // dd($request);
        if ($request->file('foto')) {
            $validated['foto'] = $request->file('foto')->store('gambar_siswa', ['disk' => 'public']);
            Storage::disk('public')->delete($siswa->foto);
        }
        $siswa->update($validated);

        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homeImg = Siswa::find($id);
        Storage::disk('public')->delete($homeImg->foto);
        Siswa::destroy($homeImg->id);
        return redirect()->back();
    }

    public function biodata()
    {
        return view('dashboard.biodata',[
            "user" => User::find(1),
            "languages" => Language::all()
        ]);
    }

    public function biodata_create(Request $request, $id)
    {
        $user = User::find($id);
        $message = [
            'required' => ':attribute harus diisi dulu bro!!',
            'email' => ':attribute harus email yang bener bro!!, contoh = email@email.email',
            'name.min' => ':attribute minimal 5 bang',
            'nisn.min' => ':attribute minimal isi 6 lah',
            'nisn.max' => ':attribute maximal 12,ojk akeh akeh',
            'unique' => ':attribute harus unik bang',
            'digits_between' => ':attribute minimal panjang 6,maximal panjang 12',
        ];
        if ($request->email == $user->email) {
            $validated = $request->validate([
                "name" => "required",
                "title" => "required",
                "alamat" => "required",
                "phone" => "required",
                "facebook" => "min:0",
                "instagram" => "min:0",
                "github" => "min:0",
                "linkedin" => "min:0",
                "about" => "min:0",
                "email" => "required|email",
            ],$message);
        } else {
            $validated = $request->validate([
                "name" => "required",
                "title" => "required",
                "alamat" => "required",
                "phone" => "required",
                "facebook" => "min:0",
                "instagram" => "min:0",
                "github" => "min:0",
                "linkedin" => "min:0",
                "about" => "min:0",
                "email" => "required|email|unique:users",
            ],$message);
        }
        // dd($request);
        Language::truncate();
        if ($request->language) {
            foreach ($request->language as $value) {
                Language::create(['language'=>$value]);
            }
        }
        if ($request->file('foto')) {
            $validated['foto'] = $request->file('foto')->store('gambar_user', ['disk' => 'public']);
            Storage::disk('public')->delete($user->foto);
        }
        $user->update($validated);

        return redirect()->route('biodata');
    }
}
