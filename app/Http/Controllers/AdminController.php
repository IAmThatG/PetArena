<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //

    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * GET
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard()
    {
        $id = Auth::id();
        //dump($id);
        $admin = Admin::findOrFail($id);
        //dump($admin);
        dump($admin->role());
//        return view('admin.dashboard', ['admin' => $admin]);
    }
}
