<?php

$course_name = "php";
$enrolled_students = 40;
$price = 35.0;
$on_discount = false;

// Output the course information
echo "Course title: $course_name<br>";
echo "Enrolled Students: $enrolled_students<br>";
echo "Course price: $price $ USD<br>";
echo "Course on discount: " . ($on_discount ? "Yes" : "No") . "<br>";
 ?>