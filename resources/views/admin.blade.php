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
    <title> Database Users </title>
</head>
<body>
        <table class="table table-stripped">


                    <thead>

                                <tr> 
                                       <th> Comments  </th>  
                                       <th> Approval  </th>      
                                </tr>

                    </thead>

                    <tbody>
                        @forelse($comments as $comment)
                            <tr>

                                    <td>{{ $comment->comments }}  </td> 
                                    <td>
                                        
                                            <form action="{{url('/toggle-approve')}}" method="POST">
                                                {{ csrf_field() }} 
                                            <input type="checkbox" <?php  if($comment->approved == 1 ) { echo "Checked";} ?> name="approved">
                                            <input type="hidden" name="commentId" value="{{  $comment->id }}">
                                            <input class="btn btn-primary" type="submit" value="Done">
                                    </form>
                                    
                                    
                                    
                                    
                                    
                                    </td>
                            </tr>
                        @empty
                        <h4> No data </h4>
                        @endforelse
                    </tbody>




        </table>

        
</body>
</html> 