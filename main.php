<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mysql</title>
</head>
<body>
    <h1>asjsi</h1>
    <?php
    $mysql = new mysqli("localhost","root","root","mushtari");
     $mysql->query("SET NAMES'utf8'");
    if($mysql->connect_error){
      echo'Error Number:'.$mysql->connect_errno.'<br>';
      echo'Error:'.$mysql->connect_error
      }
    ?>
    
</body>
</html>