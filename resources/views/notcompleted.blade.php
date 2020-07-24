@extends('adminsidebar')

    @section('content')
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
    <div class="navbar-wrapper">
    <a class="navbar-brand" href="#pablo">Orders</a>
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

                <div><a href="/notcompletedorders" class="btn btn-primary">Not completed orders</a><div>
                    <table class="table table-dark">
                        <th>Order ID</th>
                        <th>User Id</th>
                        <th>Timestamp</th>
                        
                        @foreach($orders as $order)
                        @if(!$order->is_accepted)
                        <tr>
                            <td>
                            <div><a href="ordersee/{{$order->id}}" class="btn btn-primary">{{$order->id}}</a></div>
                            </td>
                            <td>{{$order->user_id}}</td>
                            <td>{{$order->created_at}}</td>                            
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
</div>
       
@endsection