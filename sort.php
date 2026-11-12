<?php
echo"sorting array<br>";
echo"............<br>";
$stud=array("nidhi","sreelekshmi","arya","riya","chirsty");
echo"displaying array using print_r():";
print_r($stud);
echo"<br>array in aascending order:<br>";
asort($stud);
print_r($stud);
echo"<br>array in descending order:<br>";
arsort($stud);
print_r($stud);
?>