<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Link;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    
    protected $usuario;

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {

         $this->usuario = Auth::user();
         return $next($request);

      });

    }
    
    public function dashboard($username)
    {   

        $usernameFormatted = Str::replace(' ', '.', trim(Str::lower($username)));
        $userLinks = User::where('name', $usernameFormatted)->with('links')->get();
      
        if ($this->usuario && $this->usuario->name === $usernameFormatted)
            $owner=true;
        else 
            $owner=false;

        if (User::where('name',$username)->exists())
         return view('dashboard',['userLinks' => $userLinks, 'owner' => $owner]);

         abort(404);
    }

    public function createLink(Request $request)
    {

        $request->validate([
            'link' => 'required|url',
            'description' => 'required|min:5'
        ]);

        Link::create([

            'user_id' => $this->usuario->id,
            'link' => $request->link,
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard',['username' => $this->usuario->name]);

    }

}
