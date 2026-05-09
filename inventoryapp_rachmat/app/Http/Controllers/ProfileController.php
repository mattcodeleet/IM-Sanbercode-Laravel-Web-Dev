<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profil;

class ProfileController extends Controller
{
    public function getProfile()
    {
        $currentUser = Auth::user();

        $user = User::find($currentUser->id);
        if($user->profil){
            $profil=Profil::where('user_id', $user->id)->first();
            return view('profil.update', ['profil' => $profil]);            
        }
        else{        
            return view('profil.add');
        }        
    }

    public function store(Request $request)
    {
        $request->validate([
        'age' => 'required',
        'bio' => 'required|min:10',
        ]);       

        $currentUser = Auth::user();
        $profile = new Profil;
 
        $profile->user_id = $currentUser->id;
        $profile->age = $request->input('age');
        $profile->bio = $request->input('bio');
 
        $profile->save();
 
        return redirect('/profile')->with('success', 'User berhasil dibuat!!');

    }

    public function update(Request $request)
    {
        $request->validate([
        'age' => 'required',
        'bio' => 'required|min:10',
        ]);        

        $currentUser = Auth::user();
        $profile=Profil::where('user_id', $currentUser->id)->first();

        $profile->user_id = $currentUser->id;
        $profile->age = $request->input('age');
        $profile->bio = $request->input('bio');
 
        $profile->save();
 
        return redirect('/profile')->with('success', 'Berhasil diUpdate!!');

    }
}
