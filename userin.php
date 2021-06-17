<?php
session_start();
if (!$_SESSION['KULLANICI_ADI']) {
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
 <link href="css/simple-sidebar.css" rel="stylesheet">

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

    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <span class="logo">Test Your Skill</span>
    </div>
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="users.php">Ana Sayfa</a></li>
     
      <li><a href="list_sınav.php">Sınavları Listele</a></li>
      <li><a href="#">Geçmiş Sınavlarım</a></li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>


<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    <h1>Bilgiler:</h1>
                </a>
            </li>
            <li>


            <div class="panel-group"  >
                <div class="panel panel-default" >
                <div class="panel-heading" style="background:rgb(82, 80, 78);">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1" >Sınav</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse" > 
                <div class="panel-body" style="background: rgb(100, 100, 100) "><a href="#">Aktif Sınavları Listele</a></div>
                <div class="panel-footer" style="background: rgb(82, 80, 78);"><a href="#">Geçmiş Sınavları Listele</a></div>
               
                </div>
            </div>
            </div>

         
            </li>
            <li>
            <div class="panel-group"  >
                <div class="panel panel-default" >
                <div class="panel-heading" style="background:rgb(82, 80, 78);">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse2" >Dersler</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse" > 
                <div class="panel-body" style="background: rgb(100, 100, 100) "><a href="#">Aldığım Dersler</a></div>
                <div class="panel-footer" style="background: rgb(82, 80, 78);"><a href="#">Başarı Durumum</a></div>
                </div>
            </div>
            </div>
            </li>
            <li>
            <div class="panel-group"  >
                <div class="panel panel-default" >
                <div class="panel-heading" style="background:rgb(82, 80, 78);">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse3" >Öğrenciler</a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse" > 
                <div class="panel-body" style="background: rgb(100, 100, 100) "><a href="userin.php">Öğrenci Bilgilerim</a></div>
              
                </div>
            </div>
            </div>
            </li>
        </ul>
    </div>
    
 
    <div id="page-content-wrapper">
        <div class="container-fluid">
        
    <div class="page-header">
    <?php
    
    include "dp_conn.php";
    $verisor=$pdo->prepare("SELECT * from user WHERE  email = :user_mail");
    $verisor->execute(array( 'user_mail' => $_SESSION['KULLANICI_ADI'] ));

    $vericek=$verisor->fetch(PDO::FETCH_ASSOC);
    
    
    ?>


    <h1>Öğrenci Bilgileriniz:</h1>     
    <div style="margin : 30px; font-size:20px;">
    <div class="row" > <label > Mail Adresi: <?php echo $vericek["email"]  ?> </label></div>
    <div class="row"> İsim:<?php echo $vericek["name"]  ?> </div>
    <div class="row">GSM :<?php echo $vericek["GSM"]  ?></div>
    <div class="row">Adres: <?php echo $vericek["addres"]  ?></div>
    </div> 
    </div>
    





<!-- Butona tıkladığımızda menünün ortadan kalkması için gerekli jquery kodu -->
<script>
       $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

</script>			 


    </script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        
</body>
</html>
