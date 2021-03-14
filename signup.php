
<?php
/*
TODO - 
1. email V DONE
2. image in form
3. insert into DB DONE
4. Production 
5. special email design V
6. login panel
7. cookies
8. navigate between premium and trail.
9. aar.html => check if the user is allowed to access.
10. allow only png files.
*/
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMAILER/PHPMailer-master/src/Exception.php';
require_once 'PHPMAILER/PHPMailer-master/src/PHPMailer.php';
require_once 'PHPMAILER/PHPMailer-master/src/SMTP.php';
function randomPassword() {
    //!@#$%^&*()-/_=+;
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 6; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
    
}
ini_set("SMTP","tls://smtp.gmail.com");
ini_set("smtp_port",587);
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
$username = "";
$email = "";
$no_errors = true;

    function SMTPMAIL($email){
        // passing true in constructor enables exceptions in PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = 2; // for detailed debug output
            $mail->isSMTP();
            $mail->Host = 'mail.cougar.co.il';
            $mail->SMTPAuth = true;
            /*$mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );*/
            $mail->SMTPSecure = "tls";
            $mail->Port = 587;
            $Semail = "register@cougar.co.il";
            $mail->Username = $Semail; // YOUR gmail email
            $mail->Password = "k7lzsYLyHEqi";//Ug[aUPWg9IRo'; // YOUR gmail password
            // Sender and recipient settings
            $mail->setFrom($Semail, 'קוגריות ישראל');
            $mail->addAddress($email);
           // $mail->addReplyTo($Semail, 'קוגריות ישראל'); // to set the reply to
            // Setting the email content
            $mail->IsHTML(true);
            $mail->Subject = "קוגריות ישראל - ברכות על ההרשמה, לחץ כאן";
            $mail->Body = 'HTML message body. <b>Gmail</b> SMTP email body.';
            $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';
        
            $mail->send();
            echo "Email message sent.";
        } catch (Exception $e) {
            echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    //SMTPMAIL("mcgaming5685@gmail.com");
if (isset($_POST['username'])){
	function sendMail($sendEmail,$username,$password){
	$subject = "ברכות על ההרשמה, לחץ כאן";
	$message = '<html><body style="margin: 0; padding: 0;" style="
    direction: rtl;
    text-align: center;
">';
	$message .='<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td style="padding: 20px 0 30px 0;">

<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; border: 1px solid #cccccc;">
	<tr>
		<td align="center" bgcolor="#70bbd9" style="padding:0;">
			<img src="https://cougar.co.il/assets/images/mailimage.jpg" alt="Creating Email Magic." width="700" height="290" style="display: block;" />
		</td>
	</tr>
	<tr>
		<td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
			<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
				<tr>
					<td style="color: #153643; font-family: Arial, sans-serif;">
						<h1 style="font-size: 24px; margin: 0;">'.$username.' שלום</h1>
					</td>
				</tr>
				<tr>
					<td style="color: #153643; font-family: Arial, sans-serif; font-size: 20px; line-height: 24px; padding: 20px 0 30px 0;">
<p style="margin: 0;">ברכות על ההרשמה הינך כעת חבר באתר • עכשיו אתה יכול להתחיל לגלוש חופשי</p>
</td>
				</tr>
				<tr>
					<td>
						<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
							<tr>
								<td width="260" valign="top">
									<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
										<tr>
											<td>
												<img  alt="" width="100%" height="140" style="display: block;" />
											</td>
										</tr>
										<tr>
											<td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 25px 0 0 0;">
												<p style="margin: 0;font-size:24px;">הסיסמא שלך לאתר  <br>'.$password.'<br></p>
											</td>
										</tr>
									</table>
								</td>
								<td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
								<td width="260" valign="top">
									<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
										<tr>
											<td>
												<img alt="" width="100%" height="140" style="display: block;" />
											</td>
										</tr>
										<tr>
											<td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 25px 0 0 0;">
												<p style="margin: 0;">אנחנו רק רוצים לשפר ולהגדיל את הקהל שיהיה ממוקד ואיכותי מהיום אתה לקוח דה בה סט אצלינו</p>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td bgcolor="#ee4c50" style="padding: 30px 30px;">
    		<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
				<tr>
					<td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;">
						<p style="margin: 0; color: #ffffff;">cougar.co.il<br/>
					</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

			</td>
		</tr>
	</table>
</body>
</html>';
	//echo $message;
	$headers = "MIME-Version: 1.0"."\r\n";
	$headers .= "Content-type: text/html";
	$headers.= ";charset=iso-8859-1"."\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "Reply-To: קוגריות ישראל <service@cougar.co.il>\r\n";
    $headers .= "Return-Path: קוגריות ישראל <service@cougar.co.il>\r\n";
    $headers .= "From: קוגריות ישראל <service@cougar.co.il>\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
	$time = time();
	mail($sendEmail,$subject,$message,$headers);
	//print "Script Ran ".$time;
}
	$username = htmlspecialchars($_POST['username'],ENT_IGNORE);
	$email = htmlspecialchars($_POST['email'],ENT_IGNORE);
	$phone = htmlspecialchars($_POST['phone'],ENT_IGNORE);
	$age = htmlspecialchars($_POST['age'],ENT_IGNORE);
	$gender = htmlspecialchars($_POST['gender'],ENT_IGNORE);
	$password = htmlspecialchars($_POST['password'],ENT_IGNORE);
	$about = htmlspecialchars($_POST['about'],ENT_IGNORE);
	$Plainpassword = $password;

	//echo var_dump($password)." and ".var_dump($username);
	sendMail($email,$username,$password);
	if (empty($username)||empty($email)||empty($phone)||empty($age)||empty($gender)){
		$name_error = "נא לבדוק שמילאת את כל השדות";
	}
	$dsn = 'mysql:host=localhost;dbname=cougarco_url1;charset=utf8';
	$dbUsername = 'cougarco_alon';
	$Dbpassword = 'A1L2O3N4!@';
	
	try{
	$db = new PDO($dsn, $dbUsername,$Dbpassword);
	$db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch (PDOException $ex){
		echo "Connection failed =>".$ex;
	}
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$name_error = "Enter a  valid email";
	}
	$sthandler = $db->prepare("SELECT username FROM `users` WHERE username = '$name'");
	$sthandler->execute();

	if($sthandler->rowCount() > 0){
		$name_error =  "שם המשתמש תפוס";
		$no_errors = false;
	}
	$sthandler = $db->prepare("SELECT email FROM `users` WHERE email = '$email'");
	$sthandler->execute();
	//echo $sthandler -> rowCount();
	
	if($sthandler->rowCount() > 0){
		$name_error = "מייל תפוס";
		$no_errors = false;
	}
	if($no_errors){
		try{
			$password = md5($password);
			try{
			     $target_dir = "uploads1/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
            // Check if image file is a actual image or fake image
            echo var_dump($_FILES["image"]);
              $check = getimagesize($_FILES["image"]["tmp_name"]);
              echo $check;
              if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
              } else {
                echo "File is not an image.";
                $uploadOk = 0;
              }
            
            // Check if file already exists
            if (file_exists($target_file)) {
              echo  "נא לנסות תמונה בשם אחר";
              $uploadOk = 0;
            }
            
            // Check file size
            if ($_FILES["image"]["size"] > 5000000000) {
             echo "תמונה גדולה מדי, נא לנסות תמונה אחרת";
              $uploadOk = 0;
            }
            
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk != 0) {
              if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
              } else {
                echo "Sorry, there was an error uploading your file.";
              }
            }
			}
			catch (Exception $e){
			    $image = "";
			    $image_text = "";
			}
			$target = "images/".basename($image);
			/*$quary ="INSERT INTO `users` (`id`,`username`,`passwords`,`email`,`full_name`,`age`,`image`,`image_text`) values (DEFAULT"."`".$username."`".", "."`".md5($password)."`".", "."`".$email."`".", "."`".$phone."`".", "."`".$age."`".")";*/
			$quary1 = "insert into `users` (id,username,passwords,email,image,image_text,age,phone,about,gender) values(DEFAULT,'$username','$password','$email','$image','$target_file','$age','$phone','$about','$gender')";
			$cursor = $db ->prepare($quary1);
			$cursor -> execute();
			$name_error = "נרשמת בהצלחה, נא לבדוק את המייל שלך";
			//setcookie("is_premium","b46f550143027819e98e18d88115fde6",time()+(86400*30),"/",true,true);
			$_SESSION["is_premium"] = "b46f550143027819e98e18d88115fde6";
			//echo $_SESSION["is_premium"];
			if ($gender == "זכר"){
		     echo "<script>window.location.href='aar.php';</script>";
		    exit();
			}
			else if ($gender == "נקבה"){
			    echo "<script>window.location.href='aar2.php';</script>";
		        exit();
			}
			else{
			    $name_error = "זה נראה שיש בעיה";
			}
			if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
				$name_error= "זה עבד";
			}
			else{
				$name_error = "זה נראה כאילו יש בעיה, נסה לדבר עם התמיכה";
			}
		}
		catch(Exception $e){
			echo "EError: " . $e->getMessage();
		}
	}
}/*selse{
    echo "error occured: ".$error;
    exit();
}*/
	
	//$user = $stmt->fetch(PDO::FETCH_ASSOC);
	/*$sql_u = "SELECT * FROM `aaa` WHERE username='$username'";
	$sql_e = "SELECT * FROM `aaa` WHERE email='$email'";
	$res_u = mysqli_query($db,$sql_u) or die(mysql_error($db));
	$res_e = mysqli_query($db,$sql_e) or die(mysql_error($db));
	if (mysqli_num_rows($res_u)>0){
		$name_error = "שם המשתמש נתפס";
	}
	else if (mysqli_num_rows($res_e) > 0){
		$name_error = "המייל נתפס";
	}*/
	

/*try{
$errors = array();
$form = array($_POST["username"],$_POST["email"],$_POST["password"],$_POST["full_name"],$_POST["repeat_password"]);
for ($x=0; $x < count($form); $x++){
    htmlspecialchars($x,ENT_IGNORE);
}
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["p_image"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
} else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
$username =htmlspecialchars($_POST['username'],ENT_IGNORE);
$age = htmlspecialchars($_POST['age'],ENT_IGNORE);
try{
    (int)$age;
}
catch(Exception $e){
    array_push($errors,"בבקשה להכניס את גילך");
}
$email =htmlspecialchars( $_POST['email'],ENT_IGNORE);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   array_push($errors,"מייל לא מתאים");
}
$phone = htmlspecialchars( $_POST['full_name'],ENT_IGNORE);
$password = htmlspecialchars( $_POST['password'],ENT_IGNORE);
$repeat_password = htmlspecialchars( $_POST['repeat_password'],ENT_IGNORE);
if ($password != $repeat_password){
    array_push($errors,"אופס, זה נראה כאילו הסיסמאות לא שוות");
}
if (strlen($password)<= 8){
    array_push($errors,"סיסמא צריכה להיות מעל 8 תווים");
}
elseif(!preg_match("#[0-9]+#",$password)) {
   array_push($errors,"סיסמא צריכה להיות עם מספר אחד לפחות");
}
elseif(!preg_match("#[A-Z]+#",$password)) {
    array_push($errors,"סיסמא צריכה להיות עם אות גדולה");
}
elseif(!preg_match("#[a-z]+#",$password)) {
    array_push($errors,"סיסמא צריכה להיות עם אות קטנה");
}
if(count($errors) == 0){
    $dsn = 'mysql:host=localhost;dbname=aaa;charset=utf8';
    $username = 'root';
    $password = '';
    try{
        $db = new PDO($dsn, $username,$password);
        $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $quary ="INSERT INTO `aaa` (`id`,`username`,`passwords`,`email`,`full_name`,`age`) values (DEFAULT"."'".$username."'".", "."'".$password."'".", "."'".$email."'".", "."'".$phone."'".", "."'".$age."'".")";
        $cursor = $db ->prepare($quary);
        $cursor -> execute();
    }
    catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }
}
else{
    foreach($errors as $values){
        echo $values."<br>";
    }
}
}
catch(Exception $e){
    echo "Error: " . $e->getMessage();
}*/
?>