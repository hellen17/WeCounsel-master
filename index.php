

<?php

include('connect.php');

session_start();

if(!isset($_SESSION['user'])){
  header("location:Registration.html");
}

?>

<html>  
    <head>  
        <title>Chat</title>  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <!-- <script src="jquery-3.3.1.js"></script> -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/main.js"></script>
    </head>  
    <body>  
        <?php  ?>
        <div class="container">
   <br />
   
   <h3 align="center">Chat Forum</h3><br />
   <br />
   
   <div class="table-responsive">
    <h4 align="center">Online User</h4>
    <p align="right">Hi - <?php echo $_SESSION['user']; ?> - <a href="logout.php">Logout</a></p>
    <div id="user_details"></div>
     <div id="user_model_details"></div>
   </div>
 </div>
  </div>
</body>  
</html>  
