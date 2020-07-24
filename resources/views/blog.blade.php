@extends('adminsidebar')

    @section('content')
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
    <div class="navbar-wrapper">
    <a class="navbar-brand" href="#pablo">Blog Details</a>
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
                    <form method="post" action="/saveBlog">
                    {{csrf_field()}}
                    <div class="col-lg-8">
                    <input type="text" class="form-control" name="description" placeholder="Enter Blog's description">
                    <input type="text" class="form-control" name="photo" placeholder="Enter Blog's image link">
                    <br>
                    
                    
                    <input type="submit" class="btn btn-primary" value="Save">
                    </div>
                    </form>
                    <table class="table table-dark">
                        <th>ID</th>
                        <th>Description</th>
                        <th>Photo</th>
                        <th>Action</th>
                        @foreach($blogs as $blog)
                        <tr>
                            <td>{{$blog->id}}</td>
                            <td>{{$blog->description}}</td>
                            <td><img src=" {{$blog->photo}}" width="100" height="100">
                            </td>
                            
                           
                            <td>
                                <a href="/deleteBlog/{{$blog->id}}" class="btn btn-warning">Delete</a>
                                <a href="/updateBlog/{{$blog->id}}" class="btn btn-success">Update</a>
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
     
