<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExperienceModel;
use App\Models\Summary;
use App\Models\Affiliation;


class ExperienceController extends Controller
{
    public function index()
    {
        // Fetch all experiences from the database using the ExperienceModel
        
        $summaries = Summary::all();
        $experiences = ExperienceModel::all();
        $affiliations = Affiliation::all();
    
        return view('cms', compact('summaries', 'experiences', 'affiliations'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'company' => 'required|string',
            'role' => 'required|string',
            'date' => 'required|string',
        ]);

        ExperienceModel::create($request->all());

        return redirect()->back()->with('success', 'Experience created successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'company' => 'required|string',
            'role' => 'required|string',
            'date' => 'required|string',
        ]);

        $experience = ExperienceModel::findOrFail($id);
        $experience->update($request->all());

        return redirect()->back()->with('success', 'Experience updated successfully!');
    }

    public function destroy($id)
    {
        $experience = ExperienceModel::findOrFail($id);
        $experience->delete();

        return redirect()->back()->with('success', 'Experience deleted successfully!');
    }

}
