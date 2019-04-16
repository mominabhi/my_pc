<?php
require 'classes/student.php';
$obj=new student();
$student_id=$_GET['id'];
$obj->delete_student_info($student_id);