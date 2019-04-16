<?php
require 'classes/student.php';
$obj=new student();
$student_id=$_GET['id'];
$result=$obj->student_info_by_id($student_id);
$student_info=mysqli_fetch_assoc($result);

if(isset($_POST['btn']))
{
    $obj->update_student($_POST);

}
?>
<html>
<head>
    <title>From With Crud</title>
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
            <h3 align="center">Edit Student</h3>
            <hr>
            <form method="post" action="">
                <table border="1" align="center" width="70%">
                    <tr>
                        <td>Student Name:</td>
                        <td>
                            <input type="text" maxlength="50" value="<?php echo $student_info['student_name']?>" name="student_name">
                            <input type="hidden" maxlength="50" value="<?php echo $student_info['student_id']?>" name="student_id">
                        </td>

                    </tr>
                    <tr>
                        <td>Student Mobile:</td>
                        <td>
                            <input type="text" maxlength="14" value="<?php echo $student_info['student_mobile']?>" name="student_mobile">
                        </td>

                    </tr>
                    <tr>
                        <td>Student Email:</td>
                        <td>
                            <input type="email" maxlength="255" value="<?php echo $student_info['student_email']?>" name="student_email">
                        </td>

                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="btn" value="Update">
                        </td>

                    </tr>
                </table>
            </form>
        </td>
        <td width="150px">Right</td>
    </tr>
    <tr>
        <td colspan="3" height="80px">Footer</td>
    </tr>
</table>
</body>
</html>
