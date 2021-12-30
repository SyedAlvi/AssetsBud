<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EmployeeUserController;

class EmployeeUserController extends Controller
{
    public function employeelogin()
    {
       return view('website.employee_login');
    }
public function employeeLoginView(Request $request)
{
 
    $employeeInfo=$request->except('_token');
   //dd($employeeInfo);
            if(Auth::attempt($employeeInfo)){
                return redirect()->route('website')->with('message','Login successful.');
            }
            return redirect()->back()->with('error','Invalid user credentials');
}

    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('employee.login')->with('message','Logging out.');
    }
    
    public function employee_profile($user)
    {
        $users= User::find($user);
        return view('website.employee_profile',compact('user'));

    }
}