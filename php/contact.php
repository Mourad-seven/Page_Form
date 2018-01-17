<?php
	$array = array('firstname' => '', 'name' => '', 'email' => '', 'phone' => '', 'message' => '', 'firstnameError' => '', 'nameError' => '', 'emailError' => '', 'phoneError' => '', 'messageError' => '', 'isSuccess' => false);

	$emailTo = 'john@apprendre-a-coder.com';

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$array['firstname'] = verifyInput($_POST['firstname']);
		$array['name'] = verifyInput($_POST['name']);
		$array['email'] = verifyInput($_POST['email']);
		$array['phone'] = verifyInput($_POST['phone']);
		$array['message'] = verifyInput($_POST['message']);
		$array['isSuccess'] = true;
		$emailText = '';

		if(empty($array['firstname'])){
			$array['firstnameError'] = 'You must fill your first name...';
			$array['isSuccess'] = false;
		} else{
			$emailText .= "First name: {$array["firstname"]}\n";
		}

		if(empty($array['name'])){
			$array['nameError'] = 'You must fill your last name...';
			$array['isSuccess'] = false;
		} else{
			$emailText .= "Name: {$array["name"]}\n";
		}

		if(!isEmail($array['email'])){
			$array['emailError'] = 'Your email address is not valid...';
			$array['isSuccess'] = false;
		} else{
			$emailText .= "Email: {$array["email"]}\n";
		}

		if(!isPhone($array['phone'])){
			$array['phoneError'] = 'Type only numbers or spaces please...';
			$array['isSuccess'] = false;
		} else{
			$emailText .= "Phone: {$array["phone"]}\n";
		}

		if(empty($array['message'])){
			$array['messageError'] = 'You must fill your message...';
			$array['isSuccess'] = false;
		} else{
			$emailText .= "Message: {$array["message"]}\n";
		}

		if($array['isSuccess']){
			$headers = "From: {$array["firstname"]} {$array["name"]} <{$array["email"]}>\r\nReply-To: {$array["email"]}";
			mail($emailTo, 'A message from the contact form', $emailText, $headers);
		}
		echo json_encode($array);
	}

	function isPhone($var){
		return preg_match('/^[0-9 ]*$/', $var);
	}

	function isEmail($var){
		return filter_var($var, FILTER_VALIDATE_EMAIL);
	}

	function verifyInput($var){
		$var = trim($var);
		$var = stripslashes($var);
		$var = htmlspecialchars($var);

		return $var;
	}
?>