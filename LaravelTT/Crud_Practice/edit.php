<?php
require 'employee.php';
$employee_id=$_GET['id'];
$obj=new employee();
$result=$obj->select_employee($employee_id);
$row=mysqli_fetch_assoc($result);

if(isset($_POST['btn']))
{
  $obj->edit_employee($_POST);
}
?>
<html>
<head>
    <title>Employee Profile</title>
</head>
<body>
<table border="1" width="980px" height="600px" align="center">
    <tr>
        <td colspan="3" height="50px">
            <button><a href="add_employee.php" style="text-decoration:none">Add Employee</a></button>
            <button><a href="view_employee.php" style="text-decoration: none">View Employee</a></button>
        </td>
    </tr>
    <tr>
        <td width="150px">Left</td>
        <td valign="top">
            <form method="post" action="">
                <table border="1" align="center" width="70%">
                    <tr>
                        <th colspan="2">EDIT EMPLOYEE INFORMATION </th>
                    </tr>
                    <tr>
                        <td>Employee Name:</td>
                        <td>
                            <input maxlength="50" type="text" name="employee_name" value="<?php echo $row['employee_name']?>">
                            <input maxlength="50" type="hidden" name="employee_id" value="<?php echo $row['employee_id']?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Employee Email:</td>
                        <td>
                            <input maxlength="255" type="text" name="employee_email" value="<?php echo $row['employee_email']?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Employee Mobile:</td>
                        <td>
                            <input maxlength="14" type="text" name="employee_mobile" value="<?php echo $row['employee_mobile']?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="btn" value="EDIT EMPLOYEE"></td>
                    </tr>

                </table>
            </form>

        </td>
        <td width="150px">Right</td>
    </tr>
    <tr>
        <td colspan="3" height="50" align="center">&copy Md.Mominuz Zaman</td>
    </tr>
</table>
</body>
</html>

