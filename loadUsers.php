<?php

function loadUsers(){
    $db = mysqli_connect("127.0.0.1:4306","root","","it_vezba");
    $query = "SELECT * FROM users";
    $result = mysqli_query($db,$query);
    $users = [];

    foreach($result as $row){
        array_push($users,$row);

    }
  

    return $users;
   }



?>