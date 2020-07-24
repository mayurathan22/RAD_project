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
        <form action="/editProducts" method="post">
        {{csrf_field()}}
            <h6>Name</h6>
            <input type="text" class="form-control" name="name" value="{{$data['products']->name}}" />
            <h6>Description</h6>
            <input type="text" class="form-control" name="description" value="{{$data['products']->description}}" />
            <h6>Photo</h6>
            <input type="text" class="form-control" name="photo" value="{{$data['products']->photo}}" />
            <h6>Price</h6>
            <input type="integer" class="form-control" name="price" value="{{$data['products']->price}}" />
            <br>
            <br>
            <div class="form-group" style="margin-top:18px">
                        <label>Select Tags</label>
                        <select class="form-control select2 select2-hidden-accessible" 
                        data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">
                            @foreach($data['tags'] as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:18px">
                        <label>Select Category</label>
                        <select class="form-control select2 select2-hidden-accessible" 
                        data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">
                        @foreach($data['categories'] as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
            <input type="hidden" name="id" value="{{$data['products']->id}}"/>

            <input type="submit" class="btn btn-warning" value="Update"/>
            &nbsp;&nbsp;<input type="button" class="btn btn-danger" value="Cancel"/>
           
        </form>
    </div>
</body>
</html>