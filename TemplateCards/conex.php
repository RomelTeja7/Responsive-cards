<?php 
$db_server = "localhost";
$db_name = "numsCards";
$db_user = "root";
$db_pass = "";

$con = new mysqli($db_server,$db_user, $db_pass, $db_name);
if($con->connect_error){
    die("Error de conexión: " . $conn->connect_error);
}
?>