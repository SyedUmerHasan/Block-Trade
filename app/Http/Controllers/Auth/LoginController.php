<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {   
        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            // dd(Auth::user()->role);
            switch(auth()->user()->role){
                case 'admin':
                    return redirect()->route('dashboard')->with('success','LoggedIn successfully.');
                    break;
                case 'buyer':
                    return redirect()->route('dashboard')->with('success','LoggedIn successfully.');
                    break;
                case 'seller':
                    return redirect()->route('dashboard')->with('success','LoggedIn successfully.');
                    break;
            }
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login')->with('loginerror','Email-Address And Password Are Wrong.');
        }
          
    }
}
