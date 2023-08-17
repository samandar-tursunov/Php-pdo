<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ro'yxat</title>
</head>
<body>
   <?php
   require 'database.php';
   $stmt = $pdo->prepare('SELECT * FROM student');

   $stmt->execute();
   
   $student = $stmt->fetchAll();
   
   ?>
   
 
    <table>
    <tr>
        <th>Ism</th>
        <th>Familiya</th>
        <th>Email</th>
        <th>Universitet</th>
        <th>phone</th>
        
    </tr>
    <?php foreach ($student as $students): ?>
    <tr>
        <td><?php echo $students['name']; ?></td>
        <td><?php echo $students['surname']; ?></td>
        <td><?php echo $students['email']; ?></td>
        <td><?php echo $students['university']; ?></td>
        <td><?php echo $students['phone']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
    
</body>
</html>