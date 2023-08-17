<?php
require 'database.php';

$name = $_POST['name'];
$surname =$_POST['surname'];
$email =$_POST['email'];
$university =$_POST['university'];
$phone =$_POST['phone'];


try {


$stmt=$pdo->prepare('INSERT INTO student (name,surname, email, university, phone) VALUES (:name, :surname,:email, :university,:phone)');
$stmt->execute([
    'name'=>$name,
    'surname'=>$surname,
    'email'=>$email,
    'university'=>$university,
    'phone'=>$phone

]);
$student=$stmt->fetchAll();
} catch (PDOException $e) {
    echo $sql . '<br>' . $e->getMessage();
}?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
 </head>
 <body>
    <h2>
        <i>
            So'rov yuborildi
        </i>
    </h2>
    <div>

<a href="save.php" >Listni ko'rish</a>

  </div>

 </body>
 </html>






