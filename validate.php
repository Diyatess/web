

<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form  method="post">
        <label>Username:</label>
        <input type="text" name="username" />
        <br><br>
        <label>Email:</label>
        <input type="email" name="email" />
        <br><br>
        <label>Password:</label>
        <input type="password" name="password" />
        <br><br>
        <label>Confirm Password:</label>
        <input type="password" name="confirm_password" />
        <br><br>
        <input type="submit" name="register" value="Register" />
    </form>
</body>
</html>

<?php
if(isset($_POST['register']))
{
    // get values
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    // do validations
    if(empty($username) || empty($email) || empty($password) || empty($confirm_password))
    {
        echo "All fields are required.";
    }
    else
    {
        if($password != $confirm_password)
        {
            echo "Passwords don't match.";
        }
       
    }
}

?>