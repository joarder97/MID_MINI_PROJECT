<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>REGISTRATION</legend>
            <table>
                <tr>
                    <td>Id</td>
                </tr>
                <tr>
                    <td><input type="text" name="id" value=""></td>
                </tr>
                <tr>
                    <td>Password</td>
                </tr>
                <tr>
                    <td><input type="password" name="pass" value=""></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                </tr>
                <tr>
                    <td><input type="password" name="confirmPass" value=""></td>
                </tr>
                <tr>
                    <td>Name</td>
                </tr>
                <tr>
                    <td><input type="text" name="uname" value=""></td>
                </tr>
                <tr>
                    <td>Email</td>
                </tr>
                <tr>
                    <td><input type="text" name="email" value=""></td>
                </tr>
                <tr>
                    <td>User Type [User/Admin]</td>
                </tr>
                <tr>
                    <td>
                        <Select name="userType">
                            <Option value="User">User</Option>
                            <Option value="Admin">Admin</Option>
                        </Select>
                    </td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Register" name="registerButton">
                        <a href="login.php">Login</a>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>

<?php

    if(isset($_POST["registerButton"])) {
       

        $id = $_POST["id"];
        $password = $_POST["pass"];
        $confirmPassword = $_POST["confirmPass"];
        $name = $_POST["uname"];
        $email = $_POST["email"];
        $userType = $_POST["userType"];

        if(empty($id) || empty($pass) || empty($confirmPass) || empty($uname) || empty($email)){
            echo "empty fields found. Please fill all the scopes and submit.";
        }
        else if($_POST["pass"] != $_POST["confirmPass"]) {
            echo "passwords don't match.";
        }
    }else{
    $sql = "SELECT idAdmin FROM adminsystem WHERE idAdmin=?";
    $stmt = mysqli_stmt_init($conn);
}   
            

?>