<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skills_cateory;

class categoryController extends Controller
{
    //

    public function index()
    {
        $category =skills_cateory::all();
        return view('admin.tables.category', [

            'category' => $category
        ]);
    }

    public function add(Request $request)
    {
        $data = $request->validate([

            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $addcategory = skills_cateory::create($data);

        return redirect(route('category.index'));
    }

    public function update(Request $request, skills_cateory $id)
    {
        $data = $request->validate([

            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $id->update($data);

        return redirect(route('category.index'));
    }
}
