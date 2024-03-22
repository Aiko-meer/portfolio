<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aboutinfo;

use App\Models\Award;

class aboutmeController extends Controller
{
    //
    
    public function update_achiev()
    {
        $awards= Award::all();
        return view('admin.tables.achievements', ['awards' => $awards]);
    }

    
    public function update_award(Request $request, award  $award)
    {
   

    $data = $request->validate([
        'title' => 'required|string',
        'description' => 'required|string',
        // Add validation rules for other fields as needed
    ]);

    $award->update($data);

    return redirect(route('about.achiev'))->with('success', 'Award updated successfully.');
    }

    
}
