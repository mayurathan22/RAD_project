<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>update Contract</title>
</head>
<body>
    <div class="container">
    <br>
    <br>
    <br>
        <form action="/editContract" method="post">
        {{csrf_field()}}
            <h6>Customer's ID</h6>
            <input type="text" class="form-control" name="customer_id" value="{{$contracts->customer_id}}" />
            <h6>Customer's Name</h6>
            <input type="text" class="form-control" name="customer_name" value="{{$contracts->customer_name}}" />
            <h6>Address</h6>
            <input type="text" class="form-control" name="address" value="{{$contracts->address}}" />
            <h6>Contact Number</h6>
            <input type="text" class="form-control" name="phone" value="{{$contracts->phone}}" />
            <h6>Income</h6>
            <input type="integer" class="form-control" name="income" value="{{$contracts->income}}" />
            <h6>Outcome</h6>
            <input type="integer" class="form-control" name="outcome" value="{{$contracts->outcome}}" />


            <br>
            <br>
            
            <input type="hidden" name="id" value="{{$contracts->id}}"/>

            <input type="submit" class="btn btn-warning" value="Update"/>
            &nbsp;&nbsp;<input type="button" class="btn btn-danger" value="Cancel"/>
           
        </form>
    </div>
</body>
</html>