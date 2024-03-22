<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skills_cateory;
use App\Models\Skill;

class skillController extends Controller
{
    //
    public function index()
    {
        $category = skills_cateory::all();
        $skill = Skill::all();
        return view('landingpage.tables.skill',[
            'category' =>$category,
            'skill' => $skill,
        ]);
    }

    public function category(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);

        $addcategory = skills_cateory::create($data);
        return redirect(route('skill.index'));


    }

    public function category_delete(skills_cateory $id)
    {
        $id->delete();

        return redirect(route('skill.index'))->with('success', 'Award updated successfully.');
    }

    public function add(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'type' => 'required|string',
            'percent' => 'required|string',
        ]);

        $addskill = Skill::create($data);
        return redirect(route('skill.index'));
    }

    public function update(Request $request, Skill $id)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'type' => 'required|string',
            'percent' => 'required|string',
        ]);

        $id->update($data);
        return redirect(route('skill.index'));
    }


    public function Destroy( Skill $id)
    {
        $id->delete();
        return redirect(route('skill.index'));

    }

}
