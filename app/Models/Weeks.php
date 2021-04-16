<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weeks extends Model
{
    use HasFactory;
    // A models purpose is too allow us to get, create, updates, delete data from our date base.

    // public function get_all_weeks() {
    //     // This line below tells our code to go and grab all of the rows in our weeks table.
    //     $allweeks = Weeks::all();
    //     return $allweeks;
    // }
}
