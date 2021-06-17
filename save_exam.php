<?php 

include "dp_conn.php";

$sinav_adi = $_POST["sinav_adi"];

$verisor=$pdo->prepare("SELECT * from quiz WHERE  quizName = :sinav_adi");
$verisor->execute(array( 'sinav_adi' => $sinav_adi ));
$vericek=$verisor->fetch(PDO::FETCH_ASSOC);
$sinav_id = $vericek["quizId"]; 
$n= $vericek["sorusayisi"];          

$soru =  $_POST["soru"];
$A =  $_POST["A"];
$B =  $_POST["B"];
$C =  $_POST["C"];
$D =  $_POST["D"];


for ($i=0; $i < $n; $i++) { 
    $stmt=$pdo->prepare("INSERT INTO questions (quizId, soru) VALUES (:quizId,:soru)"); 
    $stmt->bindValue(':soru', $soru[$i], PDO::PARAM_STR);
    $stmt->bindValue(':quizId', $sinav_id, PDO::PARAM_STR);
    $result3=$stmt->execute();
   

}

for ($i=0; $i < $n; $i++) { 
    
    $verisor=$pdo->prepare("SELECT * from questions WHERE  soru = :soru");
    $verisor->execute(array( 'soru' => $soru[$i] ));
    $vericek=$verisor->fetch(PDO::FETCH_ASSOC);
    $soruId = $vericek["soruId"];    

    $stmt=$pdo->prepare("INSERT INTO options (soruId, ch1,quizId,ch2,ch3,ch4) VALUES (:soruId,:ch1,:quizId,:ch2,:ch3,:ch4)"); 
    $stmt->bindValue(':soruId', $soruId , PDO::PARAM_STR);
    $stmt->bindValue(':ch1', $A[$i], PDO::PARAM_STR);
    $stmt->bindValue(':ch2', $B[$i], PDO::PARAM_STR);
    $stmt->bindValue(':ch3', $C[$i], PDO::PARAM_STR);
    $stmt->bindValue(':ch4', $D[$i], PDO::PARAM_STR);
    $stmt->bindValue(':quizId', $sinav_id, PDO::PARAM_STR);
    $result3=$stmt->execute();
   
   
    
    $secenek = $_POST["cevap"];
 
    switch ($secenek[$i]) {
        case 'A':
            $cp="ch1";
            $stmt=$pdo->prepare("INSERT INTO answer (correctAnswer , soruId,quizId) VALUES (:correctAnswer,:soruId, :quizId)"); 
            $stmt->bindValue(':soruId', $soruId, PDO::PARAM_STR);
            $stmt->bindValue(':correctAnswer',$cp, PDO::PARAM_STR);
            $stmt->bindValue(':quizId',$sinav_id, PDO::PARAM_STR);
            $result3=$stmt->execute();        
            break;

        case 'B':        
            $cp="ch2";

            $stmt=$pdo->prepare("INSERT INTO answer (correctAnswer , soruId, quizId) VALUES (:correctAnswer,:soruId,:quizId)"); 
            $stmt->bindValue(':soruId', $soruId, PDO::PARAM_STR);
            $stmt->bindValue(':correctAnswer', $cp, PDO::PARAM_STR);
            $stmt->bindValue(':quizId',$sinav_id, PDO::PARAM_STR);
            $result3=$stmt->execute(); 
            break;
        case 'C':
           
            $cp="ch3";
            $stmt=$pdo->prepare("INSERT INTO answer (correctAnswer , soruId,quizId) VALUES (:correctAnswer,:soruId, :quizId)"); 
            $stmt->bindValue(':soruId', $soruId, PDO::PARAM_STR);
            $stmt->bindValue(':correctAnswer', $cp, PDO::PARAM_STR);
            $stmt->bindValue(':quizId',$sinav_id, PDO::PARAM_STR);
            $result3=$stmt->execute();  
            
            break;
        case 'D':      
            $cp="ch4";
            $stmt=$pdo->prepare("INSERT INTO answer (correctAnswer , soruId,quizId) VALUES (:correctAnswer,:soruId,:quizId)"); 
            $stmt->bindValue(':soruId', $soruId, PDO::PARAM_STR);
            $stmt->bindValue(':correctAnswer', $cp, PDO::PARAM_STR);
            $stmt->bindValue(':quizId',$sinav_id, PDO::PARAM_STR);
            $result3=$stmt->execute();    
            break;                     
    }
  
   
  
}
header("Location: admin.php");



?>