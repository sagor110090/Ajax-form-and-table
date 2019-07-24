<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  </head>
<body>
<div class="container">
    <table  class="table" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Description</th>
                <th>action</th>
                 
            </tr>
        </thead>
        <tbody id="sagor">

      
            
        </tbody>
      
    </table>

    <br><br><br>

    <p id="hh"></p>

    <div class="col-5">
            <form action="" method="post">
                @csrf
                  Name :  <input type="text" class="form-control" id="name" name="name"><br>
                  Address :  <input type="text"class="form-control" id="address" name="address"><br>
                   Description : <input type="text"class="form-control" id="description" name="description"><br>
                    <button class="btn btn-success " id="submit">submit</button>
                </form>

    </div>

    
    </div>



   {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   --}}
   <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="js/custom.js"></script> 
   
   
</body>
</html>