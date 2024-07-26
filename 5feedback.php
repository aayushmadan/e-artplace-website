<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontend.css?ts=<?=time()?>">
    <title>INXANE - ARTPLACE</title>
</head>
<body>
<img class="logo" src="inxane logo.png" alt="">
    <div class="topnav">
        <a href="1home.html">Home</a>
        <a href="2artworks.html">Artworks</a>
        <a href="3costs.html">Costs</a>
        <a href="4order.php">Order</a>
        <a class="active" href="5feedback.php">Feedback</a>
        
      </div>
      <hr>
      <br><br><br>
      <center>
    <div class="inputbox">
        <form action="#" method="POST">
        <input class="textbox" type="text" name="fullname" id="fullname" &nbsp placeholder=" Full Name" required>
        <br>
        <br>
        <input class="textbox" type="email" name="email" id="email" &nbsp placeholder=" Email" required>
        <br>
        <br>
        <textarea class="feedback" type="text" name="feedback" placeholder=" FEEDBACK" cols="30" rows="10" required></textarea>
        <br>
        <br>
        <button class="submitbtn" type="submit" name="submit">Submit</button>
        </form>
    </div>
    </center>

    <?php
    if(isset($_POST['submit']))
    {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $feedback = $_POST['feedback'];

        $query = "INSERT INTO userfeedback (fullname,email,feedback) VALUES('$fullname','$email','$feedback')";
        $data = mysqli_query($conn,$query);

        if($data){
            echo "Data inserted into database";
        }
        else{
            echo "Failed";
        }
    }
    ?>
</body>
</html>