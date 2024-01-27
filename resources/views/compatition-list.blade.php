<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <title>compatition-list</title>
</head>
<body>
    
    <div class="container m-5">
        
       <h1>list</h1>
       <!-- {{ $students }} -->


<table class="table table-striped">

  <thead>
    <tr>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">oprate</th>
    </tr>
  </thead>
  @foreach($students as $id => $student)
  <tbody>
    <tr>
      <th scope="row"> {{$student->username}}</th>
      <td> {{$student->email}}</td>

      <td> <a href="{{ route('compatition.edit', ['id' => $student->id]) }}"><button type="button" class="btn btn-primary">update</button> </a> </td>
    </tr>
  </tbody>
  @endforeach 
</table>


       
       
        

       </form>

    </div>  


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</body>
</html>