@extends('adminsidebar')

    @section('content')
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
    <div class="navbar-wrapper">
    <a class="navbar-brand" href="#pablo">Category Details</a>
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
                    <form method="post" action="/saveCategory">
                    {{csrf_field()}}
                    <div class="col-lg-8">
                    <input type="text" class="form-control" name="name" placeholder="Enter category's's name">
                    <input type="text" class="form-control" name="photo" placeholder="Enter category's photo">
                    </div>
                    
                    <br>
                    <input type="submit" class="btn btn-primary" value="Save">
                    
                    </form>
                    <table class="table table-dark">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Action</th>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>  
                            <td><img src=" {{$category->photo}}" width="100" height="100"></td>                          
                           <td>
                                <a href="/deleteCategory/{{$category->id}}" class="btn btn-warning">Delete</a>
                                <a href="/updateCategory/{{$category->id}}" class="btn btn-success">Update</a>
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