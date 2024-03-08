<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
// use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard');
    }

    public function users()
    {
        return view('pages.admin.users');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }
    /*
        public function store(Request $request)
        {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            // $file->storeAs('public/images', $fileName);

            $stuData = [
                'first_name' => $request->pro_name,
                'last_name' => $request->pro_price,
                'email' => $request->email,
                'avatar' => $fileName,
                'description'=> $request->description,
            ];
            Student::create($stuData);

            return $stuData;

            return response()->json([
                'status' => 200,
            ]);
        }
    */
}
