<?php
    include("admin/confs/config.php");
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $car_line_id = $_POST['car_line_id'];
    $from_destination = $_POST['from_destination'];
    $to_destination = $_POST['to_destination'];
    $seatNumber = $_POST['seatNumber'];
    $due_date = $_POST['due_date'];

    $sql = "INSERT INTO book_users ( user_name, email, phone_number, car_line_id, from_destination, to_destination, seatNumber, due_date, created_at, updated_at) VALUES ( '$user_name','$email', '$phone_number', '$car_line_id', '$from_destination', '$to_destination','$seatNumber', '$due_date', now(), now() )";
    mysqli_query($conn, $sql);
    header("location: book_users_order.php");
    // echo $sql;

?>