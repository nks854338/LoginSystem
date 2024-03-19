<?php
if (isset($_GET["sno"])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "c_register";

    $result = $_GET["sno"];
    echo"$result.<br>";
    $conn = new mysqli($servername, $username, $password, $database);
    $sql = "delete from c_register where sno='$result'";
    $res = mysqli_query($conn, $sql) or die("error in query" . mysqli_error($conn));
    $cnt = mysqli_affected_rows($conn);
    echo "$cnt.<br>";
    mysqli_close($conn);
    if ($cnt >= 1) {
        header("location:showData.php");
    } else {
        echo "try again";
    }
}
?>