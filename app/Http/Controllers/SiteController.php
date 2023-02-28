<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class SiteController extends Controller
{
    public function show_home() {
        return redirect('/dashboard');
    }

    public function show_dashboard(Request $request) {
        $user = $request->user();
        return view('dashboard', compact('user'));
    }    

    public function show_profile(Request $request) {
        $user = $request->user();
        return view('profile', compact('user'));
    }        

    public function change_password(Request $request) {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        Alert::success('Success', 'Password has been changed.');
        return back();
    }   
    
    public function show_users(Request $request) {
        $user = $request->user();
        $users = User::all();
        return view('users', compact('users'));
    }   
    
    public function create_user(Request $request) {
        $user = $request->user();
        
        $new_user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('PabloEscobar')
        ]);
        $new_user->position = $request->position;
        $new_user->user_type = 'staff';
        $new_user->save();       

        return back();
    }  
}
