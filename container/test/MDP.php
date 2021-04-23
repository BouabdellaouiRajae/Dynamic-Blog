<?php
session_start();
?>
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
  <title>Forgotten password</title>
</head>

<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    
  <form class="container" method="POST" action="MDP.php" action="ChangeMDP.php">
    <div class="form-group">
      
      <input type="text" class="form-control" id="Useremail" name="Useremail" placeholder="Enter your E-mail">
    </div>
    <button type="submit" class="btn btn-primary button">Send</button>
    <!--Back to the home page-->
    <div id="formFooter">
      <a class="underlineHover" href="../index.html">Home</a>
        <!--Sign in-->
     <div id="formFooter">
      <a class="underlineHover" href="./Signin.php">Sign in</a>
    </div>
    </div>
  </form>
  </div>
</div>
  <?php
  $conn = new mysqli("localhost", "root", "", "signup");
  if (isset($_POST['Useremail'])) {
    $email = $_POST['Useremail'];
    $_SESSION["Useremail"] = $email;
    $sql = "SELECT email, MDP FROM signup WHERE email ='$email'";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) !== 0) {
      header("Location: ChangeMDP.PHP");
    } else {
      echo "this email doesnt exist " ;
    }
    $conn->close();
  }
  ?>
  
</body>

</html>