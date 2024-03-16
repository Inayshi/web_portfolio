<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        return view('experiences.index', compact('experiences'));
    }

    public function store(Request $request)
    {
        $experience = new Experience();
        $experience->company = $request->input('company');
        $experience->position = $request->input('position');
        $experience->date = $request->input('date');
        $experience->save();

        return redirect('/experiences');
    }

    public function update(Request $request, $id)
    {
        $experience = Experience::findOrFail($id);
        $experience->company = $request->input('company');
        $experience->position = $request->input('position');
        $experience->date = $request->input('date');
        $experience->save();

        return redirect('/experiences');
    }

    public function destroy($id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();
        
        return redirect('/experiences');
    }
}
