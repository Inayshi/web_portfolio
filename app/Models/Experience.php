<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    public function index()
    {
        $experiences = Experience::all();
        return view('experiences.index', compact('experiences'));
    }

    public function store(Request $request)
    {
        Experience::create($request->all());
        return redirect('/experiences');
    }

    public function update(Request $request, $id)
    {
        Experience::findOrFail($id)->update($request->all());
        return redirect('/experiences');
    }

    public function destroy($id)
    {
        Experience::findOrFail($id)->delete();
        return redirect('/experiences');
    }

}
