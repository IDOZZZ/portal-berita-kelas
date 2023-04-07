<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function editPassword()
    {
        $title = "test";

        return view('admin.siswa.profile.change-password');
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request,[
            'current_password'          => 'required|string',
            'password'                  => 'required|min:6|string',
            'confirmation_password'     => 'required|min:6|string'

        ]);

        $currentPasswordStatus = Hash::check($request->current_password, auth()->user()->password);
        if ( $currentPasswordStatus) {
            User::findOrFail(Auth::user()->id)->update([
                'password'=> Hash::make($request->password)
            ]);

        } else {
            return redirect()->back()->with([Alert::error('Error','password salah')]);
        }


    }

}

     