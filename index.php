<?php
    require('./loadUsers.php');


   $db_users = loadUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>

<div class="container mb-5">
    <div class="row">
        <div class="col-6 mx-auto">
            <form action="./login.php" method="post" class='form'>
                <div class="form-group">
                   <label for="email" class='form-label'>Enter Email:</label>
                   <input type="email" class='form-control' name='email' id='email' required>  
                </div>
                <div class="form-group my-3">
                <label for="password" class='form-label'>Enter Password:</label>
                <input type="password" class='form-control' name='password' id='password' required>
                </div>

                <button type='submit' class='btn btn-outline-primary'>Login</button>
            </form> 
        </div>
    </div>
</div>
    

<div class="container mb-5">
    <div class="row">
        <div class="col-6 mx-auto">
            <table class='table'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($db_users as $key => $val):?>
                        <tr>
                            <td><?= $val["id"]?></td>
                            <td><?= $val["email"]?></td>
                            <td><?= $val["password"]?></td>
                            <td><a href="./delete.php?id=<?=$val['id']?>" class='btn btn-danger'>Delete</a></td>
                        </tr>
<!-- #region -->
                        <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>
