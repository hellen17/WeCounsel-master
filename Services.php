<?php 
include("connect.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Services</title>
        <link rel="icon" type="image/jpg" href="logo.jpg" ><!-- favicon -->
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="services.css">
	<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css"> 
        
<!--        <script src="jquery-3.3.1.js"></script>-->
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="bootstrap.min.js"></script>
        <script src="js/main.js"></script>
</head>
<body>
<?php include './nav-bar.php'; ?>


<!-- <div class="alt">
  <SCRIPT LANGUAGE="JavaScript">

{
var name = prompt ('Select your prefered username','');
var color = prompt ('Color name','');
document.write("<CENTER><FONT FACE=ARIAdL,VERDANA COLOR="+color+" SIZE=5>Welcome To WeCounsel "+name+".</FONT><HR NOSHADE WIDTH=450></CENTER><P>")
}

</SCRIPT>

  
</div> -->


<div class="content" style="font-family: 'Amita'; font-size: 30px;">
				<h3>Select from our various list of helpers</h3>
			</div>


<?php
include 'Counselors.php';
// include 'fetch_user.php';

$obj = new Counselors();
$result = $obj->getCards($mysqli);

echo '<div class="container">';

while($row = $result->fetch_array()){
  
  // $fullName = $row['fullName'];
  $first_name  = $row['first_name'];
  $last_name  = $row['last_name'];
  $category = $row['category'];
  $email = $row['email'];

  $rating = $row['rating'];

  $gender = $row['gender'];
  $image = $row['image'];
  $description= $row['description'];

  $img = getImg($image, $gender);

  echo'
  <div class="gallery">
    <img src="images/'.$img.'" alt="Therapist" style="width:100%">
   <h1>'.$first_name.' '.$last_name.' </h1>
    <p class="title">'.$category.'</p>
    <p class="title">'.$description.'</p>
    
 <span class="fa fa-star checked"></span>
 <span class="fa fa-star checked"></span>
 <span class="fa fa-star checked"></span>
 <span class="fa fa-star"></span>
 <span class="fa fa-star"></span>
    <div style="margin: 24px 0;">
        <a href="#"><i class="fa fa-google"></i></a> 
        <a href="#"><i class="fa fa-twitter"></i></a>  
        <a href="#"><i class="fa fa-linkedin"></i></a>  
        <a href="#"><i class="fa fa-facebook"></i></a> 
     </div>

     <p><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['id'].'" data-tousername="'.$row['user'].'">Start Chat</button></p>
     <div id="user_model_details"></div>
    </div>
  ';

  }
  echo "</div>";


function getImg($image, $gender){

  $avatar;

  if(isset($image)){
      return $image;
  }else{


    if($gender == "Male"){
      $avatar = "avatar_male.png"; 
    }else{
      $avatar = "avatar_female.png";
    }

      return $avatar;

  }


}


?>



</div>

<!-- popup window -->
<div class="bts-popup" role="alert">
    <div class="bts-popup-container">
        <p>Click here to join our public discussion group.</p>
        <div class="bts-popup-button">
           <a href="Group.html">CLICK</a>
         </div>
        <a href="#0" class="bts-popup-close img-replace">Close</a>
    </div>
</div>

<script>
  jQuery(document).ready(function($){
  
  window.onload = function (){
    $(".bts-popup").delay(15000).addClass('is-visible');
  }
  
  //open popup
  $('.bts-popup-trigger').on('click', function(event){
    event.preventDefault();
    $('.bts-popup').addClass('is-visible');
  });
  
  //close popup
  $('.bts-popup').on('click', function(event){
    if( $(event.target).is('.bts-popup-close') || $(event.target).is('.bts-popup') ) {
      event.preventDefault();
      $(this).removeClass('is-visible');
    }
  });
  //close popup when clicking the esc keyboard button
  $(document).keyup(function(event){
      if(event.which=='27'){
        $('.bts-popup').removeClass('is-visible');
      }
    });
});
</script>
</body>
</html>