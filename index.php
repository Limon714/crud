<?php

$conn = mysqli_connect("localhost", "root", "", "fiz") or die("Database is not connected");
if (isset($_POST['send'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $send = $_POST['send'];

    $query = " INSERT INTO `insert_data`( `name`, `email`, `phone`, `department`) VALUES ('$name','$email','$phone','$department')";

    $check =  mysqli_query($conn, $query);

    if ($check) {
        echo "<script> alert('Data send Successful') </script>";
    } else {
        echo "<h1>Data send Failed</h1>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
    .store {
        margin: 0 auto;
        height: 400px;
        width: 450px;
    }

    input,
    select {
        width: 200px;
        outline: none;
        text-align: center;
        color: #676767;
        border: 2px solid rgba(124, 230, 18, 0.959);
        padding: 10px;
    }

    button {
        border: none;
        background-color: rgb(43, 3, 82);
        text-align: center;
        color: #ffffff;
        padding: 10px;
        font-size: 16px;
    }

    button:hover {
        background-color: rgb(20, 206, 29);
        color: rgb(255, 255, 255);
    }

    table,
    th,
    tr,
    td {
        border: 2px solid rgba(124, 230, 18, 0.959);
        border-collapse: collapse;
        padding: 10px;
        margin: 0 auto;
    }

    table {
        padding-bottom: 30px;
        margin-top: -240px;
    }

    h2 {
        margin: 0 auto;
        text-align: center;
        color: rgba(23, 4, 92, 0.986);
        padding-bottom: 10px;
    }
    </style>
    <h2>PHP CRUD PROJECT</h2>
    <form action="" method="post">
        <div class="store">


            <input type="text" name="name" placeholder="Name">
            <input type="text" name="email" placeholder="Email">
            <br> <br>
            <input type="text" name="phone" placeholder="Phone Number">
            <select name="department" id="">
                <option value="MBA">MBA</option>
                <option value="BBA">BBA</option>

                <option value="CSE">CSE</option>
            </select>
            <br><br>
            <button name="send">Submit</button>
        </div>
    </form>

    <table>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Department</th>
        <?php

        $read = "SELECT * FROM `insert_data`";
        $maybe = mysqli_query($conn, $read);
        while ($row = (mysqli_fetch_array($maybe))) {
        ?>

        <tr>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <td><?php echo $row["department"]; ?></td>
        </tr>


        <?php

        } ?>
    </table>
</body>

</html>