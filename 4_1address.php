<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="frontend.css?ts=<?=time()?>"/>
    <title>INXANE - ARTPLACE</title>
</head>

<body>
    <img class="logo" src="inxane logo.png" alt="" />
    <div class="topnav">
        <a href="1home.html">Home</a>
        <a href="2artworks.html">Artworks</a>
        <a href="3costs.html">Costs</a>
        <a class="active" href="4order.php">Order</a>
        <a class="active2" href="5feedback.php">Feedback</a>
        
    </div>

    <hr />
    <br /><br /><br />

    <div class="box1">
        <h1>Shipping Details</h1>
        <hr>
        <br>
        <br>
        <center>
            <div class="inputbox">
                <div class="row">
                    <div class="col-50">
                    <form action="#" method="POST">
                        <label class="label" for="fullname">Full Name:</label>
                        <br><br>
                        <input class="textbox" type="text" name="fullname" id="fullname" &nbsp placeholder=" Full Name" required>
                        <br>
                        <br>
                        <br>
                        <label class="label" for="email"> Email:</label>
                        <br><br>
                        <input class="textbox" type="email" name="email" id="email" &nbsp placeholder=" Email" required>
                        <br>
                        <br>
                        <br>
                        <label class="label" for="contactno">Contact Number:</label>
                        <br><br>
                        <input class="textbox" type="text" name="contactno" id="contactno" &nbsp placeholder=" Contact Number" required>
                        <br>
                        <br>
                        <br>
                    </div>
                    <div class="col-50">
                        <label class="label" for="houseno"> House Number:</label>
                        <br><br>
                        <input class="textbox" type="text" name="houseno" id="houseno" &nbsp placeholder=" House Number" required>
                        <br>
                        <br>
                        <br>
                        <label class="label" for="apartment"> Apartment/Suite/Other:</label>
                        <br><br>
                        <input class="textbox" type="text" name="apartment" id="apartment" &nbsp placeholder=" Apartment/Suite/Other" required>
                        <br>
                        <br>
                        <br>
                        <label class="label" for="city"> City:</label>
                        <br><br>
                        <input class="textbox" type="text" name="city" id="city" &nbsp placeholder=" City" required>
                        <br>
                        <br>
                        <br>
                        <label class="label" for="state"> State/Province/Region:</label>
                        <br><br>
                        <input class="textbox" type="text" name="state" id="state" &nbsp placeholder=" State/Province/Region" required>
                        <br>
                        <br>
                        <br>
                        </div>
                        <center>
                        <button class="continue" type="submit" name="continue">Continue</button>
                        </center>
                    </form>
                    <br>
                </div>
            </div>
            <br><br><br>
    </div>
    </center>
    <br /><br /><br />

    <h1>CONTACT FOR ENQUIRY</h1>
    <hr />
    <br /><br /><br /><br />
    <div class="orderlinks">
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a class="email" target="_blank"
            href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJvlHSZnfghtQLtrZSSnDccSdFXNHjWrpgDPjptHtxWkwLRNnXFGLWBQffXDktcwjbGmrXq">EMAIL</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="instagram" target="_blank" href="https://www.instagram.com/inxane.png/">INSTAGRAM</a>
        <br /><br /><br /><br />
    </div>
    </div>

    <script>
        
    </script>

    <?php
if(isset($_POST['submit']))
{
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $contactno = $_POST['contactno'];
    $houseno = $_POST['houseno'];
    $apartment = $_POST['apartment'];
    $city = $_POST['city'];
    $state = $_POST['state'];

    $query = "INSERT INTO orderdetails (fullname,email,contactno,houseno,apartment,city,state) VALUES('$fullname','$email','$contactno','$houseno','$apartment','$city','$state')";
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