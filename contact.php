<?php
$server = "localhost";
$username = "root";
$password= " ";
$dbname = "contact";

$conection = mysqli_connect($server,$username,$password,$dbname);

if(!$conection) {
    echo "not connected";
} 
else {
    echo "connected";
}


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$sql = "INSERT INTO `contactus`(`firstname`, `lastname`) VALUES ('$firstname','$lastname')";

$result = mysqli_query($conection, $sql);

if($result)
{
    echo "data submited";
} else {
    echo "error";
}
?>