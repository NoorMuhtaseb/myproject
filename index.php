<?php 
$result="";
include 'conn.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $quantiti=$_POST['quantiti'];
    $price=$_POST['price'];

    $sql="insert into product(name,quantiti,price) values('$name', '$quantiti', '$price')";
    if(mysqli_query($conn,$sql)){
        $result="Added Successfully!";
    } else {
        $result="Error!!";
    }
}





?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1 style="background-color:#581845;color:white; text-align:center; padding: 10px 20px;">OUR STORE</h1><br>


<div class="container">
    <div class="row">
        <div class="col">
        <form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend>Store Data</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="quantiti">quantiti</label>  
  <div class="col-md-4">
  <input id="quantiti" name="quantiti" type="text" placeholder="quantiti" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="price">price</label>  
  <div class="col-md-4">
  <input id="price" name="price" type="text" placeholder="price" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <a href="view.php"><button id="submit" name="submit" class="btn btn-info">Add</button></a>
  </div>

  <div class="text-center">
    <?php echo $result ?>
  </div>
</div>

</fieldset>
</form>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>