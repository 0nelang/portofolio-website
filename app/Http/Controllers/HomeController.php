<?php

namespace App\Http\Controllers;

use App\Models\Experiance;
use App\Models\User;
use App\Models\Language;
use App\Models\Proyek;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function landing()
    {
        return view('home2',[
            'user' => User::find(1),
            'languages' => Language::all(),
            'experiances' => Experiance::all(),
            'projects' => Proyek::all()
        ]);
    }
    public function projects()
    {
        return view('project');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
}
