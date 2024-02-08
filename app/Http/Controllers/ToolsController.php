<?php

namespace App\Http\Controllers;

use App\Models\Tools;

class ToolsController extends Controller
{
    public function getSkillsPage()
    {
        $developerLogos = Tools::where('category', 'developer')->get();
        $designerLogos = Tools::where('category', 'designer')->get();
        
        return view('home', compact('developerLogos', 'designerLogos'));
    }
}