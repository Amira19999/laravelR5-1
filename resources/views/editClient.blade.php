<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<<<<<<< HEAD
=======
    <title>Edit Client</title>
>>>>>>> 4e7be649a13bcf26637459ffb86bb44d65f21c6a
  </head>
<body>
  
  @include('includes.nav')

<div class="container" style="margin-left: 20px ">
  <h2>Edit Client</h2>

<<<<<<< HEAD
  <form action="{{ route('updateClient', $client->id) }}" method="POST">
    @csrf
    @method('put')
    <label for="clientName">Client name:</label><br>
    <input type="text" id="clientName" name="clientName" class="form-control "value="{{ $client->clientName}}"><br>
    <label for="phone">Phone:</label><br>
    <input type="text" id="phone" name="phone" class="form-control"value="{{ $client->phone}}"><br><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" class="form-control"value="{{ $client->email}}"><br><br>
    <label for="website">website:</label><br>
    <input type="text" id="website" name="website" class="form-control"value="{{ $client->website}}"><br><br>
    
=======
  <form action="{{ route('updateClients', $client->id) }}" method="POST">
    @csrf
    @method('put')
    <label for="clientName">Client name:</label><br>
    <input type="text" id="clientName" name="clientName" class="form-control" value="{{ $client->clientName }}"><br>
    <label for="phone">Phone:</label><br>
    <input type="text" id="phone" name="phone" class="form-control" value="{{ $client->phone }}"><br><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" class="form-control" value="{{ $client->email }}"><br><br>
    <label for="website">website:</label><br>
    <input type="text" id="website" name="website" class="form-control" value="{{ $client->website }}"><br><br>
>>>>>>> 4e7be649a13bcf26637459ffb86bb44d65f21c6a
    <input type="submit" value="Submit">
  </form> 
</div>

</body>
</html>