<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body style="padding:10px;margin:15px;width:50%;border:2px solid black;">
<form action="database.php" method="get">
  <div class="mb-3">
    <label for="id" class="form-label">Student ID : </label>
    <input type="Text" class="form-control" id="id" name="sid" style="width:50%">
    <label for="name" class="form-label">Student name :</label>
   <input type="text" class="form-control" id="name" name="sname" style="width:50%"> 
  </div>
  <button type="submit" name="Insert" class="btn btn-primary">Insert</button>
  <button type="submit" name="Delete" class="btn btn-primary">Delete</button>
  <button type="submit" name="View" class="btn btn-primary">View</button>
  <button type="submit" name="Update" class="btn btn-primary">Update</button>
</form>
</body>
</html>