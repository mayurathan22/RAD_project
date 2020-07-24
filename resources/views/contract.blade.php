@extends('adminsidebar')

    @section('content')
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
    <div class="navbar-wrapper">
    <a class="navbar-brand" href="#pablo">Contract details</a>
    </div>      
    </div>
    </nav>  
    <div class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="container">
        <div class="text-center">
           
            <div class="row">
                <div class="col-md-12">
                

                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach
                    <form method="post" action="/saveContract">
                    {{csrf_field()}}
                    <div class="col-lg-8">
                    <input type="text" class="form-control" name="customer_id" placeholder="Enter customer's ID">
                    <input type="text" class="form-control" name="customer_name" placeholder="Enter customer's name">
                    <input type="text" class="form-control" name="address" placeholder="Enter customer's adress">
                    <input type="text" class="form-control" name="phone" placeholder="Enter customer's phone number">
                    <input type="integer" class="form-control" name="income" placeholder="Enter contract's income">
                    <input type="integer" class="form-control" name="outcome" placeholder="Enter contract's outcome">

                    <br>
                    
                    
                    <input type="submit" class="btn btn-primary" value="Save">
                    </div>
                    </form>
                    <table class="table table-dark">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Income</th>
                        <th>Outcome</th>
                        @foreach($contracts as $contract)
                        <tr>
                            <td>{{$contract->customer_id}}</td>
                            <td>{{$contract->customer_name}}</td>
                            <td>{{$contract->address}}</td>
                            <td>{{$contract->phone}}</td>
                            <td>{{$contract->income}}</td>
                            <td>{{$contract->outcome}}</td>
                            </td>
                            
                           
                            <td>
                                <a href="/deleteContract/{{$contract->id}}" class="btn btn-warning">Delete</a>
                                <a href="/updateContract/{{$contract->id}}" class="btn btn-success">Update</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>         
    </div>
    </div>
@endsection
     
