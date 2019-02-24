<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="jquery/jquery-ui.min.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
    <?php
        include("admin/confs/config.php");
    ?>

    <div class="container-fluid h-100 text-dark">
  <div class="row justify-content-center align-items-center h-100">
    <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
      <form action="book_users_add.php" method="post">
        <div class="form-group text-left">
        <label for="">Name</label>
          <input type="text" class="form-control" name="user_name" />
        </div>
        
        <div class="form-group text-left">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="form-grup text-left">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="text" id="phoneNumber" class="form-control" name="phone_number">
                </div>

                <div class="form-group text-left"><br>
                <label for="car_line_id">Car Line</label><br>
                    <select name="car_line_id" class="form-control custom-select custom-select-sm">
                        <option selected>-- Choose --</option>

                        <?php
                            $result = mysqli_query($conn, "SELECT id, car_line FROM car_line_list");
                            while($row = mysqli_fetch_assoc($result)):
                            ?>
                            <option value="<?php echo $row['id'] ?>">
                                <?php echo $row['car_line'] ?>
                            </option>
                        <?php endwhile; ?>

                    </select>
                </div>

                <div class="form-group">
                    <label for="destination">Destination</label><br>
                    <select name="from_destination" class="form-control custom-select custom-select-sm">
                        <option>From</option>
                        <option value="Yangon">Yangon</option>
                        <option value="Mandalay">Mandalay</option>
                        <option value="Nay Pyi Taw">Nay Pyi Taw</option>
                        <option value="Shan">Shan</option>
                        <option value="Bago">Bago</option>
                        <option value="Meikhtila">Meikhtila</option>
                        <option value="Bagan">Bagan</option>
                        <option value="Chaung Thar">Chaung Thar</option>
                        <option value="Nge Saung">Nge Saung</option>
                    </select>
                    <br><br>
                    <select name="to_destination" class="form-control custom-select custom-select-sm">
                        <option>To</option>
                        <option value="Yangon">Yangon</option>
                        <option value="Mandalay">Mandalay</option>
                        <option value="Nay Pyi Taw">Nay Pyi Taw</option>
                        <option value="Shan">Shan</option>
                        <option value="Bago">Bago</option>
                        <option value="Meikhtila">Meikhtila</option>
                        <option value="Bagan">Bagan</option>
                        <option value="Chaung Thar">Chaung Thar</option>
                        <option value="Nge Saung">Nge Saung</option>
                    </select>
                    

                </div>

                <div class="form-group">
                    <label for="due_date">Due Date</label><br>
                    <input type="text" id="datepicker" name="due_date" class="form-control">
                    
                </div>

                <div class="form-group">
                    <label for="seatNumber">Seats Number</label><br>
                        <select name="seatNumber" class="form-control custom-select custom-select-sm">
                            <option>Choose Seat Number</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                        </select>
                </div>
        <div class="form-group">
          <div class="container">
            <div class="row">
              
              <!-- <button class="col-6 btn btn-primary btn-sm float-right">Submit</button> -->
              <input type="submit" value="submit" class="col-6 btn btn-primary btn-sm float-right">
            </div>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.js"></script>
        <script src="jquery/jquery-ui.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- //  -->
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script>
            $(function () {
                $('#datepicker').datepicker();
            });
        </script>
    
</body>
</html>