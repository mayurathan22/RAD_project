@extends('adminsidebar')

    @section('content')
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
    <div class="navbar-wrapper">
    <a class="navbar-brand" href="#pablo">Tag Details</a>
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
                    <form method="post" action="/saveTag">
                    {{csrf_field()}}
                    <div class="col-lg-8">
                    <input type="text" class="form-control" name="name" placeholder="Enter Prodict's name">
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Save">
                    
                    </form>
                    <table class="table table-dark">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                        @foreach($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->name}}</td>                            
                           <td>
                                <a href="/deleteTag/{{$tag->id}}" class="btn btn-warning">Delete</a>
                                <a href="/updateTag/{{$tag->id}}" class="btn btn-success">Update</a>
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