@extends('adminsidebar')

    @section('content')
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
    <div class="navbar-wrapper">
    <a class="navbar-brand" href="#pablo">Products Details</a>
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
                    <form method="post" action="/saveProduct">
                    {{csrf_field()}}
                    <div class="col-lg-8">
                    <input type="text" class="form-control" name="name" placeholder="Enter Product's name">
                    <input type="text" class="form-control" name="description" placeholder="Enter Product's description">
                    <input type="text" class="form-control" name="photo" placeholder="Enter Product's image link">
                    <input type="integer" class="form-control" name="price" placeholder="Enter Product's price">
                    <br>
                    <div class="col-lg-4">
                    <div class="form-group" style="margin-top:18px">
                        <label>Select Tags</label>
                        <select class="form-control select2 select2-hidden-accessible" 
                        data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">
                            @foreach($data['tags'] as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    
                    <div class="form-group" style="margin-top:px">
                        <label>Select Category</label>
                        <select class="form-control select2 select2-hidden-accessible" 
                        data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">
                        @foreach($data['categories'] as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Save">

                    <div>
                    </form>
                    <table class="table table-dark">
                    
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Photo</th>
                        <th>Price</th>
                        <th>Action</th>
                        @foreach($data['products'] as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td><img src=" {{$product->photo}}" width="100" height="100"></td>
                            <td>{{$product->price}}</td>
                            
                            <td>
                                <a href="/deleteProduct/{{$product->id}}" class="btn btn-warning">Delete</a>
                                <a href="/updateProduct/{{$product->id}}" class="btn btn-success">Update</a>
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
    <div>
    @endsection
       