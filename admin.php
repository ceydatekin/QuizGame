<?php
session_start();
if (!$_SESSION['ADMIN_ADI']) {
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
    <li> <a href="#menu-toggle" class="btnmenu" id="menu-toggle"><img style="height:40px; padding-bottom:11px;" src="https://img.icons8.com/dotty/80/000000/menu-rounded.png"/></a></li>
      <li class="active"><a href="#">Ana Sayfa</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Listele <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Sınava Girenleri Listele</a></li>
          <li><a href="#">Dersleri Listele</a></li>
          <li><a href="#">Sınav Bilgilerini Listele</a></li>
        </ul>
      </li>
      <li data-toggle="modal" data-target="#dersekle"><a href="#">Ders Ekle</a></li>
      <li data-toggle="modal" data-target="#sinavyap"><a href="#">Sınav Ekle</a></li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
        </div>
        </nav>

    <div id="wrapper">

	<div class="modal fade" id="sinavyap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel" style="color:orange" >Sınav Ekle</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="examc.php" method="POST">
								<label>Ders Kodu</label>
								<input class="form-control" type="text" placeholder="Ders Kodunu Giriniz:" name="ders_kodu">
								<label>Sınav Adı</label>
								<input class="form-control" type="text" placeholder="Sınav Adını Giriniz:" name="sinav_adi">
								<label>Sınav Süresi</label>
								<input class="form-control" type="text" placeholder="Sınav Süresini dk Cinsinden Giriniz:" name="sinav_suresi">
								<label>Soru Sayısı</label>
								<input class="form-control" type="text" placeholder="Soru Sayısını Giriniz:" name="soru_sayisi">

                                <label for="example-datetime-local-input" class="col-2 col-form-label">Sınav Başlangıç Tarihi ve Saati</label>
                               
								<input class="form-control" type="datetime-local" value="2021-08-19T13:45:00" name="Sinav_start_tarihi">
                                <label for="example-datetime-local-input" class="col-2 col-form-label">Sınav Bitiş Tarihi ve Saati</label>
                                
								<input class="form-control" type="datetime-local" value="2021-08-19T13:45:00" name="Sinav_stop_tarihi">
								<br>
								<button type="submit" class="kayitol" data-toggle="modal" data-target="#sinavyap">Oluştur</button>
								<button type="button" class="closed" data-dismiss="modal">Kapat</button>
							</form>
						</div>
					</div>
				</div>
			</div>

            <div class="modal fade" id="dersekle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel" style="color:orange" >Ders Ekle</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="save_course.php" method="POST">
								<label>Dersin Kodu</label>
								<input class="form-control" type="text" placeholder="Ders Kodunu Giriniz:" name="ders_kodu">
								<label>Dersin Adı</label>
								<input class="form-control" type="text" placeholder="Ders Adını Giriniz:" name="ders_adi">
								<br>
								<button type="submit" class="kayitol" >Ders Ekle</button>
								<button type="button" class="closed" data-dismiss="modal">Kapat</button>
							</form>
						</div>
					</div>
				</div>
			</div>









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
                 <div class="panel-body" style="background: rgb(100, 100, 100) "><a href="#">Sınava Girenleri Listele</a></div>
                <div class="panel-footer" style="background: rgb(82, 80, 78);"><a href="#">Sınav Bilgilerini Listele</a></div>
                <div class="panel-body" style="background: rgb(100, 100, 100)  " data-toggle="modal" data-target="#sinavyap"><a href="#">Sınav Ekle</a> </div>
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
                <div class="panel-body" style="background: rgb(100, 100, 100) "><a href="#">Dersi Alanları listele</a></div>
                <div class="panel-footer" style="background: rgb(82, 80, 78);"><a href="#">Dersleri Listele</a></div>
                <div class="panel-body" style="background: rgb(100, 100, 100) " data-toggle="modal" data-target="#dersekle"><a href="#">Ders Ekle</a></div>
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
                <div class="panel-body" style="background: rgb(100, 100, 100) "><a href="#">Öğrencilerin Bilgileri</a></div>
              
                </div>
            </div>
            </div>
            </li>
        </ul>
    </div>
    
 
    <div id="page-content-wrapper">
        <div class="container-fluid">
        
    <div class="page-header">
    <h1>Eğitmen Sistemine Hoşgeldiniz...</h1>      
    </div>
    
            
        </div>
    </div>
<div class="row" style="width: 80%; margin-left: 75px; ">

    <div class="col-md-10" style="width: 200px; ; margin: 20px;">
        <div class="card" >
            <div >
                <img class = "card-image" src="https://img.icons8.com/ios-filled/80/000000/tall-person.png" alt="Avatar" style="height:100px">
                
            </div>
            <div class="card-text">
                <h3>Öğrerciler</h3>
                <h5>çok Yakında</h5>
            </div>
            <div class="card-stats">
                <div class="col-md-10" >
			       
	            </div>
            </div> 
        </div>
    </div>



    <div class="col-md-10" style="width: 200px; ; margin: 20px;">
        <div class="card" >
            <div >
                <img class = "card-image" src="https://img.icons8.com/ios-filled/80/000000/tall-person.png" alt="Avatar" style="height:100px">
                
            </div>
            <div class="card-text">
                <h3>Aktif Öğrenciler</h3>
                <h5>çok Yakında</h5>
            </div>
            <div class="card-stats">
                <div class="col-md-10" >
			       
	            </div>
            </div> 
        </div>
    </div>

    <div class="col-md-10" style="width: 200px; ; margin: 20px;">
        <div class="card" >
            <div >
                <img class = "card-image" src="https://img.icons8.com/ios-filled/80/000000/tall-person.png" alt="Avatar" style="height:100px">
                
            </div>
            <div class="card-text">
                <h3>Sınav Geri Dönüşleri</h3>
                <h5>çok Yakında</h5>
            </div>
            <div class="card-stats">
                <div class="col-md-10" >
			       
	            </div>
            </div> 
        </div>
    </div>
    <div class="col-md-10" style="width: 200px; ; margin: 20px;">
        <div class="card" >
            <div >
                <img class = "card-image" src="https://img.icons8.com/ios-filled/80/000000/tall-person.png" alt="Avatar" style="height:100px">
                
            </div>
            <div class="card-text">
                <h3>Başarı Durumu İstatistiği</h3>
                <h5>çok Yakında</h5>
            </div>
            <div class="card-stats">
                <div class="col-md-10" >
			       
	            </div>
            </div> 
        </div>
    </div>
</div>
<div class="row" style="width: 80%; margin-left: 150px; padding: 20px;">

<div class="col-md-10" style="width: 200px; margin: 20px;">
        <div class="card" >
            <div >
                <img class = "card-image" src="https://img.icons8.com/ios-filled/80/000000/tall-person.png" alt="Avatar" style="height:100px">
                
            </div>
            <div class="card-text">
                <h3>Sınav Başarı Durumları </h3>
                <h5>çok Yakında</h5>
            </div>
            <div class="card-stats">
                <div class="col-md-10" >
			       
	            </div>
            </div> 
        </div>
    </div>



    <div class="col-md-10" style="width: 200px; margin: 20px;">
        <div class="card" >
            <div >
                <img class = "card-image" src="https://img.icons8.com/ios-filled/80/000000/tall-person.png" alt="Avatar" style="height:100px">
                
            </div>
            <div class="card-text">
                <h3>Süresi Geçmiş Sınavlar</h3>
                <h5>çok Yakında</h5>
            </div>
            <div class="card-stats">
                <div class="col-md-10" >
			       
	            </div>
            </div> 
        </div>
    </div>

    <div class="col-md-10" style="width: 200px; margin: 20px;">
        <div class="card" >
            <div >
                <img class = "card-image" src="https://img.icons8.com/ios-filled/80/000000/tall-person.png" alt="Avatar" style="height:100px">
                
            </div>
            <div class="card-text">
                <h3>Öğrenci listesit</h3>
                <h5>çok Yakında</h5>
            </div>
            <div class="card-stats">
                <div class="col-md-10" >
			       
	            </div>
            </div> 
        </div>
    </div>
    <div class="col-md-10" style="width: 200px; margin: 20px;">
        <div class="card" >
            <div >
                <img class = "card-image" src="https://img.icons8.com/ios-filled/80/000000/tall-person.png" alt="Avatar" style="height:100px">
                
            </div>
            <div class="card-text">
                <h3>Günü yaklaşan sınavlar</h3>
                <h5>çok Yakında</h5>
            </div>
            <div class="card-stats">
                <div class="col-md-10" >
			       
	            </div>
            </div> 
        </div>
    </div>
</div>


</div>



<!-- Butona tıkladığımızda menünün ortadan kalkması için gerekli jquery kodu -->
<script>
       $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

</script>






		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        
</body>
</html>


