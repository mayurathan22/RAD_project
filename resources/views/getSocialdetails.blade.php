@extends('adminsidebar')

    @section('content')
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
    <div class="navbar-wrapper">
    <a class="navbar-brand" href="#pablo">Social Details</a>
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
                    

                    <div>
                    </form>
                   
                    <table class="table table-dark">
                    <th><div class="col-lg-4"></div></th>
                    <th><div class="col-lg-4"></div></th>
                        @foreach($socials as $social)
                        <h3>About Social Medias</h3>
                        <tr>
                            <th>Instagram</th>
                            <td>{{$social->instagram}}</td>           
                        </tr>
                        <tr>
                            <th>Google</th>
                            <td>{{$social->google}}</td>
                        </tr>
                        <tr>
                            <th>Pinterest</th>
                            <td>{{$social->pinterest}}</td>
                        </tr>
                        <tr>
                            <th>Facebook</th>
                            <td>{{$social->facebook}}</td>
                        </tr>
                        <tr>
                            <th>Twitter</th>
                            <td>{{$social->twitter}}</td>
                        </tr>
                        <tr>
                            <th>youtube</th>
                            <td>{{$social->youtube}}</td>
                        </tr>
                        <tr>
                            <th>Tumblr</th>
                            <td>{{$social->tumblr}}</td>
                        </tr>
                       
                        </table>
                        
                        <tr>   
                            <td>
                                
                                <a href="/updatesocial/{{($social->id)}}" class="btn btn-success">Update</a>
                            </td>
                        </tr>
                        </div>
                        @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>         
    </div>
    </div>
    <div>
    @endsection
       