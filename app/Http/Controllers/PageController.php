<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Link;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    
    public function dashboard($username)
    {   
        
        $usernameFormatted = Str::replace(' ', '.', trim(Str::lower($username)));

        if (User::where('name',$username)->exists())
         return view('dashboard',['username' => $usernameFormatted]);

         abort(404);
    }

    public function createLink(Request $request)
    {

        $usuario=Auth::user();

        $request->validate([

            'link' => 'required|url',
            'description' => 'required|min:5'
        ]);

        Link::create([

            'user_id' => $usuario->id,
            'link' => $request->link,
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard',['username' => $usuario->name]);

    }

}
