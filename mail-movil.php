<?php
	$namefrom = $_POST["fullname"];
	$emailfrom = $_POST["email"];
	$documentfrom = $_POST["document"];
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$fileName = $documentfrom.'-'.date('m-d-Y_hia').'.'.$imageFileType;
	$fileLocation =  'http://www.tourstap.com/uploads/'.$fileName;
	$target_file = $target_dir .$fileName;
	$uploadOk = 1;
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	
	// Check file size
	if ($_FILES["fileToUpload2"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.";
	        //Bluehost Example
			$emailto = 'subscriptions@tourstap.com';
			$toname = 'Tourstap Susbcription';
			
			$fromname = 'Tourstap Susbcription';
			$subject = 'Subscriber from Landing Page';
			$messagebody = 'Hola mi nombre es '. $namefrom .', mi documento es ' . $documentfrom . ' y mi correo es ' . $emailfrom . ', solicito que me puedan enviar la información. Mi selfie se encuentra en '. $fileLocation;
			$headers = 
				'Return-Path: ' . $emailfrom . "\r\n" . 
				'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
				'X-Priority: 3' . "\r\n" . 
				'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
				'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
				'MIME-Version: 1.0' . "\r\n" . 
				'Content-Transfer-Encoding: 8bit' . "\r\n" . 
				'Content-Type: text/plain; charset=UTF-8' . "\r\n";
			$params = '-f ' . $emailfrom;
			$test = mail($emailto, $subject, $messagebody, $headers, $params);
			// $test should be TRUE if the mail function is called correctly
			header("Location: bienvenido.html");
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}


?>