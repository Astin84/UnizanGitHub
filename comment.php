<?php
session_start();
?>

<?php
require_once('config/loader.php');

if(isset($_POST['comment'])){
    try{
        $comment = $_POST['comment'];
        
        $query = "INSERT INTO comment SET comment=?";
        
        $stmt = $conn->prepare($query);

        $stmt->bindValue(1, $comment);

        $stmt->execute();

        header('Location: index.php');
    }catch(PDOException $e){
        echo "Your error message is : " . $e->getMessage();
    }
}