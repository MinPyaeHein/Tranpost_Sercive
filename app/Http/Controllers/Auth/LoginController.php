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

        $request->validate([
            'email' => ['email', 'required'],
            'password' => ['required'],
        ]);
        try {
            if (Auth::attempt($request->only(['email', 'password']))) {
                $request->session()->regenerate();
                //  dd("Success Login", auth()->user()->type);
                if (auth()->user()->type === 'driver') {
                    return redirect()->route('customerOrder.index');
                } else if (auth()->user()->type === 'customer') {
                    return redirect()->route('customerHome.index');
                } else if (auth()->user()->type === 'admin') {
                    return  view('admin.home');
                }
            } else {
                return redirect()->route('login.show');
            }
        } catch (\Exception $e) {
            return redirect()->route('login.show');
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
