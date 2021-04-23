<?php
session_start()
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
  <title>LOGOUT</title>
</head>

<body>
  <?php
  if (isset($_SESSION["LoginUsername"])) {
    $LoginUsername = $_SESSION["LoginUsername"];
  }

  ?>
  <form class="container">
    <div class="form-group">
      <h2>LOGOUT</h2>
      
      <a href="SessionDestroy.php">Log Out</a>
    </div>
  </form>



</body>

</html>