<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h1>Register here</h1>

    <form method="post">
        <input type="text" name="name" required placeholder="Enter your name" /><br><br/>
        <input type="date" name="dob" required title="Select your dob" /><br><br/>
        <input type="radio" name="gen" value="Male" />Male&emsp;
        <input type="radio" name="gen" value="Female" />Female<br><br/>

        <input type="submit" name="register" value="Register" />
    </form>
</body>
</html>

<?php
    session_start();

    if(isset($_POST["register"]))
    {
        $name = $_POST["name"];
        $dob = $_POST['dob'];
        $gender = $_POST["gen"];

        if(strlen($name) < 3)
        {
            echo "<script>alert('Please input a longer name'); location.href='register.php'; </script>";
        }

        else if($gender == "")
        {
            echo "<script>alert('Please select a gender'); location.href='register.php'; </script>";
        }

        else
        {
            $_SESSION["myname"] = $name;
            $_SESSION["mydob"] = $dob;
            $_SESSION['mygender'] = $gender;

            echo "<script>alert('User $name registered successfully'); location.href='regsucc.php'; </script>";
        }
    }
?>