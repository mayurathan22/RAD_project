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
        <form action="/editsocial" method="post">
        {{csrf_field()}}
            <h6>Instagram</h6>
            <input type="text" class="form-control" name="instagram" value="{{$socials->instagram}}" />
            <h6>Google</h6>
            <input type="text" class="form-control" name="google" value="{{$socials->google}}" />
            <h6>Pinterest</h6>
            <input type="text" class="form-control" name="pinterest" value="{{$socials->pinterest}}" />
            <h6>Facebook</h6>
            <input type="text" class="form-control" name="facebook" value="{{$socials->facebook}}" />
            <h6>Twitter</h6>
            <input type="text" class="form-control" name="twitter" value="{{$socials->twitter}}" />
            <h6>Youtube</h6>
            <input type="text" class="form-control" name="youtube" value="{{$socials->youtube}}" />
            <h6>Tumblr</h6>
            <input type="text" class="form-control" name="tumblr" value="{{$socials->tumblr}}" />
           
            <input type="hidden" name="id" value="{{$socials->id}}"/>

            <input type="submit" class="btn btn-warning" value="Update"/>
            &nbsp;&nbsp;<input type="button" class="btn btn-danger" value="Cancel"/>
           
        </form>
    </div>
</body>
</html>