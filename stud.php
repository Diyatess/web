<?php

$student_names = array("Sandy", "Kavya", "Jisha", "Jacob");
echo"<h3><b>Students names..</b></h3>";
print_r($student_names);
echo "<br>";
asort($student_names);
echo "<br> <h3><b>asort function:</b></h3>";
print_r($student_names);
arsort($student_names);
echo "<br> <h3><b>arsort:</b></h3>";
print_r($student_names);

?>