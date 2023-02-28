<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use DB;

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
    // protected function authenticated(Request $request, $user)
    // {
    // if ($user->role === 'patient') {
    //         return redirect('welcomecopy');
    //     } elseif ($user->role === 'doctor') {
    //         return redirect('welcomecopy');
    //     } else {
    //     return redirect('/home');
    //     }
    // }

    use AuthenticatesUsers;


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
    
     * Create a new controller instance.
     *
     * @return void
     */
    public function authenticated(Request $request, $user)
{
    $role = DB::table('user_role')->where('email', $user->email)->value('role');

    if ($role == 'patient') {
        return redirect()->route('home');
    } 
    else if ($role == 'doctor') {
        return redirect()->route('doctor');
      
    }
    else if ($role == 'nurse') {
        return redirect()->route('nurse');
      
    }

    // Si el usuario no tiene un rol asignado, redirigirlo a la página de inicio
    return redirect()->route('welcomecopy');
}
    

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
