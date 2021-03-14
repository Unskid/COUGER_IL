<?php require('signup.php'); ?>

<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css" type="text/css" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>הרשמה מהירה • קוגריות ישראל</title>
  </head>
<style>
.login-signup {
    padding: 0 0 25px;
}

.btn-success {
    background: #df2349;
    border-radius: 0;
    border: 2px solid #df2349;
    webkit-transition: all 400ms cubic-bezier(.4, 0, .2, 1);
    transition: all 400ms cubic-bezier(.4, 0, .2, 1);
}

.btn-success:hover,
.btn-success:focus {
    background: rgba(26, 161, 157, 0);
    border: 2px solid #1aa19d;
    webkit-transition: all 400ms cubic-bezier(.4, 0, .2, 1);
    transition: all 400ms cubic-bezier(.4, 0, .2, 1);
    color: #df2349;
}

a {
    color: #df2349;
}

ul {
    list-style-type: none;
}

article[role="login"] {
    background: #fff;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 10px rgba(0, 0, 0, 0.24);
    webkit-transition: all 400ms cubic-bezier(0.4, 0, 0.2, 1);
    transition: all 400ms cubic-bezier(0.4, 0, 0.2, 1);
    padding: 30px 50px;
    margin-bottom: 20px;
}

article[role="login"] input[type="submit"] {
    padding: 10px 15px;
    font-size: 16px;
}

article[role="login"]:hover {
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
    -webkit-box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 1px 15px rgba(0, 0, 0, 0.23);
    webkit-transition: all 400ms cubic-bezier(0.4, 0, 0.2, 1);
    transition: all 400ms cubic-bezier(0.4, 0, 0.2, 1);
}

article[role="login"] h3 {
    font-size: 26px;
    font-weight: 300;
    color: #df2349;
    margin-bottom: 20px;
}

article[role="login"] p {
    font-size: 16px;
    padding: 5px 15px;
}

.nav-tab-holder {
    padding: 0 0 0 30px;
    float: right;
}

.nav-tab-holder .nav-tabs {
    border: 0;
    float: none;
    display: table;
    table-layout: fixed;
    width: 100%;
}

.nav-tab-holder .nav-tabs>li {
    margin-bottom: -3px;
    text-align: center;
    padding: 0;
    display: table-cell;
    float: none;
    padding: 0;
}

.nav-tab-holder .nav-tabs>li>a {
    background: #d9d9d9;
    color: #6c6c6c;
    margin: 0;
    font-size: 18px;
    font-weight: 300;
}

.nav-tab-holder .nav-tabs>li.active>a,
.nav-tabs>li.active>a:hover,
.nav-tabs>li.active>a:focus {
    color: #FFF;
    background-color: #df2349;
    border: 0;
    border-radius: 0;
}

.mobile-pull {
    float: right;
}

article[role="manufacturer"] {
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 10px rgba(0, 0, 0, 0.24);
    padding: 0 0 40px;
    max-width: 420px;
    margin: -45px auto 0;
}

article[role="manufacturer"] header {
    background: #df2349;
    color: #fff;
    padding: 10px;
    font-size: 18px;
    font-weight: 300;
}

article[role="manufacturer"] h1 {
    font-size: 26px;
    font-weight: 300;
    border-bottom: 1px solid #f2f2f2;
    padding: 25px 15px;
}

article[role="manufacturer"] ul {
    padding: 0 25px;
}

article[role="manufacturer"] ul li {
    font-size: 16px;
    border-bottom: 1px solid #eaeaea;
    padding: 20px 15px;
    color: #404040;
}

article[role="manufacturer"] ul li i {
    color: #df2349;
}

.login-signup {
    padding: 0 0 25px;
}

/*#df2349*/
@media only screen and (max-width: 767px) {
    .mobile-pull {
        float: none;
    }

    .nav-tab-holder {
        float: none;
        overflow: hidden;
    }

    .nav-tabs>li>a {
        font-size: 13px;
        font-weight: 600;
        padding: 10px 5px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .nav-tabs>li {
        width: 50%;
    }
	.form-group input{
		border-radius:10px;
	}
	.headlines h2{
		font-size: 1rem !important;
	}
}
</style>
<body>
<div class="container" style="margin-top:50px;text-align:center;">
    <div class="login-signup">
      <div class="row" style="justify-content:center;">
        <div class="col-sm-6 nav-tab-holder">
        <ul class="nav nav-tabs row" role="tablist">
          <li role="presentation" class="active col-sm-6" style="background:#df2349;"><a href="#home">הרשמה</a></li>
          <li style="background:#d9d9d9;" role="presentation" class="col-sm-6"><a href="signin1.php" >התחברות</a></li>
        </ul>
      </div>
      </div>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
          <div class="row" style="justify-content:center;">

            <div class="col-sm-6 mobile-pull">
              <article role="login" style="direction: rtl">
                <h3 class="text-center"><i class="fa fa-lock"></i> הרשמה </h3>
                <form class="signup" action="signup1.php" method="post" enctype="multipart/form-data" >
				<div class="headlines">
					
					לאחר ההרשמה הפרופיל יאומת תוך 24 שעות לוודא שאכן לא מדובר בבוט או ברישום כפול!
					
						</div>
				<input type="hidden" value="signup" name="signup"> 
                  <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="שם/כינוי:" required value="<?php echo $username; ?>">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="אימייל:" required value="<?php echo $email; ?>">
                  </div>
                    <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="בחר סיסמא:">
                  </div>
				 <div class="form-group">
                    <input type="integer" class="form-control" name="age" min="0" step="1" placeholder="גיל:" required>
                  </div>
				   <div class="form-group">
                    <input type="integer" class="form-control" name="phone" min="0" title="לצורכי אימות בלבד - המספר לא מוצג למשתמשי האתר" step="1" placeholder="טלפון נייד:" required>
                  </div>
                    <div class="form-group">
                    <textarea class="form-control" name="about" placeholder="ספר/י קצת על עצמך..." required></textarea>
                  </div>
				  <div class="form-group">
                   <div class="input-group">
					  <div class="input-group-prepend">
					  </div>
					  <div class="custom-file">
						<input type="file" class="custom-file-input" id="inputGroupFile01"
						  aria-describedby="inputGroupFileAddon01" name="image" >
						<label class="custom-file-label" for="inputGroupFile01">תמונת פרופיל</label>
					  </div>
					</div>
                  </div>
                 <!-- <div class="form-group" style="text-align:start;">
				  <input type="radio" value="זכר" name="gender">זכר</input>
				  </div>
				  <div class="form-group">
				  <input type="radio" value="נקבה" name="gender">נקבה</input>
				  </div>-->
				  <div class="form-group">
                      <select name="gender" id="cars" style="width:100%;">
						<option value="זכר">זכר</option>
						<option value="נקבה">נקבה</option>
					  </select>
                  </div>
                  <div class="form-group">
                    <div class="checkbox" style="text-align: initial;">
                      <label>
                        <input type="checkbox" required> אני מאשר/ת שאני מעל גיל 18.
                      </label>
                      
                      
                    
                    </div>
                  </div>
				  <div class="form-group">
				
				  	<?php if(isset($name_error)):?>
					  <ul style="list-style:unset;">
						  <li>
						<span><?php echo $name_error;?></span>
						</li>
						</ul>
					<?php endif ?>
					</div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block"  value="יאללה נרשמים">
                  </div>
                </form>

                <footer role="signup" class="text-center">
אני מאשר/ת בסיום ההרשמה את תנאי האתר והתקנון, קבלת הודעות לנייד / אימייל.
</footer>
              </article>
            </div>

            

          </div>
          <!-- end of row -->
        </div>
        <!-- end of home -->

      <div role="tabpanel" class="tab-pane" id="profile">
        <div class="row" style="justify-content:center;">

          <div class="col-sm-6 mobile-pull">
             <article role="login" style="direction: rtl">
                <h3 class="text-center"><i class="fa fa-lock"></i><a href="signin1.php">התחברות</h3>
                <form class="signup" action="signup1.php" method="post">
                  <div class="form-group">
                    <input type="email" class="form-control" name="auth_email" placeholder="מייל" value="<?php echo $username;?>" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="auth_password" placeholder="סיסמא" value="<?php echo $password;?>" required>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block"  value="יאללה מתחברים" required>
                  </div>
                </form>

                <footer role="signup" class="text-center">
                  <ul>
                   
                     
                    <li>
                      <a href="https://cougar.co.il/tos">תנאים</a>
                    </li>
					<li><a href="#">שכחתי סיסמא</a></li>
                  </ul>
                </footer>

              </article>
          </div>

         
  </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="signup.js"></script>
  </body>
</html>
