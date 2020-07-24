<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <ul>
                @foreach($errors->all as $error )
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{$message}}</strong>
        </div>
    @endif
        <form method="post" action="{{ url('sendemail/get')}}">
        {{ csrf_field()}}
        <div class='form-group'>
            <label>Enter your Name</label>
            <input type="text" name="name" class="form-control"/>
        </div>
        <div class='form-group'>
            <label>Enter your Email</label>
            <input type="text" name="email" class="form-control"/>
        </div>
        <div class="form-group">
			<label for="subject">Subject</label>
			<input type="text" name="subject" class="form-control" placeholder="Your subject of this message">
		</div>
        <div class="form-group">
			<label for="message">Message</label>
            <input type="text" name="message" class="form-control" placeholder="Your subject of this message">
		</div>							       
        <div class='form-group'>
            <input type="submit" name="send" value="Send" class="btn btn-info" />
        </div>
        </form>
    </div>
       
</body>
</html>