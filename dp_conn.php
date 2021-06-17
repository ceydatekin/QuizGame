    <?php

    $host = "localhost";
    $db_name = "285541";
    $u_name = "285541";
    $u_pass = "123456";

    // Database bağlantısının tanımlanması
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=$db_name", $u_name, $u_pass);
        $pdo->query("SET CHARSET UTF8");
    }catch(PDOException $e){
        die("Database bağlantısı kurulamadı : ". $e->getMessage());
    }

?>

