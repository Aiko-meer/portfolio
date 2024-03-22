<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Aboutinfo;
use App\Models\Award;
use App\Models\Education;
use App\Models\skills_cateory;
use App\Models\Skill;

class homeController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        $aboutme = Aboutinfo::all();
        $achiev= Award::all();
        $education = Education::all();
        $category = skills_cateory::all();
        $skill = Skill::all();
       
        return view('admin.index', [
            'homes' => $homes,
            'achiev' => $achiev,
            'aboutme' => $aboutme,
            'education' =>$education,
            'category' =>$category,
            'skill' =>$skill
        ]);
    }
    public function resume()
    {
        return view('landingpage.resume');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'role' => 'required|string',
            'description' => 'required|string|max:500',
        ]);

        $newHome = home::create($data);

        return redirect(route('home.index'));
    }

}
