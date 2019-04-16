<?php
require 'employee.php';
$obj=new employee();

if(isset($_POST['btn']))
{
    $message=$obj->insert($_POST);

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
            <?php
            if(isset($message))
            {
            ?>
            <h3 align="center" style="color: green">
             <?php echo $message; ?>
            </h3>
            <?php }?>
            <form method="post" action="">
                <table border="1" align="center" width="70%">
                    <tr>
                        <th colspan="2">EMPLOYEE INFORMATION </th>
                    </tr>
                    <tr>
                        <td>Employee Name:</td>
                        <td>
                            <input maxlength="50" type="text" name="employee_name">
                        </td>
                    </tr>
                    <tr>
                        <td>Employee Email:</td>
                        <td>
                            <input maxlength="255" type="text" name="employee_email">
                        </td>
                    </tr>
                    <tr>
                        <td>Employee Mobile:</td>
                        <td>
                            <input maxlength="14" type="text" name="employee_mobile">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="btn" value="SAVE EMPLOYEE"></td>
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

