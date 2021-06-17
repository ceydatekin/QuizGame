<?php
session_start();
if (!empty($_SESSION['KULLANICI_ADI'])) {
	header("Location: users.php");
   exit();
}
if (!empty($_SESSION['ADMIN_ADI'])) {
	header("Location: admin.php");
   exit();
}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Project Worlds || TEST YOUR SKILL </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>



</head>
<body>
		
<nav class="navbar navbar-inverse" id="nav">
  <div class="container-fluid">
    <div class="navbar-header">
    <span class="logo">Test Your Skill</span>
    </div>
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Ana Sayfa</a></li>
     
    </ul>
    
  </div>
</nav>
	

</div>
</div>


<div class="row" style="width: 80%; margin-top: 150px; margin-left: 300px; padding: 20px; ">

    <div class="col-md-10" style="width: 330px; margin: 20px;">
        <div class="card" >
            <div >
                <img class = "card-image" src="bg.jpg" alt="Avatar" style="width:300px">
            </div>
            <div class="card-text">
               <h1>Öğrenci Girişi</h1>
            </div>
            <div class="card-stats">
                <div class="col-md-10" >
			        <button type="button" class="deneme" data-toggle="modal"  data-target="#uyegiris">
                        Üye Giriş 
			        </button>
	            </div>
            </div> 
        </div>
    </div>



    <div class="col-md-10" style="width:330px ; margin: 20px;">
        <div class="card">
            <div>
                <img class = "card-image" src="bg.jpg" alt="Avatar" style="width:300px">
            </div>
            <div class="card-text">
			<h1>Öğretmen Girişi</h1>
            </div>
            <div class="card-stats">
                <div class="col-md-10" >
			        <button type="button" class="deneme" data-toggle="modal" data-target="#admingiris">
			        Admin Girişi
		            </button>
	            </div>
            </div>
        </div>
    </div>

    <div class="col-md-10" style="width:330px ; margin: 20px;">
        <div class="card">
            <div >
                <img class = "card-image" src="bg.jpg" alt="Avatar" style="width:300px">
            </div>
            <div class="card-text">
			<h1>Öğrenci Kayıt</h1>
            </div>
            <div class="card-stats">
                <div class="col-md-10">
				    <button type="button" class="deneme" data-toggle="modal" data-target="#kayitol">
					    Kayıt Ol
				    </button>
	            </div>
	        </div>
        </div>
    </div>
</div>


			<!-- Modal -->
			<div class="modal fade" id="kayitol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel" style="color:orange" >Kayıt Ol</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="save_user.php" method="POST">
								<label>Ad Soyad</label>
								<input class="form-control" type="text" placeholder="Enter name-surname" name="user_name">
								<label>Mail Adesi</label>
								<input type="email" class="form-control" id="email" placeholder="Enter email" name="user_mail">
								<label>Telefon</label>
								<input class="form-control" type="number" placeholder="Enter GSM number" name="user_GSM">
								<label>Adres</label>
								<input class="form-control" type="text" placeholder="Enter address" name="user_adres">
								<label>Şifreniz</label>
								<input class="form-control" type="password" placeholder="Enter password" name="user_pw">
								<br>
								<button type="submit" class="kayitol">Kayit OL</button>
								<button type="button" class="closed" data-dismiss="modal">Kapat</button>
							</form>
						</div>
					</div>
				</div>
			</div>

            <div class="modal fade" id="admingiris" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel" style="color:orange">Admin Giriş</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="admin_login.php" method="POST">
								<label>Kullanıcı Mailiniz</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="admin_mail">
								<label>Şifreniz</label>
								<input class="form-control" type="password" placeholder="Enter password" name="admin_pw">
								<br>
								<button type="submit" class="girisyap" >Giriş Yap</button>
								<button type="button" class="closed" data-dismiss="modal">Kapat</button>
								
							</form>
						</div>
					</div>
				</div>
			</div>	

			<!-- Modal -->
			<div class="modal fade" id="uyegiris" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel" style="color:orange">Üye Giriş</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="users_login.php" method="POST">
                                <label>Kullanıcı Mailiniz</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="user_mail">
								<label>Şifreniz</label>		
								<input class="form-control" type="password"  placeholder="Enter password" name="user_pw">
								<br>
								<button type="submit" class="girisyap">Giriş Yap</button>
								
								<button type="button" class="closed" data-dismiss="modal">Kapat</button>
							</form>
						</div>
					</div>
				</div>
			</div>	

          

			
		

	
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>


