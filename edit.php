

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products update</title>
    <!-- css link -->
    <link rel="stylesheet" href="../crud/css/style2.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style> 
*{
    margin: 0;
    box-sizing: border-box;
    padding: 0;
}
.header-body{
    display: flex;
    justify-content: space-around;
    align-items: center;
    position: relative;
    background-color: rgb(74, 176, 26);
    color: #8e7373;
    padding: 10px 0px;
    transition: 0.5s ease-in-out;
}

i{
    color: #ffffff;
}
a{
   text-decoration: none;
   color: #000000;
}

nav a{
    margin: 10px;
}

nav a:hover{
    background-color: #420630;
    padding: 5px;
    border-radius: 5px;
    color: #ffffff;
}
sup{
    color: #420630;
    font-weight: bold;
    font-size: 20px;
}
.container{
    width: 100%;
    height: 80%;
    background-color: #420630;
}

h2{
    text-align: center;
    color: #ffffff;
    padding: 10px;
}

form{
    display: grid;
    grid-template-columns: auto;
    margin-left: 260px;
    padding: 10px;
    padding-bottom: 100px;
}
.input-fields{
    padding: 10px;
    margin: 10px;
    width: 60%;
    display: flex;
    align-items: center;
    position: relative;
    outline: none;

}

.submit_btn{
    padding: 10px;
    margin: 10px;
    width: 60%;
}
.submit_btn:hover{
    background-color:#a0959d;
    color: #ffffff;
}
.footer{
    background-color: rgb(74, 176, 26);
    text-align: center;
    align-items: center;
    padding: 19px;
    bottom: 0;
}
.info{
    width: 30%;
    background-color: rgb(74, 176, 26);
    padding: 10px;
    margin-left: 750px;
    border-radius: 5px;
    display: grid;
    grid-template-columns: auto auto;
    position: relative;
    justify-content: space-between;
  
}
.dmsg{
    font-weight: bold;
    margin: 10px;

    
}

.fa-times{
    margin-left:60px;
    margin-top: 10px;
}

</style> 
<body>
   <?php include('header.php') ?>
   <?php include('form.php') ?>
   <?php include('footer.php') ?>

  
    <!-- {/* JavaScript */} -->
    <script src="./js/script.js"></script>
</body>

</html>