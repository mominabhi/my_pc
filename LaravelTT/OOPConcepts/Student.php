<?php
include 'Teacher.php';

class Student extends Teacher
{
 public function addition($x,$y)
 {
     $z=$x+$y;
     echo "addition Result: ".$z;
     $this->div();
 }
 private function subtruction($x, $y)
 {
     $z=$x-$y;
     echo  "subtruction Result: ".$z;


 }
 protected function mul($x,$y)
 {
     $z=$x*$y;
     echo "multiplication Result: ".$z;
 }

}
$obj=new Student();
$obj->addition(4,6);