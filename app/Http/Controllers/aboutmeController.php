<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aboutinfo;

use App\Models\Award;

class aboutmeController extends Controller
{
    //

    public function update_info(Request $request, Aboutinfo $id)
    {
        $data = $request->validate([

            'name' => 'required|string',
            'description' => 'required|string'
        ]);

        $id->update($data);
        return redirect(route('admin.index'))->with('success', 'Award updated successfully.');

    }
    
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

    public function update_image(Request $request, Aboutinfo $id )
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
        ]);
    
        // Extract the image file from the request
        $imageFile = $request->file('image');
    
        // Generate a unique name for the image file
        $imageName = time() . '.' . $imageFile->getClientOriginalExtension();
    
        // Move the image file to the public/upload directory
        $imageFile->move(public_path('upload'), $imageName);
    
        // Get the old image path
        $oldImagePath = $id->image;
    
        // Delete the old image file if it exists
        if ($oldImagePath && file_exists(public_path($oldImagePath))) {
            unlink(public_path($oldImagePath));
        }
    
        // Update the database with the new image path
        $id->update([
            'image' => $imageName,
        ]);
    
        return redirect(route('admin.index'))->with('success', 'Award updated successfully.');
    }

    
}
