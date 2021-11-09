<?php
    $data = file_get_contents("data.json");
    $dataArr = json_decode($data,1);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/user.css">
    <title>User Page</title>
</head>
<body>
    <img src="./img/banner.jpg" alt="" class="banner">
    <h1 class="title">Product List</h1>
    <div class="layout">
        <table class="table">
            <tr>
                <td>
                    List
                </td>
                <td>
                    Product Name
                </td>
                <td>
                    Number
                </td>
                <td>
                    Price
                </td>
                <td>
                    Operation
                </td>
            </tr>
            <?php
                foreach($dataArr as $row){
                    echo "<tr><td>".$row['List']."</td><td>".$row['Product Name']."</td><td>".$row['Number']."</td>
                    <td>".$row['Price']."</td><td><button class='button' onclick='openModal(this)'>Edit</button></td><tr>";
                }
            ?>
            

        </table>
    </div>

    <div id="modal" class="modal-bg">
        <div class="modal">
            <div class="modal-header">
                <h3>Edit User Infomation</h3>
            </div>
            <div class="modal-body">
                <div class="form-div">
                <label for="">Product Name</label>
                <input type="text" class="form-style" id="username">
                </div>
                <div class="form-div">
                <label for="">Number</label>
                <input type="text" class="form-style" id="password">
                </div>
                <div class="form-div">
                <label for="">Role</label>
                <input type="text" class="form-style" id="role">
                </div>
            </div>
            <div class="modal-footer" style="text-align:right;width:100%">
            <button class="button" type="button" onclick="updateForm()">Submit</button>
                <button class="button" type="button" onclick="closeModal()">Close</button>
            </div>
        </div>
    </div>
</body>
</html>
<script>

function openModal(obj){
        var username = $(obj).parents("tr").find("td").eq(1).text();
        var password = $(obj).parents("tr").find("td").eq(2).text();
        var role = $(obj).parents("tr").find("td").eq(3).text();
        $("#username").val(username);
        $("#password").val(password);
        $("#role").val(role);
        $("#modal").fadeIn();
    }

    function closeModal(){
        $("#modal").fadeOut();
    }

    function updateForm(){
        alert("Update successfully!");
        closeModal();
    }
</script>