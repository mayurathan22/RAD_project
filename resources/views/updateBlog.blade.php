<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>update Blog</title>
</head>
<body>
    <div class="container">
    <br>
    <br>
    <br>
        <form action="/editBlog" method="post">
        {{csrf_field()}}
            <h6>Description</h6>
            <input type="text" class="form-control" name="description" value="{{$blogs->description}}" />
            <h6>Photo</h6>
            <input type="text" class="form-control" name="photo" value="{{$blogs->photo}}" />
            <br>
            <br>
            
            <input type="hidden" name="id" value="{{$blogs->id}}"/>

            <input type="submit" class="btn btn-warning" value="Update"/>
           
        </form>
    </div>
</body>
</html>