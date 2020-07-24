<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>update Product</title>
</head>
<body>
    <div class="container">
    <br>
    <br>
    <br>
        <form action="/editabout" method="post">
        {{csrf_field()}}
            <h4>Address</h4>
            <input type="text" class="form-control" name="address1" value="{{$abouts->address1}}" />
            <input type="text" class="form-control" name="address2" value="{{$abouts->address2}}" />
            <input type="text" class="form-control" name="address3" value="{{$abouts->address3}}" />
            <br>
            <br>
            <h4>Contact number</h4>
            <input type="text" class="form-control" name="phone1" value="{{$abouts->phone1}}" />
            <input type="text" class="form-control" name="phone2" value="{{$abouts->phone2}}" />
            <input type="text" class="form-control" name="phone3" value="{{$abouts->phone3}}" />
            <br>
            <br>
            <h4>Vision</h4>
            <input type="text" class="form-control" name="vision" value="{{$abouts->vision}}" />
            <h4>E-mail</h4>
            <input type="text" class="form-control" name="email" value="{{$abouts->email}}" />
            <br>
            <br>
            <h4>Engineer's Details</h4>
            <h6>Engineer's name</h6>
            <input type="text" class="form-control" name="engineer_name" value="{{$abouts->engineer_name}}" />
            <h6>Engineer's photo </h6>
            <input type="text" class="form-control" name="engineer_photo" value="{{$abouts->engineer_photo}}" />
            <h6>Engineer's review</h6>
            <input type="text" class="form-control" name="engineer_review" value="{{$abouts->engineer_review}}" />
            <br>
            <br>
            <h4>Architecture's Details</h4>
            <h6>Architecture's name</h6>
            <input type="text" class="form-control" name="archi_name1" value="{{$abouts->archi_name1}}" />
            <h6>Architecture's photo</h6>
            <input type="text" class="form-control" name="archi_photo1" value="{{$abouts->archi_photo1}}" />
            <h6>Architecture's review</h6>
            <input type="text" class="form-control" name="archi_review1" value="{{$abouts->archi_review1}}" />
            <br>
            <br>
            <h4>Architecture's Details</h4>
            <h6>Architecture's name</h6>
            <input type="text" class="form-control" name="archi_name2" value="{{$abouts->archi_name2}}" />
            <h6>Architecture's photo</h6>
            <input type="text" class="form-control" name="archi_photo2" value="{{$abouts->archi_photo2}}" />
            <h6>Architecture's review</h6>
            <input type="text" class="form-control" name="archi_review2" value="{{$abouts->archi_review2}}" />
            <br>
            <br>
            <h4>Client's Details</h4>
            <h6>Client's name</h6>
            <input type="text" class="form-control" name="client_name1" value="{{$abouts->client_name1}}" />
            <h6>Client's photo</h6>
            <input type="text" class="form-control" name="client_photo1" value="{{$abouts->client_photo1}}" />
            <h6>Client's review</h6>
            <input type="text" class="form-control" name="client_review1" value="{{$abouts->client_review1}}" />
            <br>
            <br>
            <h4>Client's Details</h4>
            <h6>Client's name</h6>
            <input type="text" class="form-control" name="client_name2" value="{{$abouts->client_name2}}" />
            <h6>Client's photo</h6>
            <input type="text" class="form-control" name="client_photo2" value="{{$abouts->client_photo2}}" />
            <h6>Client's review</h6>
            <input type="text" class="form-control" name="client_review2" value="{{$abouts->client_review2}}" />
            <br>
            <br>
            <h4>Client's Details</h4>
            <h6>Client's name</h6>
            <input type="text" class="form-control" name="client_name3" value="{{$abouts->client_name3}}" />
            <h6>Client's photo</h6>
            <input type="text" class="form-control" name="client_photo3" value="{{$abouts->client_photo3}}" />
            <h6>Client's review</h6>
            <input type="text" class="form-control" name="client_review3" value="{{$abouts->client_review3}}" />
            <br>
            <br>
           
            <input type="hidden" name="id" value="{{$abouts->id}}"/>

            <input type="submit" class="btn btn-warning" value="Update"/>
           
        </form>
    </div>
</body>
</html>