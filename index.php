<?php 
include("config.php");
include('class/userClass.php');
$userClass = new userClass();

$errorMsgReg='';
$errorMsgLogin='';
$errorNameReg='';
$errorLastnameReg='';
$errorEmailReg='';
$errorUsernameReg='';
$errorPasswordReg='';
if (!empty($_POST['loginSubmit'])) 
{
$usernameEmail=$_POST['usernameEmail'];
$password=$_POST['password'];
 if(strlen(trim($usernameEmail))>1 && strlen(trim($password))>1 )
   {
    $uid=$userClass->userLogin($usernameEmail,$password);
    if($uid)
    {
        $url=BASE_URL.'home.php';
        header("Location: $url");
    }
    else
    {
        $errorMsgLogin="Please check login details.";
    }
   }
}

if (!empty($_POST['signupSubmit'])) 
{

	$username=$_POST['usernameReg'];
	$email=$_POST['emailReg'];
	$password=$_POST['passwordReg'];
    $name=$_POST['nameReg'];
    $lastname=$_POST['lastnameReg'];
	$username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
	$email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
	$password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

	if($username_check && $email_check && $password_check && strlen(trim($name))>0 && strlen(trim($lastname))>0) {
    $uid=$userClass->userRegistration($username,$password,$email,$name,$lastname);
        if($uid){
        	$url=BASE_URL.'home.php';
        	header("Location: $url");
        }else{
          $errorMsgReg="Username or Email already exits.";
        }
        
	}else{
        // $errorUsernameReg='Write username';
        // $errorEmailReg='write email';
        // $errorPasswordReg='write password minimum 6 character';
        // $errorNameReg='write name';
        // $errorLastnameReg='write lastname';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (!$username_check) {
            $errorUsernameReg='Write username minimum 3 characters';
          } else {
            $_POST["usernameReg"];
          }

          if (!$email_check) {
            $errorEmailReg='write email';
          } else {
            
          }

          if (!$password_check) {
            $errorPasswordReg='write password minimum 6 character';
          } else {
            
          }

          if (!strlen(trim($name))>0) {
            $errorNameReg='write name';
          } else {
            
          }

          if (!strlen(trim($lastname))>0) {
            $errorLastnameReg='write lastname';
          } else {
            
          }
        }
        // $check = array($username_check, $email_check, $password_check, strlen(trim($name))>0, strlen(trim($lastname))>0);
        // $tableau = array($errorUsernameReg, $errorEmailReg, $errorPasswordReg, $errorNameReg, $errorLastnameReg);

        // for ($i=0; $i < sizeof($check); $i++) { 
        //     if (!$check[$i]) {
        //         $tableau[$i]='fields not conform';
        //     }else{
                
        //     }
        // }
    }


}

?>
<!DOCTYPE html>
<html>
<head>
<title>Sign-Up/Login Form</title>
  <?php include 'css/css.html'; ?>
</head>
<style>
#container{width: 700px}
#login,#signup{width: 300px; border: 1px solid #d6d7da; padding: 0px 15px 15px 15px; border-radius: 5px;font-family: arial; line-height: 16px;color: #333333; font-size: 14px; background: #ffffff;rgba(200,200,200,0.7) 0 4px 10px -1px}
#login{float:left;}
#signup{float:right;}
h3{color:#365D98}
form label{font-weight: bold;}
form label, form input{display: block;margin-bottom: 5px;width: 90%}
form input{ border: solid 1px #666666;padding: 10px;border: solid 1px #BDC7D8; margin-bottom: 20px}
.button {
    background-color: #5fcf80 !important;
    border-color: #3ac162 !important;
    font-weight: bold;
    padding: 12px 15px;
    max-width: 100px;
    color: #ffffff;
}
.errorMsg{color: #cc0000;margin-bottom: 10px}
</style>
<body>
<div id="container">
<div id="login">
<h3>Login</h3>
<form method="post" action="" name="login">
<label>Username or Email</label>
<input type="text" name="usernameEmail" autocomplete="on" />
<label>Password</label>
<input type="password" name="password" autocomplete="off"/>
<div class="errorMsg"><?php echo $errorMsgLogin; ?></div>
<input type="submit" class="button" name="loginSubmit" value="Login">
</form>
</div>


<div id="signup">
<h3>Registration</h3>
<form method="post" action="" name="signup">
<label>Name</label>
<input type="text" name="nameReg" autocomplete="on" />
<div class="errorMsg"><?php echo $errorNameReg; ?></div>
<label>Lastname</label>
<input type="text" name="lastnameReg" autocomplete="on" />
<div class="errorMsg"><?php echo $errorLastnameReg; ?></div>
<label>Email</label>
<input type="text" name="emailReg" autocomplete="on" />
<div class="errorMsg"><?php echo $errorEmailReg; ?></div>
<label>Username</label>
<input type="text" name="usernameReg" autocomplete="on" />
<div class="errorMsg"><?php echo $errorUsernameReg; ?></div>
<label>Password</label>
<input type="password" name="passwordReg" autocomplete="off"/>
<div class="errorMsg"><?php echo $errorPasswordReg; ?></div>
<input type="submit" class="button" name="signupSubmit" value="Signup">
</form>
</div>

</div>

</body>
</html>
