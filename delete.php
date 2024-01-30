<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $db = mysqli_connect("127.0.0.1:4306","root","","it_vezba");
    $query = "DELETE FROM users WHERE id = $id";

    $result = mysqli_query($db,$query);
    if($result){
        echo "success";
        header("Location:./index.php");
    }else{
        echo "error";
    }
}



?>