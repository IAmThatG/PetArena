<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['guest', 'guest:admin'])->except('logout');
    }

    protected function redirectTo()
    {
        $redirectUrl = null;
        $user = AuthenticatesUsers::$authenticatedUser;
        if ($user->role_id == 1)
            $redirectUrl = '/admin/dashboard';
        else
            $redirectUrl = '/home';
        return $redirectUrl;
    }

    /**
     * HTTP-GET
     */
    /*public function showLoginForm()
    {
        return $this;
    }*/

    /**
     * POST
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
   /* public function login(Request $request)
    {
        return AuthenticatesUsers::login($request);
    }*/
}
