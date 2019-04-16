<?php
require 'classes/student.php';
$obj=new student();
$result=$obj->select_all_student();
?>
<html>
<head>
    <title>View Student</title>
</head>
<body>
    <table border="1" width="980px" height="1100px" align="center">
        <tr>
            <td width="150px" height="150px">LOGO</td>
            <td colspan="2">Banner</td>
        </tr>
        <tr>
            <td colspan="3" height="50px">
                <a href="add_student.php">Add Student</a>
                <a href="view_student.php">View Student</a>
            </td>

        </tr>
        <tr>
            <td>Left</td>
            <td valign="top">
              <h3 align="center">View Student</h3>
                <hr>
                <table border="1" align="center" width="90%">
                <tr>
                    <th>Student Name</th>
                    <th>Student Email</th>
                    <th>Student Mobile</th>
                    <th>Action</th>
                </tr>
                 <?php
                 while($row=mysqli_fetch_assoc($result)){
                 ?>
                <tr>
                    <td><?php echo $row['student_name'];?></td>
                    <td><?php echo $row['student_email'];?></td>
                    <td><?php echo $row['student_mobile'];?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['student_id'];?>">Edit</a> |
                        <a href="delete.php?id=<?php echo $row['student_id'];?>">Delete</a>
                    </td>
                </tr>
                    <?php } ?>
                </table>
            </td>
            <td width="150px">Right</td>
        </tr>
        <tr>
            <td colspan="3" height="80px">Footer</td>
        </tr>
    </table>
</body>
</html>
