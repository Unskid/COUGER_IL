<?php
$name_error = "";
$username = "";
$password = "";
if (isset($_POST["auth_email"])){
$Susername = htmlspecialchars($_POST["auth_email"],ENT_IGNORE);
$Spassword = htmlspecialchars($_POST["auth_password"],ENT_IGNORE);
$htmlpassword = $Spassword;
$host = "localhost";
$user = "cougarco_alon";
$pass = "A1L2O3N4!@";
$Sdbname = "cougarco_url1";
try{
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
    if (!ini_get('register_globals')) {
    $superglobals = array($_SERVER, $_ENV,
        $_FILES, $_COOKIE, $_POST, $_GET);
    if (isset($_SESSION)) {
        array_unshift($superglobals, $_SESSION);
    }
    foreach ($superglobals as $superglobal) {
        extract($superglobal, EXTR_SKIP);
    }
}
    $dsn = 'mysql:host='.$host.';dbname='.$Sdbname;
    $db = new PDO($dsn,$user,$pass);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);	
	 //echo "connected";
	$Spassword = md5($Spassword);
	/*$signinQuary = "select email,passwords,is_premium from users where 'email' = '$Susername' and 'passwords' = '$Spassword'";
	$antisqli = $db->prepare($signinQuary);
	$antisqli->execute();*/
	//echo $antisqli -> rowCount();
	//echo "username - ".$Susername." password-".$Spassword; 
	$cursor = $db-> query("select email,passwords,is_premium,gender from `users`");
	$cursor -> setFetchMode(PDO::FETCH_ASSOC);
	//echo strcmp(implode($cursor->fetch()),$Susername.$Spassword);
	//echo "fetching";
	while ($row = $cursor->fetch()){
	    //echo $row["email"].$row["passwords"];
	    //echo var_dump($row);
	    //echo $Susername == $row["email"];
	    //echo $Spassword == $row[""];
	    if ($Susername == $row["email"] && $Spassword == $row["passwords"]){
	        $name_error= "התחברת בהצלחה";
	            //d0d02e6eb7f00fba332e877a75fdda60 - true
	            //b46f550143027819e98e18d88115fde6 - false
            //setcookie("is_premium",$row["is_premium"],time()+(86400*30),"/",true,true);
            $_COOKIE["is_premium"] = $row["is_premium"];
		    $_SESSION["is_premium"] = $row["is_premium"];
		   
		    if ($_SESSION["is_premium"] == "d0d02e6eb7f00fba332e877a75fdda60"){
		        if ($row["gender"] == "זכר"){
    		        echo "<script>window.location.href='premiumpanel.php'</script>";
    		        exit();
		        }
		        else if ($row["gender"] == "נקבה"){
		             echo "<script>window.location.href='premiumpanel1.php'</script>";
		             exit();
		        }
		    }
		    else if ($_SESSION["is_premium"] =="b46f550143027819e98e18d88115fde6"){
		        if ($row["gender"] == "זכר"){
		            echo "<script>window.location.href='aar.php'</script>";
		        }
		        else{
		            echo "<script>window.location.href='aar1.php'</script>";
		        }
		    }
	        //break;
	    }
	    else {
	        $name_error="שם משתמש או סיסמא לא נכונים";
	    }
	}
	//echo var_dump($cursor->fetch());
/*	if ($antisqli->rowCount() == 1){
		$name_error = "ברוך הבא";
		$db_premiunCheck = $db -> prepare("select is_premium from `users` where 'email'=$Susername");
		$db_premiunCheck -> execute();
		$db_premiunCheck -> setFetchMode(PDO::FETCH_ASSOC);
		while ($row = $db_premiunCheck -> fetch()){
			$_SESSION["is_premium"] = $row["is_premium"];
			echo $row["is_premium"];
		}
	}
	else if ($antisqli -> rowCount() > 1){
		$name_error = "ממליץ לדאבג";
		//echo "12";
	}
	else{
		$name_error = "שם משתמש או סיסמא לא נכונים";
	}*/
	//$query=$db->query(signinQuary);
    //$query->setFetchMode(PDO::FETCH_ASSOC);
	/*
	echo implode($row);
		if ($Susername == $row["username"] and $Spassword == $row["passwords"]){
			echo "connected! \n welcome ".$Susername ;
			//header("Location:main.php");
			break;
		}
		else{
			$name_error = "שם משתמש או סיסמא לא נכונים";
		}*/

}
catch(Exception $e){
    echo $e-> getMessage();
}
}

?>