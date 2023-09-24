<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /**
     * Display login page.
     * 
     * @return Renderable
     */
    public function show()
    {

        return view('auth.login');
    }


    function login(Request $request)
    {
        // dd($request);
        $request->validate([
            'email' => ['email', 'required'],
            'password' => ['required'],
        ]);
        try {
            if (Auth::attempt($request->only(['email', 'password']))) {
                $request->session()->regenerate();
                //   dd("successful");
                return redirect()->route('adminHome')->with('msg', 'User login successfully');
            } else {
                //  dd("failed");
                return redirect()->back()->with('msg', 'User not loged in');
            }
        } catch (\Exception $e) {
            // dd("failed");
            return redirect()->back()->with('msg', 'User not loged in');
        }
    }

    /**
     * Handle response after user authenticated
     * 
     * @param Request $request
     * @param Auth $user
     * 
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended();
    }
}
