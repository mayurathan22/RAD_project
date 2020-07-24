@extends('adminsidebar')

    @section('content')
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
    <div class="navbar-wrapper">
    <a class="navbar-brand" href="#pablo">Employee Details</a>
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
                    
                    <table class="table table-dark">
                        <th>ID</th>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Action</th>
                        @foreach($employees as $employee)
                        <tr>
                            <td>{{$employee->id}}</td>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->email}}</td>
                            
                            
                           
                            <td>
                                <a href="/deleteEmployee/{{$employee->id}}" class="btn btn-warning">Delete</a>
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
     
