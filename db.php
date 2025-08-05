<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "oneclickagriscience_db";

$conn = new mysqli($host, $user , $password , $db_name);

if($conn->connect_error)
{
    die("connection Failed" . conn->connect_error);
}
else
{
    echo ("connect Successfully");
}

return($conn);
?>