<?php
include('./class/Student.php');     
$body = file_get_contents("php://input");       //body of the request
$js_decoded = json_decode($body, true);         //json to associative array

$student = new Student();                       //new istance of Student

//insert values of the associative array into the Student obj
$student->_name = $js_decoded["_name"];
$student->_surname = $js_decoded["_surname"];
$student->_sidiCode = $js_decoded["_sidiCode"];
$student->_taxCode = $js_decoded["_taxCode"];

$js_encode = json_encode(array('state'=>TRUE, 'student'=>$student),true);
header("Content-Type: application/json");
echo($js_encode);
?>
