<?php
require 'classes/student.php';
$obj=new student();

if(isset($_POST['btn']))
{
    $message=$obj->save_student($_POST);
}
else
{
    echo "there is no value here";
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
              <h3 align="center">Add Student</h3>
                <hr>
                <?php
                if(isset($message)){
                ?>
                <h3 align="center" style="color: green">
                    <?php
                    echo $message;
                    unset($message);
                    ?>
                </h3>
                <?php }?>
                <form method="post" action="">
                    <table border="1" align="center" width="70%">
                        <tr>
                            <td>Student Name:</td>
                            <td>
                                <input type="text" maxlength="50" name="student_name">
                            </td>

                        </tr>
                        <tr>
                            <td>Student Mobile:</td>
                            <td>
                                <input type="text" maxlength="14" name="student_mobile">
                            </td>

                        </tr>
                        <tr>
                            <td>Student Email:</td>
                            <td>
                                <input type="email" maxlength="255" name="student_email">
                            </td>

                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="btn" value="Save">
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
