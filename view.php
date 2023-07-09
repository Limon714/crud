
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

</style>
<body>
   <?php include('header.php') ?>
<!--  
<table border="1">
    <thead>
       
    </thead>
</table> -->


<table id="customers">
  <tr>
        <th>Sl NO</th>
        <th>Product Image</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Action</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Maria Anders</td>
    <td>Germany</td>
    <td>Germany</td>
    <td>Germany</td>
  </tr>


  <tr>
    <td>2</td>
    <td>Simon Crowther</td>
    <td>UK</td>
    <td>UK</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Marie Bertrand</td>
    <td>France</td>
    <td>France</td>
    <td>France</td>
  </tr>
</table>
  
    <!-- {/* JavaScript */} -->
    <script src="./js/script.js"></script>
</body>

</html>