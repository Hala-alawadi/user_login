<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function showForm()
    {
        return view('register'); 
    }

    
    public function register(UserRequest $request)
    {
        return back()->with('success', 'تم التسجيل بنجاح!');
    }
}
