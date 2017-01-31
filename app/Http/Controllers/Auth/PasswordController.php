<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\User;
use Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Hash;
use Auth;
use Illuminate\Support\Facades\Input;


class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function showUserPasswordChange()
    {
        return view('auth.passwords.createpassword');
    }

    /**
     * Updates the password for the current user.
     *
     * @param  void
     * @return void
     */
    public function createNewPassword()
    {
        //Get the user object from database
        $user = Auth::user();
        $rules = array(
            'password' => 'required|confirmed|min:6',
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return view('auth.passwords.change')->withErrors($validator);
        } else {
            $user->password = bcrypt(Input::get('password'));
            $user->save();
            return view('auth.passwords.change')->with('Password has been changed');
        }
    }
}
