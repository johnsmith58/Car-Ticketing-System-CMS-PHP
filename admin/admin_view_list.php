<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="../css/admin.css"> -->
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <script src="../jquery/jquery.js"></script>
    <script src="../bootstrap/bootstrap.min.js"></script>
    
    <title>Document</title>
</head>
<body>
    <?php
        include("confs/config.php");
        $car_line = mysqli_query($conn, "SELECT * FROM car_line_list");
        $book_users =  mysqli_query($conn, "SELECT * FROM book_users");
        // $book_users = mysqli_query($conn, "SELECT book_users.*, car_line_list.car_line FORM LEFT JOIN car_line_list ON book_users.car_line_id = car_line_list.id");
    ?>
    <div class="admin">
    <table class="table table-striped">
            <tr>
                <th>Orders</th>
            </tr>
                <tr class="trd">
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Car line</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Seat Number</th>
                    <th>Due Date</th>
                    <th>Created Date</th>
                    
                </tr>
            <?php while($row2 = mysqli_fetch_assoc($book_users)): ?>
            <tr>
                <td><?php echo $row2['user_name'] ?></td>
                <td><?php echo $row2['email'] ?></td>
                <td><?php echo $row2['phone_number'] ?></td>
                <td><?php echo $row2['car_line_id'] ?></td>
                <td><?php echo $row2['from_destination'] ?></td>
                <td><?php echo $row2['to_destination'] ?></td>
                <td><?php echo $row2['seatNumber'] ?></td>
                <td><?php echo $row2['due_date'] ?></td>
                <td><?php echo $row2['created_at'] ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
         
    <br><br>
    <br>
    <br>
        

        <table class="table table-striped">
            <tr>
                <th>Car Line</th>
                <th>Created Date</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($car_line)): ?>
            <tr>
                <th><?php echo $row['car_line'] ?></th>
                <th><?php echo $row['created_at'] ?></th>
            </tr>
            <?php endwhile; ?>
        </table>
    <a href="car_line_new.php" class="btn btn-success">Add Car Line</a>
    <a href="logout.php" class="btn btn-danger">Log Out</a>
        </div> 
</body>
</html>