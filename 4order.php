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
    <h1>Print Order</h1>
    <hr>
    <br>
    <br>
    <center>
      <div class="inputbox">
        <form action="4_1address.php" method="POST">
          <div class="container1">
            <input class="choosefile" type="file" id="inputImage" name="image" accept="image/*" />
            <img id="previewImage" />
            <p id="errorMsg"></p>
          </div>
          <br />
          <br />
          <select id="size" name="size1">
            <option value="0">Choose Size</option>
            <option value="550">A1 (Rs.550)</option>
            <option value="450">A2 (Rs.450)</option>
            <option value="350">A3 (Rs.350)</option>
            <option value="250">A4 (Rs.250)</option>
          </select>
          <br /><br />
          <select id="quant" name="quant">
            <option value="0">Quantity</option>
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
          </select>
          <br />
          <br />
          <button id="calc" onclick="multiplyBy()" class="submitbtn" type="button" name="calc" disabled>CALCULATE</button>
          <p id="result"></p>
          <a href="4_1address.html">
          <button class="proceedsubmitbtn" type="submit" name="submit" >Proceed</button>
          </a>
        </form>
      </div>
    </center>
    <br /><br /><br />

      <h1>CONTACT FOR ENQUIRY</h1>
      <hr />
      <br /><br /><br /><br />
      <div class="orderlinks">
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a
          class="email"
          target="_blank"
          href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJvlHSZnfghtQLtrZSSnDccSdFXNHjWrpgDPjptHtxWkwLRNnXFGLWBQffXDktcwjbGmrXq"
          >EMAIL</a
        >
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a
          class="instagram"
          target="_blank"
          href="https://www.instagram.com/inxane.png/"
          >INSTAGRAM</a
        >
        <br /><br /><br /><br />
      </div>
    </div>

    <script>
      function previewImage(event) { 
        const reader = new FileReader();   // The FileReader() constructor returns an object
        reader.onload = function () {      // onload: this event is triggered each time the reading operation is successfully completed.
          const element = document.getElementById("previewImage"); 
          element.src = reader.result;
        };
        reader.onerror = function () {    //onerror: this event is triggered each time the reading operation encounters an error.
          const element = document.getElementById("errorMsg");
          element.value = "Couldn't load the image.";
        };
        reader.readAsDataURL(event.target.files[0]); 
        
        //readAsDataURL(): this method reads the contents of the specified file and returns a URL that represents file data.
        // the uploaded files cam be viewed by event.target.file[0]
      }

      const input = document.getElementById("inputImage");
      input.addEventListener("change", (event) => {
        previewImage(event);
      });

      function multiplyBy() {
        num1 = document.getElementById("size").value;
        num2 = document.getElementById("quant").value;
        
        if (size.value == 0) {
        alert("Please choose a size/quantity!");
      }
      else if (quant.value == 0){
        alert("Please choose size/quantity!")
      }
      else{
        document.getElementById("result").innerHTML = "Total Amount : "+ num1 * num2;
      }
    }

    let clickButton = document.getElementById("calc");
      let fileInput = document.getElementById("inputImage");
      fileInput.addEventListener("change", function () {
         
         // check if the file is selected or not
         if (fileInput.files.length == 0) {
            clickButton.disabled = true;
            clickButton.opacity = 0.3;
         } else {
            clickButton.disabled = false;
            clickButton.style.opacity = 1;
         }
      });
      
    </script>

<?php
if(isset($_POST['submit']))
{
    $image = $_POST['image'];
    $size = $_POST['size1'];
    $quant = $_POST['quant'];

    $query = "INSERT INTO orderdetails (image,size1,quant) VALUES('$image','$size','$quant')";
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
