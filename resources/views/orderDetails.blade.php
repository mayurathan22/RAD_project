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
                        <th>Action</th>
                        <th>Is Accept</th>
                        @foreach($orders as $order)
                        <tr>
                            <td>
                            <div><a href="ordersee/{{$order->id}}" class="btn btn-primary">{{$order->id}}</a></div>
                            </td>
                            <td>{{$order->user_id}}</td>
                            <td>{{$order->created_at}}</td>
                            
                            <td>
                            @if(!$order->is_accepted)
                            <div><a href="markascompleted/{{($order->id)}}" class="btn btn-primary">Mark as completed</a><div>
                            @else
                            <div><a href="markasnotcompleted/{{($order->id)}}" class="btn btn-danger">Mark as not completed</a><div>
                            @endif
                            @if(!$order->is_email)
                            <a href="sendemail/send/{{($order->id)}}" class="btn btn-primary">Send email</a>
                            @endif                               
                            </td>
                            <td>
                            @if($order->is_accepted)
                            <button class="btn btn-success">Completed</button>
                            @else
                            <button class="btn btn-warning">Not Completed</button>
                            @endif
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
</div>
       
@endsection