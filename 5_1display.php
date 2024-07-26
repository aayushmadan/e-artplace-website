<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontend.css">
    <title>Records</title>
</head>
<body>
<div class="clientf">
    <h2 style="text-align: center; font-size: 35px; color: white;    ">- Client Feedbacks -</h2>
</div>

<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM userfeedback";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

//echo $total;

if($total > 0){
  
    echo "
    <table>
      <tr>
        <th>FIRST NAME</th>
        <th>EMAIL</th>
        <th>FEEDBACK</th>
        <th>OPERATION</th>
      </tr>
    ";

  while($result = mysqli_fetch_assoc($data)){
    echo"
      <tr>
        <td>".$result['fullname']."</td>
        <td>".$result['email']."</td>
        <td>".$result['feedback']."</td>
        <td><a href='5_2delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick = 'return checkdelete()'></a></td>
      </tr>
    ";
  }
}
else{
  echo "No records found";
}

?>
</table>

<script>
  function checkdelete(){
    return Confirm('Are you sure you want to delete this record?');
  }
</script>

</body>
</html>