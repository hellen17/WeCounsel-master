
<!DOCTYPE html>
<html>
<head>
 <title>My Profile</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="counsellor.css">
<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Mali' rel='stylesheet'>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<style>
  h3{
     font-family: 'Mali';
     font-size: 22px;
     font-weight: bolder;
  }
  li{
    font-size: 18px;
  }
</style>
</head>
<body>
<div class="login">

<?php
  //My php class 
 


  include 'Counselors.php';
  include 'connect.php';
  session_start();
  $user = $_SESSION['user'];

  $get = new Counselors();
  $row = $get->getDetails($mysqli, $user);

   if(isset($_SESSION['user']))
  {

    echo "<h3>Welcome </h3>".$_SESSION['user'];
  
    echo "  <a href='logout.php' class='btn btn-danger' role='button'>Logout</a>";
  
  }
?>

<a style="padding-left: 20px;" href="Group.html" class='btn btn-info' role='button'>Join Discussion Forum</a>

<div  class="container emp-profile">
            <!-- <form method="post"> -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                          <?php
                            if(isset($row['image'])){
                              echo "<img src='images/".$row['image']."'/>";
                              echo  "Change Photo";
                            }else{
                              echo "<img src='images/avatar.png'>";
                              echo  "Add photo";
                            }
                          ?>
                        </div>
                    </div>
                    <script>
                      
                    </script>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?= $row['first_name']." ".$row['last_name']; ?>
                                    </h5>
                                    <h6>
                                  <?= $row['category']; ?>
                                    </h6>
                            <p class="proile-rating">RATINGS : <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Messages</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="profile-edit-btn" name="btnAddMore"> Edit Profile</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                      <div class="mt-0 mb-0">
                          <form action="counselor-edit.php" method="post" enctype="multipart/form-data">
                            <input class="mb-3" type="file" name="filetoupload" id='filetoupload'>
                            <input type="hidden" name="action" value="uploadImage">
                            <button type="submit" class="btn mb-3 btn-success">Upload</button>
                          </form>
                      </div>
                        <div class="profile-work">
                          <br>
                            <h4>Description</h4>
                            <h6> <?= $row['description']; ?></h6>
                            
                            <h4>Categories</h4>
                            <ul>
                              <li>Breakup</li>
                              <li>Bullying</li>
                              <li>Family Stress</li>
                              <li>Loneliness</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?= $row['id']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p contenteditable="true"><?= $row['first_name']." ".$row['last_name']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p contenteditable="true" data-old_value="<?= $row['email']; ?>" onBlur="saveInlineEdit(this,'employee_name','<?php echo $row["id"]; ?>')" onClick="highlightEdit(this);"><?php echo $row["email"]; ?></p>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Category</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?= $row['category']; ?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      
                    <div class="table-responsive">
                        <h4 align="center">Online User</h4>
                        <p align="right">Hi - <?php echo $_SESSION['user']; ?> - <a href="logout.php">Logout</a></p>
                        <div id="user_details"></div>
                         <div id="user_model_details"></div>
                       </div>
                     </div>
                      </div>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!--</form>-->           
        </div>

         </body>  
</html> 
        <script>
        function saveInlineEdit(editableObj,column,id) {
// no change change made then return false
if($(editableObj).attr('data-old_value') === editableObj.innerHTML)
return false;
// send ajax to update value
$(editableObj).css("background","#FFF url(loader.gif) no-repeat right");
$.ajax({
url: "saveInlineEdit.php",
type: "POST",
dataType: "json",
data:'column='+column+'&value='+editableObj.innerHTML+'&id='+id,
success: function(response) {
// set updated value as old value
$(editableObj).attr('data-old_value',editableObj.innerHTML);
$(editableObj).css("background","#FDFDFD");
},
error: function () {
console.log("errr");
}
});
}
        </script>

