<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Data From DataBase</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                All Posts
                            </div>
                            <div class="card-body">
                                @if (Session::has('post_deleted'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('post_deleted')}}
                                </div>
                                    
                                @endif
                                    
                            
                              <table class="table">
                                <thead>
                                    <tr>
                                        <th>Post Title</th>
                                        <th>Post Body</th>
                                    </tr>
                                
                                </thead>
                                <tbody>
                                    @foreach ($post as $pos)
                                        <tr>
                                            <td>{{$pos->title}}</td>
                                            <td>{{$pos->body}}</td>
                                            <td><a href="/post/{{$pos->id}}">View</a></td>
                                            <td><a href="/delete-post/{{$pos->id}}">Delete</a></td>
                                            <td><a href="/edit-post/{{$pos->id}}">Edit</a></td>
                                        </tr>
                                    @endforeach 
                                </tbody>
                                </table>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>