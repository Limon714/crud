<?php 

include "connect.php";

$id = $_GET['updateid'];

$sql = "Select * from `user` where ID = $id" ;
$result = mysqli_query($con, $sql);

$row=mysqli_fetch_assoc($result);

  
  $name = $row ['Name']; 
  
  $email = $row ['Email']; 
  
  $mobile = $row ['Mobile']; 
  
  $password = $row ['Password']; 
  

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update `user` set ID=$id, Name =' $name ', Email = '$email', Mobile = '$mobile', Password = '$password' where ID=$id";
    $result = mysqli_query($con, $sql);

    if($result){
// echo "Data updated Successfully";
      header('location:display.php');
    }else{
        die (mysqli_error($con));
}
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>PHP CRUD Application</title>
  </head>
  <body>
    <div class="container mt-3">
    <form method="post">
    <div class="mb-3">
    <label for="Name">Name</label>
    <input type="text" placeholder="Enter your name" class="form-control" name="name" value=<?php echo $name; ?> >
    </div>
    <div class="mb-3">
    <label >Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter your Email Address" autocomplete="off" value=  <?php echo $email; ?> >
  </div>
    <div class="mb-3">
    <label for="Mobile">Mobile</label>
    <input type="text" placeholder="Enter your mobile number" class="form-control" name="mobile" value=  <?php echo $mobile; ?> >
    </div>


  
  <div class="mb-3">
    <label >Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter your password" autocomplete="off" value= <?php echo $password; ?> >
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
   
  </body>
</html>