<?php
$teacher=array(array("user"=>"nisha","pass"=>"123"),array("user"=>"manu","pass"=>"123"));
$student=array(array("user"=>"amala","pass"=>"123"),array("user"=>"archana","pass"=>"123"),array("user"=>"kavya","pass"=>"123"));
?>
<html>
    <title>Library Management System</title>
    <style>
        body{
            background-color:rgba(120,345,23,0.0587);
        }
        td,th{
            text-align:center;
        }
    </style>
    <body>
        <center>
            <h3>Library Management System</h3>
            <h4>Login</h4>
            <form method="post">
                <table cellpadding="10" width="40%">
                    <tr>
                        <td>Username :</td>
                        <td><input type="text" name="user"></td>
                    </tr>
                    <tr>
                        <td>Password :</td>
                        <td><input type="text" name="pass"></td>
                    </tr>
                </table>
                <input type="submit" value="login" name="sub">
            </form>
        </center>
        <?php
        if(isset($_POST['sub']))
        {
            foreach($teacher as $users)
            {
                if(($users['user']==$_POST['user']) && ($users['pass']==$_POST['pass']))
                {
        ?>
                <center>
                    <h3>Welcome <?php echo $_POST['user']; ?></h3>
                    <table cellpadding="10" width="40%">
                        <tr><th>Name of Book</th></tr>
                        <tr><td>Linux Basics For Hackers</td></tr>
                        <tr><td>How Linux Works</td></tr>
                        <tr><td>Linux Commadline</td></tr>
                        <tr><td>Operating System Concepts</td></tr>
                        <tr><td>Advance Data Structures</td></tr>
                    </table>
                </center>
        <?php
                }
            }
            foreach($student as $users)
            {
                if(($users['user']==$_POST['user']) && ($users['pass']==$_POST['pass']))
                {
        ?>
                <center>
                <h3>Welcome <?php echo $_POST['user']; ?></h3>
                    <table cellpadding="10" width="40%">
                        <tr><th>Name of Books that can be issued</th></tr>
                        <tr><td>How Linux Works</td></tr>
                        <tr><td>Operating System Concepts</td></tr>
                        <tr><td>Advance Data Structures</td></tr>
                    </table>
                </center>
        <?php
                }
            }
        }
        ?>
    </body>
</html>
