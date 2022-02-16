<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use App\Models\Role;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    public function register(Request $request){
        $users = new User();

        $request->validate([
            'first_name' => ['required', 'string', 'max:25'],
            'middle_name' => ['string', 'max:25'],
            'last_name' => ['required', 'string', 'max:25'],
            'gender_id' => ['required'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8', Password::min(8)->numbers()],
            'role_id' => ['required'],
            'display_picture_link' => ['image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);

        if ($request->hasFile('display_picture_link')){
            $file = $request->file('display_picture_link');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('images/',$filename);
            $users->display_picture_link = $filename;
        }

        $users->first_name = $request->input('first_name');
        $users->middle_name = $request->input('middle_name');
        $users->last_name = $request->input('last_name');
        $users->gender_id = $request->input( 'gender_id');
        $users->email = $request->input( 'email');
        $users->password = Hash::make($request->input( 'password'));
        $users->role_id = $request->input( 'role_id');

        $users->save();
        return redirect( '/login');
    }

}
