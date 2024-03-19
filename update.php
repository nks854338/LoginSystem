<?php

$result = $_GET["sno"];
$conn = new mysqli($servername, $name, $password, $database);
$sql = "select * from register where sno='$result'";   //query
$res = mysqli_query($conn, $sql) or die("error in query" . mysqli_error($conn));
$x = mysqli_fetch_array($res);
?>



<input type="text" value="<?php echo $x[2]; ?>" >



<?php
if (isset($_POST["s1"])) {

    $servername = "localhost";
    $name = "root";
    $password = "";
    $database = "c_register";

    $conn = new mysqli($servername, $name, $password, $database);

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $password = $_POST["password"];

    $conn = new mysqli($servername, $name, $password, $database);
    $sql = "update register set name='$name',email='$email',phone='$phone',address='$address',password='$password' where sno='$result'";
    mysqli_query($conn, $sql) or die("error in query" . mysqli_error($conn));
    header("location:showData.php");
} 

$conn = new mysqli($servername, $name, $password, $database);


if (isset($_GET["sno"])) {
$res = mysqli_query($conn, $sql) or die("error in query" . mysqli_error($conn));   //connected the database and query together mysqli_close($conn);   // closing the database connection
$x = mysqli_fetch_array($res);
}




if (isset($_POST["s1"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $conn = new mysqli($servername, $name, $password, $database) or die("error in connection" . mysqli_connect_error());
    $sql = "update register set name='$name',email='$email',phone='$phone',address='$address',password='$password' where sno='$result'";
    mysqli_query($conn, $sql) or die("error in query" . mysqli_error($conn));   
    header("location:showData.php");  
} ?>




<input type="text" value="<?php echo $x[2]; ?>">




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Register form</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            background-color: rgb(0, 0, 0);
            background-image: url("https://cdn.pixabay.com/photo/2015/05/26/23/52/technology-785742_1280.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        h1 {
            font-size: 5.5vmin;
            margin-top: 2vmin;
            font-weight: 600;
            color: black;
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 87.5vh;
        }

        form {
            height: 80vh;
            display: inline-grid;
            justify-content: center;
            align-items: center;
            opacity: 90%;
            background-color: rgb(40, 74, 142);
            align-items: center;
            color: black;
            border-radius: 20px;
        }

        tr,
        td,
        th {
            padding: 1vmin;
        }

        table {
            margin: 5vmin;
        }

        table input {
            border-radius: 10px;
            border: none;
            text-align: center;
            height: 5vmin;
            width: 40vmin;
            border: black solid 2px;
            background-color: #ffffff;
        }

        .register {
            border-radius: 10px;
            padding: 1.7vmin 9vmin;
            background-color: black;
            color: #ffffff;
        }

        p {
            text-align: center;
            margin-bottom: 5vmin;
        }
    </style>
</head>

<body>
    <?php require_once ('partials/_nav.php') ?>

    <?php
    if ($error == "1") {
        echo '   <div class="alert alert-danger alert-dismissi show" role="alert">
    <strong>warning!</strong> Password does not matched
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>  ';
    }
    ;

    if ($show == "1") {
        echo '   <div class="alert alert-success alert-dismissi show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>  ';
    }
    ;

    ?>
    <div class="container">

        <form action="register.php" method="post" enctype="multipart/form-data">
            <h1>Register</h1>
            <table>
                <tr>
                    <th>
                        <i class="fa-solid fa-user" style="color:rgb(0, 0, 0);"></i> name :
                    </th>
                    <td>
                        <input type="text" placeholder="name" class="name" required name="name">
                    </td>
                </tr>
                <tr>
                    <th>
                        <i class="fa-solid fa-lock" style="color: rgb(2, 2, 2);"></i> Email :
                    </th>
                    <td>
                        <input type="email" placeholder="email" class="email" required name="email">
                    </td>
                </tr>
                <tr>
                    <th>
                        <i class="fa-solid fa-lock" style="color: rgb(2, 2, 2);"></i> Phone :
                    </th>
                    <td>
                        <input type="phone" placeholder="phone" class="phone" required name="phone">
                    </td>
                </tr>
                <tr>
                    <th>
                        <i class="fa-solid fa-lock" style="color: rgb(2, 2, 2);"></i> Address :
                    </th>
                    <td>
                        <input type="text" placeholder="address" class="address" required name="address">
                    </td>
                </tr>
                <tr>
                    <th>
                        <i class="fa-solid fa-user" style="color:rgb(0, 0, 0);"></i> Upload picture:
                    </th>
                    <td>
                        <input type="file" name="image" class="image" />
                    </td>
                </tr>
            </table>
            <p><input type="submit" name="s1" class="register" value="register"></p>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>

























<!-- <?php

$conn = new mysqli($servername, $name, $password, $database) or die("error in connection" . mysqli_connect_error());


if (isset($_GET["rid"])) 
$res = mysqli_query($conn, $sql) or die("error in query" . mysqli_error($conn));   //connected the database and query together mysqli_close($conn);   // closing the database connection
$x = mysqli_fetch_array($res);




if (isset($_POST["s1"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $conn = new mysqli($servername, $name, $password, $database) or die("error in connection" . mysqli_connect_error());
    $sql = "update register set name='$name',email='$email',phone='$phone',address='$address',password='$password' where sno='$result'";
    mysqli_query($conn, $sql) or die("error in query" . mysqli_error($conn));   
    header("location:showData.php");  
} ?>




<input type="text" value="<?php echo $x[2]; ?>">



















<!-- //write this code on the top of the file
<?php
$result = $_GET["sno"];
$conn = new mysqli($servername, $name, $password, $database);
$sql = "select * from register where sno='$result'";   //query
$res = mysqli_query($conn, $sql) or die("error in query" . mysqli_error($conn));
$x = mysqli_fetch_array($res);
?>



<input type="text" value="<?php echo $x[2]; ?>" >



<?php
if (isset($_POST["s1"])) {

    $servername = "localhost";
    $name = "root";
    $password = "";
    $database = "c_register";

    $conn = new mysqli($servername, $name, $password, $database);

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $password = $_POST["password"];

    $conn = new mysqli($servername, $name, $password, $database);
    $sql = "update register set name='$name',email='$email',phone='$phone',address='$address',password='$password' where sno='$result'";
    mysqli_query($conn, $sql) or die("error in query" . mysqli_error($conn));
    header("location:showData.php");
} ?> --> -->