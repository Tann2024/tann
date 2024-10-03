<?php
$con=new mysqli('localhost' , 'root' , '' , 'tbl_postrero');

if(!$con){
    die(mysqli_error($con));
}

?>