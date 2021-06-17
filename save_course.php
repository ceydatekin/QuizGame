<?php 

include "dp_conn.php";

$ders_kodu = $_POST["ders_kodu"];
$ders_adi = $_POST["ders_adi"];


$sql = "SELECT COUNT(*) As num FROM `course` WHERE courseNo = :ders_kodu";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':ders_kodu', $ders_kodu);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if($row['num'] > 0){
        //TODO: Hata sayfası
        header("Location: admin.php");
    }
    else{
        $stmt=$pdo->prepare("INSERT INTO course (courseNo, name ) VALUES (:courseNo, :name)"); 
        $stmt->bindValue(':courseNo', $ders_kodu, PDO::PARAM_STR);
        $stmt->bindValue(':name', $ders_adi, PDO::PARAM_STR);
        
        $result3=$stmt->execute();
        //TODO: Başarılı Kodu döndür
        header("Location: admin.php");
    }




?>