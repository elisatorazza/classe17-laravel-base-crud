<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
    <h1>{{$book->title}}</h1>
    <h2>{{$book->author}}</h2>
    <h3>{{$book->edition}}</h3>
    <img src="{{$book->image}}" alt="">

<form action="{{route("books.destroy", $book->id)}}" method="POST">
@csrf
@method("DELETE")
<input type="submit" value="Cancella">
</form>
</body>
</html>