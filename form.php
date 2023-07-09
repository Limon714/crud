<?php include('connect.php');

if(isset($_POST["btn"])){
    $btn_nm = $_POST["Name"];
    $btn_pr = $_POST["Price"];
    $btn_img = $_FILES["Image"]["name"];
    $btn_img_tem = $_FILES["Image"]["tmp_name"];
    $img_folder = "images/" . $btn_img;

   
    $insert_products = mysqli_query($conn, "insert into `products` (name,price,img) values('$btn_nm', '$btn_pr', '$btn_img')");

    if($insert_products){
        move_uploaded_file($btn_img_tem,$img_folder);
        $display_msg = "Product inserted Successfully";
    }else{
        $display_msg = "There is something fishy";
    }

}


?> 
 
<div class="container">
    <section>
       
          
        <h2 class="heading">Add New Products</h2>
        <?php if(isset($display_msg)){
                echo "<div class='info'>
                <span class='dmsg'>$display_msg . &nbsp;</span>
                <i class = 'fas fa-times' onclick='this.parentElement.style.display = `none`';></i>
                </div>";
            } ?>
        
        <form action="" class="addproduct" method="post" enctype="multipart/form-data">
            <input type="text" name="Name" placeholder="Enter Your Product Name" class="input-fields" required>

            <input type="number" name="Price" min="1" placeholder="Enter Price" class="input-fields" required>

            <input type="file" name="Image" class="input-fields" required accept="image/png, image/jpg, image/jpeg">

            <input type="submit" name="btn" class="submit_btn" value="Add Product">
        </form>
    </section>
</div>