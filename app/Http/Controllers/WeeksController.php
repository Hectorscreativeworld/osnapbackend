<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Weeks;

class WeeksController extends Controller
{
    public function get_weeks_for_user() {
        $weeks_for_users = Weeks::all();
        return $weeks_for_users;
    }
}
