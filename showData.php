<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "c_register";

$conn = new mysqli($servername, $username, $password, $database);

$sql = "select * from c_register";

$result = mysqli_query($conn, $sql);

$cnt = mysqli_affected_rows($conn);
if ($cnt == 0) {
    echo "No Member Found";
} else {
    echo "<div class=con><table width='100%' cellspacing='0'>
  <tr bgcolor='#FEF7E9'>
  <th>Name</th>
  <th>Email</th>
  <th>Phone No</th>
  <th>Address</th>
  <th>Edit</th>
  <th>Delete</th>
  </tr>";
    while ($x = mysqli_fetch_array($result)) {
        echo "<tr bgcolor='#FEFBBA'>
    <td>$x[1]</td>
    <td>$x[2]</td>
    <td>$x[3]</td>
    <td>$x[4]</td>
    <td><a href='update.php?sno=$x[0]'><img src='edit.png' width='30px'></a></td>
    <td><a href='delete.php?sno=$x[0]'><img src='delete.png' width='30px'></a></td>
    </tr>
    ";
    }
    echo "</table></div>";
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
         body {
            background-color: rgb(0, 0, 0);
            background-image: url("library.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .con {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        table {
            height: 70vh;
            width: 100vh;
            color: #ffffff;
            font-size: 3vmin;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        tr,
        th,
        td {
            text-align: center;
            background-color: burlywood;
            color: black;
            padding: 2.3vh;
            border: solid 1px;
        }

        </style>
    <title>ShowData</title>
</head>
<body>
    
</body>
</html>