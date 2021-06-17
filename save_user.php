<?php 

include "dp_conn.php";

$user_name = $_POST["user_name"];
$user_mail = $_POST["user_mail"];
$user_GSM = $_POST["user_GSM"];
$user_adres = $_POST["user_adres"];
$user_pw = $_POST["user_pw"];

$stmt=$pdo->prepare("INSERT INTO user (email, name , password,GSM,addres) VALUES (:email, :name, :password,:GSM,:addres)"); 
        $stmt->bindValue(':email', $user_mail, PDO::PARAM_STR);
        $stmt->bindValue(':name', $user_name, PDO::PARAM_STR);
        $stmt->bindValue(':password', $user_pw, PDO::PARAM_STR);
        $stmt->bindValue(':addres', $user_adres, PDO::PARAM_STR);
        $stmt->bindValue(':GSM', $user_GSM, PDO::PARAM_STR);
        $result3=$stmt->execute();
        header("Location: index.php");
?>