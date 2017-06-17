<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware("auth", ["except" => ["authenticate", "login"]]);
        $this->middleware("guest", ["only" => ["authenticate"]]);
    }
    
    /**
     * Show the dashboard
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard()
    {
        return view("admin.dashboard");
    }
    
    /**
     * Show the login form
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function authenticate()
    {
        return view("admin.login");
    }
    
    /**
     * Log out the user
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout()
    {
        Auth::logout();
        return redirect("/");
    }
    
    /**
     * Log in the user
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            "name" => "required",
            "password" => "required"
        ]);
        
        if(Auth::attempt(["name" => $request->name, "password" => $request->password])) {
            // Authentication passed
            return redirect("dashboard");
        };
        
        return redirect("login")->withErrors(["De opgegeven username en of het passwoord zijn niet juist."]);
    }
}
