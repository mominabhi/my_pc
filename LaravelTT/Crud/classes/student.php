<?php

class student
{
  public function __construct()
  {
     $hostName="localhost";
     $userName="root";
     $password="";
     $dbName="db_student_info";
     $this->conn=mysqli_connect($hostName,$userName,$password,$dbName);
     if($this->conn)
     {
        echo "database connected";
     }
     else
     {
         echo "database not connected";
     }
  }

  public function save_student($data)
  {
    $query="INSERT INTO tbl_student(student_name,student_email,student_mobile) VALUES('$data[student_name]','$data[student_email]','$data[student_mobile]')";
    mysqli_query($this->conn,$query);
    $message="Save student information successfully!!";
    return $message;

  }
  public function select_all_student()
  {
      $query="SELECT * FROM tbl_student";
      $result=mysqli_query($this->conn,$query);
      return $result;
  }
  public function delete_student_info($student_id)
  {
      $query="DELETE FROM tbl_student WHERE student_id='$student_id'";
      $result=mysqli_query($this->conn,$query);
      header("location:view_student.php");
  }
  public function student_info_by_id($student_id)
  {
      $query="SELECT * FROM tbl_student WHERE student_id='$student_id'";
      $result=mysqli_query($this->conn,$query);
      return $result;

  }
  public function update_student($data)
  {
      $query="UPDATE tbl_student SET student_name='$data[student_name]',student_mobile='$data[student_mobile]',student_email='$data[student_email]' WHERE student_id='$data[student_id]'";
      mysqli_query($this->conn,$query);
      header("location:view_student.php");

  }


}