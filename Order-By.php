<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="where.css">
</head>
<body>
    <h1>PHP MySQL Use The WHERE Clause</h1>
<?php
    
    if(isset($_POST["sub"])){
        try {
            $db = new PDO("mysql:host =localhost;dbname=test","root","");
            $stm = $db->prepare("SELECT * FROM `tableone` ORDER BY LastName");
            $stm ->execute();
            $rep =  $stm -> fetchAll();
            echo "<table>";
            echo "<tr>";
            echo "<th> FirstName </th>";
            echo "<th> LastName </th>";
            echo "<th> Email </th>";
            echo "</tr>";
            
    
            foreach( $rep as $row ) {
                echo "<tr>
                        <td>{$row['firstName']}</td>
                        <td>{$row['lastName']}</td>
                        <td>{$row['email']}</td>
                    </tr>";
            };
            echo "</table>";
        }catch(PDOException $e) {
            echo "eror";
        }
    }
?>
<form action="" method="POST">
    <input type="submit" value="select
" name="sub" id="sub">
</form>

</body>
</html>