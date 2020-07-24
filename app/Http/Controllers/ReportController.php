<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Blog;
use App\About;
use DB;
use PDF;

class ReportController extends Controller
{
    public function index(){
        $customer=$this->get_customer_data();
        $employee=$this->get_employee_data();
        $product=$this->get_product_data();
        $contract=$this->get_contract_data();
        return view('report')->with('data',['customer'=>$customer,'employee'=>$employee,'product'=>$product,'contract'=>$contract]);
    }

    function get_customer_data(){
        $customer_data=DB::table('users')->get();
        return $customer_data;
    }
    function get_employee_data(){
        $employee_data=DB::table('employees')->get();
        return $employee_data;
    }
    function get_product_data(){
        $product_data=DB::table('products')->get();
        return $product_data;
    }
    function get_contract_data(){
        $contract_data=DB::table('contracts')->get();
        return $contract_data;
    }

    function pdf_Customer(){
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($this->
                convert_customer_data()            
            );
                return $pdf->stream();
    }
    function pdf_Employee(){
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($this->
                convert_employee_data()            
            );
                return $pdf->stream();
    }

    function pdf_Product(){
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($this->
                convert_product_data()            
            );
                return $pdf->stream();
    }
    function pdf_Contract(){
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($this->
                convert_contract_data()            
            );
                return $pdf->stream();
    }

    function  convert_customer_data(){
        $customer=$this->get_customer_data();
        
        $output = '
     <h3 align="center">Customer Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
      <th style="border: 1px solid; padding:12px;" width="20%">ID</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Name</th>
    <th style="border: 1px solid; padding:12px;" width="30%">E-mail</th>
   </tr>
     ';  
     foreach($customer as $customer)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$customer->id.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->email.'</td>
       
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    
    }

    function  convert_employee_data(){       
        $employee=$this->get_employee_data();
        $output = '
     <h3 align="center">Customer Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
      <th style="border: 1px solid; padding:12px;" width="20%">ID</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Name</th>
    <th style="border: 1px solid; padding:12px;" width="30%">E-mail</th>
   </tr>
     ';  
     foreach($employee as $employee)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$employee->id.'</td>
       <td style="border: 1px solid; padding:12px;">'.$employee->name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$employee->email.'</td>
       
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    
    }

    function  convert_product_data(){
       
        $product=$this->get_product_data();
        
        $output = '
     <h3 align="center">Customer Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
      <th style="border: 1px solid; padding:12px;" width="20%">ID</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Name</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Description</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Price</th>
   </tr>
     ';  
     foreach($product as $product)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$product->id.'</td>
       <td style="border: 1px solid; padding:12px;">'.$product->name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$product->description.'</td>
       <td style="border: 1px solid; padding:12px;">'.$product->price.'</td>

      </tr>
      ';
     }
     $output .= '</table>';
     
     return $output;
    }


    function  convert_contract_data(){
       
        $contract=$this->get_contract_data();
        
        $output = '
     <h3 align="center">Customer Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
      <th style="border: 1px solid; padding:12px;" width="20%">ID</th>
      <th style="border: 1px solid; padding:12px;" width="20%">Customer ID</th>
      <th style="border: 1px solid; padding:12px;" width="20%">Customer Name</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Address</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Phone</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Income</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Outcome</th>

   </tr>
     ';  
     foreach($contract as $contract)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$contract->id.'</td>
       <td style="border: 1px solid; padding:12px;">'.$contract->customer_id.'</td>
       <td style="border: 1px solid; padding:12px;">'.$contract->customer_name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$contract->address.'</td>
       <td style="border: 1px solid; padding:12px;">'.$contract->phone.'</td>
       <td style="border: 1px solid; padding:12px;">'.$contract->income.'</td>
       <td style="border: 1px solid; padding:12px;">'.$contract->outcome.'</td>


      </tr>
      ';
     }
     $output .= '</table>';
     
     return $output;
    }
    

    
}

