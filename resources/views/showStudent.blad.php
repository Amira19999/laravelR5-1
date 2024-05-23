<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show {{ $Student-> StudentName }}</title>
</head>
<body>
<p><img src="{{ asset('assets/images/' . $student->image)  }}" alt=""></p>
    <h1><strong>Student: </strong>{{ $Student->StudentName }}</h1>
    <hr>
    <h2><strong>age: </strong>{{ $Student->age}}</h2>
    <hr>
    
</body>
</html>