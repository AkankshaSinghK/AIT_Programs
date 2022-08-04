<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET POST </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body style="padding:10px;margin:15px;width:50%;border:2px solid black;">
<form action="form2.php" method="post">
  <div class="mb-3">
    <label for="Name" class="form-label">Name</label>
    <input type="Text" class="form-control" id="Name" name="name" style="width:50%">
    <label for="Age" class="form-label">Age</label>
   <input type="text" class="form-control" id="Age" name="age" style="width:50%"> 
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-primary">Reset</button>
</form>
</body>
</html>