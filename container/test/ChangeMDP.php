<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Latest compiled and minified CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="./logging.css">
    <title>Forgotten password</title>
</head>

<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <form class="container" method="POST" action="ChangeMDP.php">
        <div class="form-group">
           
            <input type="Password" class="form-control" id="NewPassword" name="NewPassword" placeholder="Enter The new Password">
        </div>
        <button type="submit" class="btn btn-primary button">Submit</button>
    </form>
    <!--Back to the home page-->
    <div id="formFooter">
      <a class="underlineHover" href="../index.php">Home</a>
    </div>
  </div>
</div>
    <?php

    if (isset($_SESSION["Useremail"], $_POST['NewPassword'])) {
        $emailformdp = $_SESSION["Useremail"];
        $NewPassword = $_POST['NewPassword'];
        $conn = new mysqli("localhost", "root", "", "signup");
        $sql = "UPDATE signup SET MDP='$NewPassword' WHERE email= '$emailformdp'";
        $result = $conn->query($sql);
        if ($conn->query($sql)) {
            echo "Your password was succesfully changed ";

            $conn->close();
        } else {
            echo "Walo";
        }
    }
    ?>
    
</body>

</html>