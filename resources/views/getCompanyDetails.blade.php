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
                    

                    <div>
                    </form>
                   
                    <table class="table table-dark">
                    <th><div class="col-lg-4"></div></th>
                    <th><div class="col-lg-4"></div></th>
                        @foreach($abouts as $about)
                        <h3>About Company</h3>
                        <tr>
                            <th>Address1</th>
                            <td>{{$about->address1}}</td>           
                        </tr>
                        <tr>
                            <th>Address2</th>
                            <td>{{$about->address2}}</td>
                        </tr>
                        <tr>
                            <th>Address3</th>
                            <td>{{$about->address3}}</td>
                        </tr>
                        <tr>
                            <th>Phone1</th>
                            <td>{{$about->phone1}}</td>
                        </tr>
                        <tr>
                            <th>Phone2</th>
                            <td>{{$about->phone2}}</td>
                        </tr>
                        <tr>
                            <th>Phone3</th>
                            <td>{{$about->phone3}}</td>
                        </tr>
                        <tr>
                            <th>Vision</th>
                            <td>{{$about->vision}}</td>
                        </tr>
                        <tr>
                            <th>email</th>
                            <td>{{$about->email}}</td>
                        </tr>
                        </table>
                        <br>
                        <br>
                        <h3>About Team</h3>
                        <table class="table table-dark">
                        <tr>
                            <th>Engineer's name</th>
                            <td>{{$about->engineer_name}}</td>
                        </tr>
                        <tr>
                            <th>Engineer's Photo</th>
                            <td><img src="{{$about->engineer_photo}}" width="100" height="100"></td>
                        </tr>
                        <tr>
                            <th>Engineer's Review</th>
                            <td>{{$about->engineer_review}}</td>
                        </tr>
                        </table>
                        
                        <table class="table table-dark">
                        <tr>
                            <th>Architect's name</th>
                            <td>{{$about->archi_name1}}</td>
                        </tr>
                        <tr>
                            <th>Architect's Photo</th>
                            <td><img src="{{$about->archi_photo1}}" width="100" height="100"></td>
                        </tr>
                        <tr>
                            <th>Architect's Review</th>
                            <td>{{$about->archi_review1}}</td>
                        </tr>
                        </table>
                        
                        <table class="table table-dark">
                        <tr>
                            <th>Architect's name</th>
                            <td>{{$about->archi_name2}}</td>
                        </tr>
                        <tr>
                            <th>Architect's Photo</th>
                            <td><img src="{{$about->archi_photo2}}" width="100" height="100"></td>
                        </tr>
                        <tr>
                            <th>Architect's Review</th>
                            <td>{{$about->archi_review2}}</td>
                        </tr>
                        </table>
                        <br>
                        <br>
                        <h3>Clients review</h3>
                        <table class="table table-dark">
                        <tr>
                            <th>Client's name</th>
                            <td>{{$about->client_name1}}</td>
                        </tr>
                        <tr>
                            <th>Client's Photo</th>
                            <td><img src="{{$about->client_photo1}}" width="100" height="100"></td>
                        </tr>
                        <tr>
                            <th>Client's Review</th>
                            <td>{{$about->client_review1}}</td>
                        </tr>
                        </table>
                        <table class="table table-dark">
                        <tr>
                            <th>Client's name</th>
                            <td>{{$about->client_name2}}</td>
                        </tr>
                        <tr>
                            <th>Client's Photo</th>
                            <td><img src="{{$about->client_photo2}}" width="100" width="100"></td>
                        </tr>
                        <tr>
                            <th>Client's Review</th>
                            <td>{{$about->client_review2}}</td>
                        </tr>
                        </table>
                        <table class="table table-dark">
                        <tr>
                            <th>Client's name</th>
                            <td>{{$about->client_name3}}</td>
                        </tr>
                        <tr>
                            <th>Client's Photo</th>
                            <td><img src="{{$about->client_photo3}}" width="100" width="100"></td>
                        </tr>
                        <tr>
                            <th>Client's Review</th>
                            <td>{{$about->client_review3}}</td>
                        </tr>
                        </table>
                       
                       
                        
                        <tr>   
                            <td>
                                
                                <a href="/updateabout/{{($about->id)}}" class="btn btn-success">Update</a>
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
       