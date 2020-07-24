<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;
use DB;
class ContractController extends Controller
{


    public function store(Request $request){
   
        $contract = new Contract;
        
        $this->validate($request,[
            'customer_id'=>'required',
            'customer_name'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'income'=>'required',
            'outcome'=>'required',
        ]);

        $contract->customer_id=$request->customer_id;
        $contract->customer_name=$request->customer_name;
        $contract->address=$request->address;
        $contract->phone=$request->phone;
        $contract->income=$request->income;
        $contract->outcome=$request->outcome;
        
      
        $contract->save();
      
        $contracts=Contract::all();
       
       return view('contract')->with('contracts',$contracts);
    }

    public function deleteContract($id){
        $contract=Contract::find($id);
        if(!$contract){
            abort(404);
        }
        $contract->delete();
        $contracts=Contract::all();
       
       return view('contract')->with('contracts',$contracts);
    }
    public function updateContract($id){

       $contracts=Contract::find($id);
       if(!$contracts){
        abort(404);
        }
        
       return view('updateContract')->with('contracts' ,$contracts);


    }

    public function editContract(Request $request){

        $id=$request->id;
        $custoer_id=$request->customer_id;
        $customer_name=$request->customer_name;
        $address=$request->address;
        $phone=$request->phone;
        $income=$request->income;
        $outcome=$request->outcome;

        $data=Contract::find($id);

        $data->customer_id=$custoer_id;
        $data->customer_name=$customer_name;
        $data->address=$address;
        $data->phone=$phone;
        $data->income=$income;
        $data->outcome=$outcome;

        $data->save();
        
        $contracts=Contract::all();

        return view('contract')->with('contracts',$contracts);

    }

    public function loadChart()
    {
        $customer_data=DB::table('contractors')->get();

        $data = array(
            'cities' => array('Boston', 'Worcester', 'Springfield', 'Lowell', 'Cambridge', 'New Bedford'),
            'income' => array($customer_data->income),
        );
        return response()->json($data);
    }

}


