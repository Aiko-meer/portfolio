<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use RealRashid\SweetAlert\Facades\Alert; // Import the SweetAlert facade

class ContactController extends Controller
{
    public function update(Request $request, contact $id)
    {
        $data = $request->validate([
            'site' => 'required|string',
        ]);

        $id->update($data);

         // In your controller method
         Alert::success('Success', 'Contact Updated successfully!');

         // Store the success message in the session
         $request->session()->flash('success', 'Contact Updated successfully!');

        return redirect(route('admin.index'));
    }
}

