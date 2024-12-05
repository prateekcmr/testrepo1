<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Registration Form</title>
</head>
<body>
    <h1>Register here</h1>

    <form method="post">
        <input type="text" name="name" required placeholder="Enter your name" /><br><br/>
        <input type="date" name="dob" id='birthDate' required min="1985-01-01" title="Select your dob" /><br><br/>
        <input type="radio" name="gen" value="Male" />Male&emsp;
        <input type="radio" name="gen" value="Female" />Female<br><br/>

        <input type="submit" name="register" value="Register" />
    </form>
</body>
</html>

<script type="text/javascript">
$(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();

    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;    
    $('#birthDate').attr('max', maxDate);
});    
</script>    

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