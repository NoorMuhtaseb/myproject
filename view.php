<?php
include 'conn.php';
$sql= "select id,name,quantiti,price from product";
$result=$conn->query($sql);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center" style="background-color:#581845;color:white; text-align:center; padding: 10px 20px;">Book Data</h1>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Book Name</th>
      <th scope="col">Quantiti</th>
      <th scope="col">Price</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
      <?php include 'conn.php';
      $sql="select * from product";
      $result=mysqli_query($conn,$sql);
      while($row=$result->fetch_assoc()) {
 
      ?>
    <tr>
      <th><?php echo $row['id'] ?></th>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['quantiti'] ?></td>
      <td><?php echo $row['price'] ?></td>
      <td><a href="edit.php?id=<?php echo $row['id'] ?>"><button class="btn btn-info">Edit</button> </a></td>
      <td><a href="delete.php?id=<?php echo $row['id'] ?>"><button class="btn btn-danger">Delete</button> </a></td>

    </tr>
  <?php } ?>
  </tbody>
</table>
        </div>
    </div>
</div>

<a href="index.php"><button class="btn btn-success" style="margin:30px;">Add New</button></a>

<body>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>