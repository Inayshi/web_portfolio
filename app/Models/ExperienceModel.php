<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceModel extends Model
{
    use HasFactory;
    protected $table = 'experiences';

    protected $fillable = ['company', 'role', 'date'];

}
