<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Profile;

class LeaderboardController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
    	
    	$data['profiles'] =  Profile::orderBy('points', 'DESC')->with('user')->paginate(10);
       
       
        if($request->has('page'))
        {
        	$data['pno'] = $request->get('page');
        } else {
        	$data['pno'] = 1; 
        } 
         $data['perpage'] = 10;
         
    	return view('leaderboard', $data);
    } 
   

}
