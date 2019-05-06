<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="services.css">
    </head>
    <body>
        <div class="welcome">
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-targe="navbar-collapse-main">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><img  src="logo.jpg" id="logo"></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse-main">
			<ul class="nav navbar-nav navbar-right ">
				<li><a href="Home.html">Home</a></li>
        <li><a href="Group.html">Join Our Community</a></li>
        <li><a href="Services.php" class="active">Connect</a></li>
        <?php toggleNav();?>
     

			</ul>
		</div>
	</div>
</nav>
</div>
    <?php
function toggleNav(){
if(isset($_SESSION['user'])) //check if the user is logged in
{
  show_logged_in_user_info(); //show the info reserved for logged in users
}
else
{
  //show error message that the user has to be logged in

echo '<script  type="text/javascript"> alert("Please log in first to view this page");window.location="Registration.html";
</script>';

}

}

//the logged in user info function
function show_logged_in_user_info()
{
  if(isset($_SESSION['user']))
  {
    echo $_SESSION['user'];
   
        echo "  <a href='logout.php' class='btn btn-danger' role='button'>Logout</a>";
   
  }

}
?>
    </body>
</html>