<?php
$server = "localhost";
$username = "root";
$password= "";
$dbame = "contact";

$conection = msqli_connect($server,$username,$password,$dbame);

if(!$conection){
    echo "not connected";
} else{
    echo "connected"
}


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$sql = "INSERT INTO `contactus`(`firstname`, `lastname`) VALUES ('$firstname','$lastname')";

$result = msqli_query($conection, $sql);

if($result)
{
    echo "data submited";
} else {
    echo "error";
}
?>