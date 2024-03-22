<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expeirence;

class expeirenceController extends Controller
{
    //

    public function index()
    {
        $experience = Expeirence::all();
        return view('admin.tables.expeirence',
        [
            'experience' => $experience,
        
        ]
        );
    }

    public function update(Request $request, Expeirence $id)
    {
        $data = $request->validate([
             'title' => 'required|string',
             'role' => 'required|string',
             'year' => 'required|string',
        ]);

        $id->update($data);

        return redirect(route('expeirence.index'));
    }

    public function add(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
             'role' => 'required|string',
             'year' => 'required|string',
        ]);

        $newexpeirence = Expeirence::create($data);
        return redirect(route('expeirence.index'));
    }

    public function destroy(Expeirence $id)
    {
        $id->delete();

        return redirect(route('expeirence.index'));
    }
}
