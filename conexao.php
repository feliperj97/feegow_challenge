<?php

$conn = new Mysqli("localhost", "root", "", "db_teste");
if($conn->connect_error){
    echo "Error: " . $conn->connect_error;
}



?>