<?php
    $data = file_get_contents("users.json");
    $dataArr = json_decode($data,1);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <? include "../parts/meta.php"; ?>
    <link rel="stylesheet" href="usersadmin.css">
    <title>Users Admin</title>
</head>
<body>
	<div>
    <h1>Users Admin</h1>
   
        <table class="table">
            <tr>
                <td>
                    Name
                </td>
                <td>
                    Type
                </td>
                <td>
                    Email
                </td>
                <td>
                    Classes
                </td>
                
            </tr>
            <?php
                foreach($dataArr as $row){
                    echo "<tr>
                    <td>".$row['name']."</td>
                    <td>".$row['type']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['classes']."</td>
                    <td> <button class='button'>Edit</button></td>
                    <tr>";
                }
            ?>
        </table>
       
    
    </div>

</body>
</html>







