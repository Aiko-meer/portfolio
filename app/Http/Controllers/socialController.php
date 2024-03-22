<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\social;
class socialController extends Controller
{
    //

    public function index()
    {
       
        $social = social::all();
        return view('admin.tables.social',[
            'social' =>$social,
           
        ]);
    }

   
    public function add(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'icon' => 'required|string',
            'site' => 'required|string',
        ]);

        $addsocial = social::create($data);
        return redirect(route('social.index'));
    }

    public function update(Request $request, social $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'icon' => 'required|string',
            'site' => 'required|string',
        ]);

        $id->update($data);
        return redirect(route('social.index'));
    }


    public function Destroy( social $id)
    {
        $id->delete();
        return redirect(route('social.index'));

    }
}
