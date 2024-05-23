<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Edit Student</title>
  </head>
<body>

  @include('includes.nav')

<div class="container" style="margin-left: 20px ">
  <h2>Edit Student</h2>

  <form action="{{ route('updateStudent', $Student->id) }}" method="POST">
    @csrf
    @method('put')
    <label for="StudentName">Student name:</label><br>
    <input type="text" id="StudentName" name="StudentName" class="form-control" value="{{ $Student->StudentName }}"><br>
    <label for="age">age:</label><br>
    <input type="text" id="adg" name="age" class="form-control" value="{{ $Student->age }}"><br><br>

    <p><img src="{{ asset('assets/images/' . $student->image)  }}" alt=""></p>
    <label for="image">Image:</label><br>
    <input type="file" id="image" name="image" class="form-control"><br><br>

    <input type="submit" value="Submit">
   
  </form> 
</div>

</body>
</html>