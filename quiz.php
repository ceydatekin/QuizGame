<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Project Worlds || TEST YOUR SKILL </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link href="css/simple-sidebar.css" rel="stylesheet">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style type="text/css">
	#regiration_form fieldset:not(:first-of-type) {
		display: none;
	}
  </style>
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
 <style>
 .sorular{
    background-color:rgb(50,50,50,0.5);
    border-radius: 15px;
}
 </style>


</head>
<body>

    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <span class="logo">Test Your Skill</span>
    </div>
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Ana Sayfa</a></li>
     
      <li><a href="#">Sınavları Listele</a></li>
      <li><a href="#">Geçmiş Sınavlarım</a></li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
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
                <div class="panel-body" style="background: rgb(100, 100, 100) "><a href="#">Öğrenci Bilgilerim</a></div>
              
                </div>
            </div>
            </div>
            </li>
        </ul>
    </div>
    
 
    <div id="page-content-wrapper">
        <div class="container-fluid">
        
    <div class="page-header">
    <h1>Sınavınız Başlamıştır...</h1>      
    </div>

<div class="row" style="width: 80%; margin-left: 50px; padding: 20px;">

<?php
include "dp_conn.php";


 
?>


<div class="container">
    <h1></h1>
	<div class="progress">
		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	
	<form id="regiration_form" action="check.php"  method="post">
   
        <?php 
            $sin = $_POST["sin"];
    
            $verisor=$pdo->prepare("SELECT * from questions WHERE  quizId = :quizId");
            $verisor->execute(array( 'quizId' => $sin ));
            $vericek=$verisor->fetch(PDO::FETCH_ASSOC);

            $soruId = $vericek["soruId"];
            $verisor=$pdo->prepare("SELECT * from quiz WHERE  quizId = :quizId");
            $verisor->execute(array( 'quizId' => $sin ));
            $vericek=$verisor->fetch(PDO::FETCH_ASSOC);
    
            $n = $vericek["sorusayisi"];
            for ($i=0; $i <$n;$i++ ) {
        ?>
    
	    <fieldset style="height: 250px;"  >
            <h2>
            <?php  echo "SORU ";
                    echo $i+1;
                    echo " : ";
                    echo "<br>";
                    $verisor=$pdo->prepare("SELECT * from questions WHERE  soruId = :soruId");
                    $verisor->execute(array( 'soruId' => $soruId ));
                    $vericek=$verisor->fetch(PDO::FETCH_ASSOC); 
                    echo $vericek["soru"];
                ?></h2>
		
             <?php 
                $verisor=$pdo->prepare("SELECT * from options WHERE  soruId = :soruId");
                $verisor->execute(array( 'soruId' => $soruId ));
                $vericek=$verisor->fetch(PDO::FETCH_ASSOC);
                $soruId++;   
            ?>


	
        
    
	  <div class="form-group">
      <input type="radio" name="cevap[<?php echo $i ?>]" value="ch1">
      <label>  <?php echo $vericek["ch1"]; ?> </label>
	  </div >
      <div class="form-group">
      <input type="radio" name="cevap[<?php echo $i ?>]" value="ch2">
      <label>  <?php echo $vericek["ch2"]; ?> </label>
      </div>
      <div class="form-group">
      <input type="radio" name="cevap[<?php echo $i ?>]" value="ch3">
      <label>  <?php echo $vericek["ch3"] ;?> </label>
      </div class="form-group">
      <input type="radio" name="cevap[<?php echo $i ?>]" value="ch4"> 
      <label>  <?php echo $vericek["ch4"]; ?> </label>
      <br>
      <br>
	
        <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
		<input type="button" name="next" class="next btn btn-info"  value="next" />

        <button type="submit" class="btn btn-danger"  name="sin" value=" <?= $sin ?> "> BİTİR VE GÖNDER</button>
	</fieldset>
    
    <?php  }?>
    
    </form>
	
  </div>
 



<script type="text/javascript">
$(document).ready(function(){
	var current = 1,current_step,next_step,steps;
	steps = $("fieldset").length;
	$(".next").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().next();
		next_step.show();
		current_step.hide();
		setProgressBar(++current);
	});
	$(".previous").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().prev();
		next_step.show();
		current_step.hide();
		setProgressBar(--current);
	});
 
	setProgressBar(current);
	// Change progress bar action
	function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar")
			.css("width",percent+"%")
			.html(percent+"%");		
	}
});
</script>


 <script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>




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
