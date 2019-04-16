<?php


class employee
{
  public function __construct()
  {
      $hostName="localhost";
      $userName="root";
      $password="";
      $dbName="db_employee";
      $this->conn=mysqli_connect($hostName,$userName,$password,$dbName);

//      if($this->conn)
//      {
//        echo "database connected";
//      }
//      else{
//          echo "database not connected";
//      }

  }

  public function insert($data)
  {
      $query="INSERT INTO tbl_employee(employee_name,employee_email,employee_mobile) VALUES('$data[employee_name]','$data[employee_email]','$data[employee_mobile]')";
      mysqli_query($this->conn,$query);
      $message="Information Storage Successfully";
      return $message;
  }
  public function view_employee()
  {
      $query="SELECT * FROM tbl_employee";
      $result=mysqli_query($this->conn,$query);
      return $result;
  }
  public function delete_employee($employee_id)
  {
      $query="DELETE FROM tbl_employee WHERE employee_id='$employee_id'";
      mysqli_query($this->conn,$query);
      header("location:view_employee.php");
  }
    public function select_employee($employee_id)
    {
        $query="SELECT * FROM tbl_employee WHERE employee_id='$employee_id'";
        $result=mysqli_query($this->conn,$query);
        return $result;
    }
    public function edit_employee($data)
    {
        $query="UPDATE tbl_employee SET employee_name='$data[employee_name]',employee_email='$data[employee_email]',employee_mobile='$data[employee_mobile]' WHERE employee_id='$data[employee_id]'";
        mysqli_query($this->conn,$query);
        header('location:view_employee.php');
    }

}
