@extends('adminsidebar')

    @section('content')
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
    <div class="navbar-wrapper">
    <a class="navbar-brand" href="#pablo">Order Details</a>
    </div>
    </div>
    </nav>
    <div class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="container">
        <div class="text-center">
            
            <div class="row">
                <div class="col-md-7" >

                    
                    <table class="table table-dark">
                        <th>Item ID</th>
                        <th>Quentity</th>
                        @foreach($data['orders'] as $order)
                        @if($data['ids'] == $order->order_id )
                        <tr>
                        
                            <td>{{$order->product_id}}</td>
                            <td>{{$order->quentity}}</td>
                                                      
                        </tr>
                        @endif
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