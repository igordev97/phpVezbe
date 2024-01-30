<?php
 if(isset($_POST['email']) && isset($_POST['password']) && trim($_POST['email']) !== "" && trim($_POST['password']) !== ""){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $db = mysqli_connect("127.0.0.1:4306","root","","it_vezba");
    $query = "INSERT INTO users (email,password) VALUES ('$email','$password')";

    $result = mysqli_query($db,$query);
    if($result){
        echo "success";
        header("Location:./");
    }else{
        echo "Database Error";
    }
   }

   else{
    echo "Error - Not Valid Data";
   }

?>