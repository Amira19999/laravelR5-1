<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>
  
  @include('includes.nav')

<div class="container" style="margin-left: 20px ">
  <h2>Insert Student</h2>

  <form action="{{ route('insertClient') }}" method="POST">
    @csrf
    <label for="StudentName">Studentname:</label><br>
    <input type="text" id="StudentName" name="StudentName" class="form-control"><br>
    <label for="age">age:</label><br>
    <input type="text" id="age" name="age" class="form-control"><br><br>
    <input type="submit" value="Submit">
  </form> 
</div>

</body>
</html>