<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    public function __construct(){
        $this->middleware('guest:admin');
    }

    protected function guard(){
        return Auth::guard('admin');
    }

    protected function broker(){
        return Password::broker('admins');
    }

    public function showResetForm(Request $request, $token = null){
        return view ('auth-admin.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
