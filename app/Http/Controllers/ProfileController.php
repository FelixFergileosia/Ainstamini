<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function editProfile()
    {
        return view('editProfile');
    }

    public function editProfileAction(Request $request)
    {
        $rules = [
            'username' => ($request->username == Auth::user()->username) ? 'required' : 'required|unique:users|min:5',
            'email' => ($request->email == Auth::user()->email) ? 'required' : 'required|unique:users|email:rfc,dns',
            'phoneNumber' => 'required|numeric'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $user = User::find(Auth::user()->user_id);

        $user->update([
            'username' => $request->username,
            'email' => $request->email,
            'bio' => $request->bio,
            'phone_number' => $request->phoneNumber,
        ]);


        if($request->userImage != null)
        {
            $image = $request->file('userImage');
            $fileName = Auth::user()->username.'.'.$image->getClientOriginalExtension();


            if(Auth::user()->user_image != null && Auth::user()->user_image != '')
            {
                unlink(public_path('storage/images/').Auth::user()->user_image);
            }
            Storage::putFileAs('public/images/',$image, $fileName);

            $user->update(['user_image' => $fileName]);
        }

        return redirect('/profile')->with(['success' => 'Profile updated']);
    }
}
