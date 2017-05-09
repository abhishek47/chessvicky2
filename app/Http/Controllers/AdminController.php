<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Payment;

class AdminController extends Controller
{
    public function dashboard()
    {
    	$page = 'dashboard';

    	$users = User::count();

    	$revenue = Payment::sum('amount');

    	return view('admin.dashboard', compact('page', 'users', 'revenue'));
    }


    public function users()
    {
    	$page = 'users';

    	$users = User::all();


    	return view('admin.users.index', compact('page', 'users'));
    }

     public function deleteUser($id)
    {
      
        $user = User::find($id);
        
        $user->delete();

        return redirect('/admin/users');
    }
}
