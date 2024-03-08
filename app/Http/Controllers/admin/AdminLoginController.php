<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminLoginController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user();
        // dd($admin);
        if (!empty($admin->role) && $admin->role > 0) {
            return redirect()->route('admin.dashboard');
        } else {
            return view('pages.admin.login');
        }
    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_name' => 'required',
            'user_password' => 'required',
        ]);

        if ($validator->passes()) {
            if (Auth::guard('admin')->attempt(['email' => $request->user_name, 'password' => $request->user_password], $request->get('remember'))) {
                $admin = Auth::guard('admin')->user();
                if ($admin->role == 2) {
                    return redirect()->route('admin.dashboard');
                } elseif ($admin->role == 1) {
                    return redirect()->route('home.user_profile');
                } else {
                    Auth::guard('admin')->logout();

                    return redirect()->route('admin.login')->with('error', 'You are not Authorized to access user control area');
                }
            } else {
                return redirect()->route('admin.login')->with('error', 'Username or Password is incorrect');
            }
        } else {
            return redirect()->route('admin.login')->withErrors($validator)->withInput(request()->only('user_name'));
        }
    }
}
