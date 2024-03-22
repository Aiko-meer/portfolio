<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class qualificationController extends Controller
{
    //
    public function index()
    {
        $education = Education::all();
        return view('landingpage.tables.education',
            ['education' => $education,]
        );
    }

    public function update(Request $request, Education $education)
    {
        $data = $request->validate([
            'grade' => 'required|string',
            'school'=> 'required|string',
            'year' => 'required|string',
        ]);

        $education->update($data);

        return redirect(route('qualification.index'));
    }

    public function add(Request $request)
    {
        $data = $request->validate([
            'grade' => 'required|string',
            'school'=> 'required|string',
            'year' => 'required|string',
        ]);

        $addedu = Education::create($data);

        return redirect(route('qualification.index'));
    }

    public function destroy(Education $id)
    {
        $id->delete();

        return redirect(route('qualification.index'))->with('success', 'Award updated successfully.');
    }
}
