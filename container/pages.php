<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="./logging.css">

  <title>Sign-Up</title>

</head>

<body>

<div id="post_area">
<?php


$id= $_GET['id'];
$conn = mysqli_connect("localhost", "root", "","signup") ;
$query= mysqli_query( $conn ,"SELECT * from posts where id ='$id'");

while($row=mysqli_fetch_array($query))
{
    $id=$row['id'];
    $title=$row["title"];
    $author=$row["author"];
    $image=$row["image"];
    $content= substr($row["content"],0,200);
    $date=$row["date"];


?>

<div class=" col-md-4" style="text-align: center;">
<div class="card" style="width: 50rem;">
<img class="card-img-top" style="height:15rem;" src="../img/"<?php echo "$image"; ?>" alt="Card image ">
<span>Published on : &nbsp; &nbsp; <?php echo "$date"; ?></span>
<span>Published by : &nbsp; &nbsp; <?php echo "$author"; ?></span>

<div class="card-body">
<h5 class="card-title"><?php  echo "$title"; ?></h5>
<p class="card-text"><?php  echo "$content"?></p>

</div>
</div>
</div>
<?php

}
?>

</body>

</html>