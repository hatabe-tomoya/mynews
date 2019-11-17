<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\Profile;

class ProfileController extends Controller
{
    //課題18-1
    public function index(Request $request) {
        $profiles = Profile::all()->sortByDesc('updated_at');
        return view('profile.index', ['profiles' => $profiles]);
    }
}
