<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    
    public function dashboard($username)
    {   
        
        $usernameFormatted = Str::replace(' ', '.', trim(Str::lower($username)));
        return view('dashboard',['username' => $usernameFormatted]);

    }

}
