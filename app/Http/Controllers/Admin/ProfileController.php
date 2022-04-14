<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profil()
    {
        return view('profile.index', [
            'user' => auth()->user(),
            'roles' => Role::get()->pluck('name', 'name')
        ]);
    }

    public function profilinformation(Request $request)
    {
        $user = User::findOrFail(auth()->id());
        
        $request->validate([
            'name' => 'required|min:5',
            'last_name' => ['required', 'string', 'max:255'],
            'email'    => "required|email|unique:users,email,$user->id",
            'phone_number' => ['required', 'string', 'size:9'],
            'avatar' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $user->update($request->all());
        
        Alert::toast(trans('User has been successfully updated.'), 'success');
        return back();
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return void
     */
    public function postupdatepassword(Request $request) 
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'password' => 'nullable|confirmed',
        ]);
        
        User::find(auth()->user()->id)->update(['password'=> $request->password]);

        Alert::toast(trans('Password has been successfully updated.'), 'success');
        return back();
    }
}