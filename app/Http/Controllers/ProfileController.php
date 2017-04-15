<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    public function edit()
    {
    	$user = \Auth::user();

    	return view('profile.edit', compact('user'));
    }
}
