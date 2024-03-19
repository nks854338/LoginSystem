<?php
$login="0";
$error="0";
if(isset($_POST['s1'])){



//db_connection
$servername="localhost";
$username="root";
$password="";
$database="register";

$conn=new mysqli($servername, $username, $password, $database);

$username = $_POST["username"];
$password = $_POST["password"];
$sql = "SELECT * FROM `register` WHERE `username`='$username' AND `password`='$password'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if ($num == 1) {
    $error = "1";
    session_start();
    $_session['loggedin'] = true;
    $_session['username'] = $username;
    header("location: welcome.php");
} 
else {
    $login = "1";
}

$conn->close();

}


?>



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
            background-image: url(https://thumbs.dreamstime.com/b/education-concept-training-computer-keyboard-word-selected-focus-enter-button-background-d-render-37059472.jpg?w=1200);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 85vh;
        }

        h1 {
            color: rgb(0, 0, 0);
            font-size: 6vmin;
            font-weight: 700;
        }

        form {
            background-color: rgb(241, 115, 115);
            border-radius: 10px;
            opacity: 100%;
            width: 70vh;
            display: inline-grid;
            height: 65vh;
            padding: 5vmin;
            justify-content: center;
            align-items: center;
            opacity: 90%;
        }

        table input {
            height: 5vh;
            width: 35vh;
            border-radius: 10px;
            text-align: center;
        }

        tr,
        td,
        th {
            padding: 1vmin;
        }

        .login {
            display: inline;
            border-radius: 10px;
            background-color: black;
            color: #ffffff;
            text-align: center;
            height: 6vh;
            width: 30vh;
            font-size: 3vmin;
        }

        a {
            text-decoration: none;
            color: black;
            font-size: 2.5vmin;
            font-weight: 300;
        }




        @media(max-width:575px) {
            form {
                width: 38vh;
                height: 50vh;
            }

            table input {
                height: 4vh;
                width: 20vh;
            }

            .login {
                height: 4vh;
                width: 25vh;
            }
        }
    </style>
</head>

<body>
    <?php
       require_once('partials/_nav.php');
    ?>



    <?php
 if($login=="1"){
      echo '   <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>warning!</strong>Invalied login
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>  ';
};

    if($error=="1"){
        echo '   <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You logged in</button>
      </div>  ';
    };

?>


    <div class="container">

        <form action="login.php" method="post">
            <h1>USER LOGIN</h1>
            <table>
                <tr>
                    <th>
                        <i class="fa-solid fa-user" style="color:rgb(0, 0, 0);"></i> User id
                    </th>
                    <td>
                        <input type="text" placeholder="username" class="id username" name="username" required>
                    </td>
                </tr>
                <tr>
                    <th>
                        <i class="fa-solid fa-lock" style="color: rgb(2, 2, 2);"></i> Password

                    </th>
                    <td>
                        <input type="password" placeholder="password" class="password" name="password" required>

                    </td>
                </tr>
            </table>

            <p><input type="submit" class="login register" name="s1" value="Login"><br><br>
                <a href="register.php">Forgot password?</a>
            </p>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>