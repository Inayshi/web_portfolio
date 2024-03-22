<?php

namespace App\Http\Controllers;

use App\Models\Affiliation;
use Illuminate\Http\Request;
use App\Models\ExperienceModel;
use App\Models\Summary;

class AffiliationController extends Controller
{
    public function index()
    {
        $summaries = Summary::all();
        $experiences = ExperienceModel::all();
        $affiliations = Affiliation::all();
    
        return view('cms', compact('summaries', 'experiences', 'affiliations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'organization' => 'required|string',
            'position' => 'required|string',
            'date' => 'required|string',
        ]);

        Affiliation::create($request->all());

        return redirect()->back()->with('success', 'Affiliation created successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'organization' => 'required|string',
            'position' => 'required|string',
            'date' => 'required|string',
        ]);

        $affiliation = Affiliation::findOrFail($id);
        $affiliation->update($request->all());

        return redirect()->back()->with('success', 'Affiliation updated successfully!');
    }

    public function destroy($id)
    {
        $affiliation = Affiliation::findOrFail($id);
        $affiliation->delete();

        return redirect()->back()->with('success', 'Affiliation deleted successfully!');
    }

}
