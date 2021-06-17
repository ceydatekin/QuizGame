<?php 
session_start();
include "dp_conn.php";

$user_mail = $_POST["user_mail"];
$user_pw = $_POST["user_pw"];


$sql = "SELECT COUNT(*) As num FROM `user` WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $user_mail);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if($row['num'] > 0){
        $verisor=$pdo->prepare("SELECT * from user WHERE  email = :user_mail");
        $verisor->execute(array( 'user_mail' => $user_mail ));
  
        $vericek=$verisor->fetch(PDO::FETCH_ASSOC);
        
        if ($vericek["password"] == $user_pw) {
            $_SESSION['KULLANICI_ADI'] =$user_mail;
            header("Location: users.php");
        }
        else{
            header("Location: index.php");
        }
        
    }
    else{
        header("Location: index.php");
    }


?>