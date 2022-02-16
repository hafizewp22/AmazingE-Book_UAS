<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{

    public function edit_profile(){
        $user = User::find(Auth::user()->id);
        $roles = Role::all();
        $genders = Gender::all();

        return view('auth.profile', compact('user', 'roles', 'genders'));
    }

    public function update_Profile(Request $request, $id){
        $user = User::find($id);

        $request->validate([
            'first_name' => ['required', 'string', 'max:25'],
            'middle_name' => ['string', 'max:25'],
            'last_name' => ['required', 'string', 'max:25'],
            'gender_id' => ['required'],
            'password' => ['required', 'string', 'min:8', Password::min(8)->numbers()],
            'display_picture_link' => ['image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);

        if ($request->hasFile('display_picture_link')){
            $path = 'images/'.$user->display_picture_link;
            if (File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('display_picture_link');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('images/',$filename);
            $user->display_picture_link = $filename;
        }

        $user->first_name = $request->input('first_name');
        $user->middle_name = $request->input('middle_name');
        $user->last_name = $request->input('last_name');
        $user->gender_id = $request->input( 'gender_id');
        $user->email = $request->input( 'email');
        $user->password = Hash::make($request->input( 'password'));

        $user->save();
        return redirect('loading');
    }

    public function account_maintenance(){
        $users = User::all();
        return view('auth.AccountMaintenance', compact('users'));
    }

    public function edit_role($id){
        $user = User::find($id);
        $roles = Role::all();
        return view('auth.role', compact('user', 'roles'));
    }

    public function update_role(Request $request, $id){
        $user = User::find($id);
        $user->role_id = $request->input( 'role_id');
        $user->save();
        return redirect('/account');
    }

    public function delete_user(Request $request, $id){
        User::find($id)->delete();
        return redirect('/account');
    }
}
