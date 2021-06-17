<?php 
session_start();
include "dp_conn.php";

$admin_mail = $_POST["admin_mail"];
$admin_pw = $_POST["admin_pw"];

$sql = "SELECT COUNT(*) As num FROM `admin` WHERE mail = :mail";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':mail', $admin_mail);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if($row['num'] > 0){
        $verisor=$pdo->prepare("SELECT * from admin WHERE  mail = :admin_mail");
        $verisor->execute(array( 'admin_mail' => $admin_mail ));
  
        $vericek=$verisor->fetch(PDO::FETCH_ASSOC);
        
        if ($vericek["password"] == $admin_pw) {
            $_SESSION['ADMIN_ADI'] =$admin_mail;
            header("Location: admin.php");
        }
        else{
            header("Location: index.php");
        }
        
    }
    else{
        header("Location: index.php");
    }


?>