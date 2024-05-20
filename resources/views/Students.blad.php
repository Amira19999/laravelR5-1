<!DOCTYPE html>
<html lang="en">
<head>
  <title>Students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    @include('includes.nav')

<div class="container">
  <h2>Student Data</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Student Name</th>
        <th>age</th>
       
      </tr>
    </thead>
    <tbody>
      @foreach ($Student as $Student)
      <tr>
        <td>{{ $Student->StudentName }}</td>
        <td>{{ $Student->age}}</td>
     
        <td> <a href="{{route('editStudent', $Student->id)}}">Edit</a></td>
        <td> <a href="{{route('showStudent', $Student->id)}}">Show</a></td>
        <td> 
        <form action ="{{route('delStudent')}}" method="POST">
          @csrf
          @method('DELETE')
            <input type="hidden" value="{{$Student->id}}" name="id">
            <input type="submit" value="Delete">
          </form>
</td> 
      </tr>
      @endforeach

    </tbody>
  </table>
</div>

</body>
</html>
