<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/usuario';

    public function login(Request $request)
    {
        $this -> validateLogin($request);
        $user = User::where('name',$request->name)->first();

        if ($user && $user->estado){
            return $this -> sendLockedResponse();
        }

        if($user && $this->attemptLogin($request)){
            $user->numeroIntentos=0;
            $user->save();
            return $this->sendLoginResponse($request);
        }

        if ($user){
            $user->numeroIntentos += 1;
            if ($user -> numeroIntentos >=3){
                $user ->estado=true;
                
            }
            $user->save();
        }
        throw ValidationException::withMessages([
            $this->username()=>[trans('Usuario o Contraseña Incorrectos')],
        ]);
    }



    protected function sendLockedResponse(){
        return redirect()->route('bloqueado');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
