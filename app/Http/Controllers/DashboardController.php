<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function index($request ,$guard = null){
        

        
        if (Auth::guard($guard)->check()) {

            if ('admin' == $guard) {
                return redirect('/admin');
            }
            
            return redirect('/employee');
        }
    }
}
