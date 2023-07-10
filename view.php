
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping Cart Tutorial</title>
    <!-- css link -->
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>

#customers{
    margin-top: 20px;
    width: 60%;
    align-items: center;
    display: flex;
    position: relative;
    justify-content: center;
  }

    #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    text-align: center;
  }
  
  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #customers tr:nth-child(even){background-color: #f2f2f2;}
  
  #customers tr:hover {background-color: #ddd;}
  
  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
    text-align: center;

  }

  .fa-edit{
    color: #420630;
}
.fa-trash{
    color: red;
    margin-left: 10px;
}

</style>
<body>
   <?php 
   include('header.php');
   include('connect.php');
    ?>
<!--  
<table border="1">
    <thead>
       
    </thead>
</table> -->


<table id="customers">

<tr>
      <th>Sl NO</th>
      <th>Product Name</th>
      <th>Product Image</th>
      <th>Product Price</th>
      <th>Action</th>
</tr>

  <?php 
  $select_data = "SELECT `id`, `name`, `price`, `img` FROM `products`";
  $select_data_query = mysqli_query($conn, $select_data) ;
  $rows_count = mysqli_num_rows($select_data_query);



  if(mysqli_num_rows($select_data_query)>0){
    while($rows = mysqli_fetch_array($select_data_query))
    {
?>
    
<tr>
  <td><?php echo $rows['id'] ?></td>
  <td><?php echo $rows['name'] ?></td>
  <td><img src="../crud/images/<?php echo $rows['img']  ?>" width="60" height="60"></td>
  <td><?php echo $rows['price'] ?></td>
  <td>
   <a href="../crud/edit.php/id=<?php echo $rows['id'] ?>"><i class="fas fa-edit"></i></a>
   <a href="../crud/delete.php/id=<?php echo $rows['id'] ?>"><i class="fas fa-trash"></i></a>
  </td>
 
</tr>


  if(mysqli_num_rows($select_data_query)>0){
    while($rows = mysqli_fetch_array($select_data_query))
    {
?>
      <tr>
      <th>Sl NO</th>
      <th>Product Image</th>
      <th>Product Name</th>
      <th>Product Price</th>
      <th>Action</th>
</tr>
<tr>
  <td><?php echo $rows['id'] ?></td>
  <td><?php echo $rows['name'] ?></td>
  <td><?php echo $rows['price'] ?></td>
  <td><?php echo $rows['img'] ?></td>
  <td><?php echo $rows['id'] ?></td>
 
</tr>


   <?php }
  }
  
  ?>
 


   <?php }
  }
  
  ?>
 


</table>
  
    <!-- {/* JavaScript */} -->
    <script src="./js/script.js"></script>
</body>

</html>
