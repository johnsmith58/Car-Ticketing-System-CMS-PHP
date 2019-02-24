
<?php
    include("confs/config.php");
    $car_line = $_POST['car_line'];
    $sql = "INSERT INTO car_line_list (car_line, created_at, updated_at) VALUES ('$car_line', now(), now())";
    mysqli_query($conn, $sql);
    header("location: index.php");
?>