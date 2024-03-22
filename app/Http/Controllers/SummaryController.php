<?php


namespace App\Http\Controllers;
use App\Models\Summary;
use App\Models\ExperienceModel;
use App\Models\Affiliation;



use Illuminate\Http\Request;


class SummaryController extends Controller
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
        // Validate the incoming request
        $request->validate([
            'content' => 'required|string',
        ]);

        // Create a new Summary instance
        $summary = new Summary();
        $summary->content = $request->input('content');
        $summary->save();

        // Fetch the saved content from the database
        $summaries = Summary::all();

        // Redirect back or anywhere else after saving
    return redirect()->back()->with('success', 'Summary saved successfully!')->with('summaries', $summaries);
    }
}