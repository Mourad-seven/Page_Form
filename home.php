 <?php
include('config.php');
include('session.php');
$userDetails=$userClass->userDetails($session_uid);
// print_r($userDetails);
?>
<!DOCTYPE html>
<html>
<head>
<style>
</style>
<?php include 'css/css.html'; ?>
</head>
<body>
  <div class="form">

          <h1>Welcome</h1>
          
          <p>
          
     
          <!-- // Display message about account verification link only once -->
          <img src=<?php echo $userDetails->profile_pic; ?> alt="" width="400px" >
		<h1>Welcome <?php echo $userDetails->name . " " . $userDetails->lastname . " " . "AKA " . " " . $userDetails->username; ?></h1>
          
          ?>
          </p>
          
          
          
          <!-- // Keep reminding the user this account is not active, until they activate -->
          
          ?>
          
          <h2><?php //display first name and last name ?></h2>
          <p><? //display email ?></p>
          
          <a href="<?php echo BASE_URL; ?>logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>

    </div>
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>
</html>
