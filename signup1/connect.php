<?php

$HOSTNAME='localhost';
$USERNAME='root';
$DATABASE='signupforms';
$PASSWORD='';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if(!$con){
    die(mysqli_error($con));
}

?>