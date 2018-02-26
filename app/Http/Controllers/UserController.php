<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function home()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);
        return view('user.index', ['user' => $user]);
    }
}
