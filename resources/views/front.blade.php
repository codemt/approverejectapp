<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>My Users </title>
</head>
<body>
        <h1> My Status </h1>

        <h1> Comments </h1> 
        <form action="{{url('/comments')}}" method="POST">
                    {{ csrf_field() }} 
                <div class="form-group">
                       <label for="comment"> Write Comment </label>
                        <input class="form-control" name="comment" placeholder="" type="text">
                        
                </div>

                <input class="btn btn-primary" type="submit" value="Done">
        </form>

        <h5> List of Comments </h5>
        <hr> 
        @forelse($comments as $comment)

                <p>{{ $comment->comments }}</p>

        @empty
            <h4> No Comments </h4>
        @endforelse
        
</body>
</html> 