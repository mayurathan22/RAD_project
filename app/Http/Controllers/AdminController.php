<?php

namespace App\Http\Controllers;

use Closure;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Employee;
use App\User;

class AdminController extends Controller
{
    public function employee(){
        $employees=Employee::all();
        return view('employeeList')->with('employees',$employees);
    }

    public function deleteEmployee($id){
        $employee=Employee::find($id);
        if(!$employee){
            abort(404);
        }
        $employee->delete();
        
        $employees=Employee::all();
        return view('employeeList')->with('employees',$employees);
    }

    public function customer(){
        $users=User::all();
        return view('customerList')->with('customers',$users);
    }

    public function deleteCustomer($id){
        $customer=User::find($id);
        if(!$customer){
            abort(404);
        }
        $customer->delete();
        
        $users=User::all();
        return view('customerList')->with('customers',$users);
    }

    public function dashboard(){
   
        
        return view('/admin');

    }
}

