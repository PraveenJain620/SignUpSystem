<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='password';
$DATABASE='signuppage';

$con = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if(!$con)
{
    die(mysqli_error($con));
}
?>