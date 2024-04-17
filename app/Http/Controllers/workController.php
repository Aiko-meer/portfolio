<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\work;
use RealRashid\SweetAlert\Facades\Alert; // Import the SweetAlert facade

class workController extends Controller
{
    //

    public function index()
    {
        $work =  work::all();
        return view('admin.tables.work',
    [
        'work' => $work
    ]);
    }

    public function add(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string',
        'type' => 'required|string',
        'date' => 'required|string',
        'tech' => 'required|string',
        'role' => 'required|string',
        'site' => 'required|string',
        'description' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
    ]);

    // Handle file upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload'), $imageName);
        $validatedData['image'] = $imageName;
    }

    // Create new work instance and save to database
    $work = Work::create($validatedData);

            // In your controller method
            Alert::success('Success', 'Work added successfully!');

            // Store the success message in the session
            $request->session()->flash('success', 'Work added successfully!');

            // Redirect to the index page
            return redirect(route('work.index'));

  
}

    public function update(Request $request, work $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'date' => 'required|string',
            'tech' => 'required|string',
            'role' => 'required|string',
            'site' => 'required|string',
            'description' => 'required|string',
        ]);

        $id->update($data);

         // In your controller method
         Alert::success('Success', 'Work Updated successfully!');

         // Store the success message in the session
         $request->session()->flash('success', 'Work added successfully!');

         // Redirect to the index page
         return redirect(route('work.index'));
    }



}
