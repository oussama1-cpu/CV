<?php

$mysqli = new mysqli("localhost", "root", "", "cvdb");


 if ($mysqli->connect_error) { 


die($mysqli->connect_error);


}
?>