<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Student</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{route('addStudent')}}">Add</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
      <li><a href="{{route('Students')}}">Students</a></li>
  
      </li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
  


  @include('includes.nav')

<div class="container" style="margin-left: 20px ">
  <h2>Insert Student</h2>

  <form action="{{route('insertStudent')}}"method="POST">
    @csrf
    <label for="StudentName">Studentname:</label><br>
<p style="color:red ">
    @error(Studentname)
       {{ $message }}
    @enderror
</p>
    <input type="text" id="StudentName" name="StudentName" class="form-control"><br>
    <label for="age">age:</label><br>
    <input type="text" id="age" name="age" class="form-control"><br><br>
    <input type="submit" value="Submit">
  </form> 
</div>

</body>
</html>


