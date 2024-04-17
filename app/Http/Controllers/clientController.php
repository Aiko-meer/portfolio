<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert; // Import the SweetAlert facade
use App\Models\client;


class clientController extends Controller
{
    //
    public function index()
    {
        $client =  client::all();
        return view('admin.tables.testimonial',[

            'client' => $client
        ]);
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',   
            'date'=> 'required|string',
            'role'=> 'required|string',
            'description'=> 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
        ]);

        // Handle file upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload'), $imageName);
        $data['image'] = $imageName;
    }

    // Create new work instance and save to database
    $client = client::create($data);

            // In your controller method
            Alert::success('Success', 'Testimonial successfully Added!');

            // Store the success message in the session
            $request->session()->flash('success', 'Testimonial successfully Added!');

            // Redirect to the index page
            return redirect(route('client.index'));
    }

    public function update(Request $request, client $id)
    {
        $data = $request->validate([
            'name' => 'required|string',   
            'date'=> 'required|string',
            'role'=> 'required|string',
            'description'=> 'required|string',
            
        ]);

        $id->update($data);

         // In your controller method
         Alert::success('Success', 'Testimonial successfully Updated!');

         // Store the success message in the session
         $request->session()->flash('success', 'Testimonial successfully Updated!');

         // Redirect to the index page
         return redirect(route('client.index'));
    }
}
