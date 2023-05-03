<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Client";
$conn=new mysqli($servername,$username,$password);
if($conn->connect_error){
    die("connection failed:" .$conn->connect_error);
}else{
    echo "connected succefully";
}
$conn->select_db($dbname);
$sql="SELECT *FROM client nom,email WHERE "
?>