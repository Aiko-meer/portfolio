<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Aboutinfo;
use App\Models\Award;
use App\Models\Education;
use App\Models\skills_cateory;
use App\Models\Skill;
use App\Models\service;
use App\Models\homeimage;
use App\Models\social;
use App\Models\work;
use App\Models\client;
use App\Models\contact;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $homes = Home::all();
            $aboutme = Aboutinfo::all();
            $achiev= Award::all();
            $education = Education::all();
            $category = skills_cateory::all();
            $skill = Skill::all();
            $service = service::all();
            $social = social::all();
            $image = homeimage::all();
            $work = work::all();
            $client = client::all();
            $contact = contact::all();
            return view('admin.index', [
                'homes' => $homes,
                'achiev' => $achiev,
                'aboutme' => $aboutme,
                'education' =>$education,
                'category' =>$category,
                'skill' =>$skill,
                'image' =>$image,
                'social' =>$social,
                'work' =>$work,
                'client' =>$client,
                'contact' =>$contact,
                'service' =>$service
            ]);
        } else {
            // Redirect the user to the login page or show an error message
            return redirect()->route('login.index')->with('error', 'Please log in to change your password.');
        }
        
    }
    public function resume()
    {
        return view('landingpage.resume');
    }

    public function update(Request $request,Home $id)
    {
        $data = $request->validate([
            'name' => 'string',
            'role' => 'required|string',
            'description' => 'required|string|max:500',
        ]);

        $id->update($data);

        return redirect(route('admin.index'));
    }


    public function upload(Request $request, homeimage $id)
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
    
        return redirect(route('admin.index'));
    }
    


}
