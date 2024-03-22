<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExperienceModel;
use App\Models\Summary;
use App\Models\Affiliation;


class HomeController extends Controller
{
    public function home()
    {
        $summaries = Summary::all();
        $experiences = ExperienceModel::all();
        $affiliations = Affiliation::all();
    
        return view('home', compact('summaries', 'experiences', 'affiliations'));
    }
}
