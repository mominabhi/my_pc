<?php
require 'employee.php';
$obj=new employee();
$employee_id=$_GET['id'];
$obj->delete_employee($employee_id);
