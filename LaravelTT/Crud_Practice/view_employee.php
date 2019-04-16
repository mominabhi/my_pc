<?php
require 'employee.php';
$obj=new employee();
$result=$obj->view_employee();
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
                        <th colspan="4">EMPLOYEE INFORMATION </th>
                    </tr>
                    <tr>
                        <th>Employee Name</th>
                        <th>Employee Email</th>
                        <th>Employee Mobile</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    while($row=mysqli_fetch_assoc($result))
                    {
                    ?>
                    <tr>
                        <td><?php echo $row['employee_name']?></td>
                        <td><?php echo $row['employee_email']?></td>
                        <td><?php echo $row['employee_mobile']?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['employee_id']?>">Edit</a> |
                            <a href="delete.php?id=<?php echo $row['employee_id']?>">Delete</a>
                        </td>
                    </tr>
                    <?php }?>
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

