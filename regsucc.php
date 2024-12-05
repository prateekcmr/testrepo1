<?php
session_start();

$name = $_SESSION["myname"];
$dob = $_SESSION['mydob'];
$gender = $_SESSION["mygender"];
?>

<h2>My details</h2>
<table border="1">
    <tr>
        <th>Name</th>
        <td><?php echo $name ?></td>
    </tr>    

    <tr>
        <th>Date of birth</th>
        <td><?php echo $dob ?></td>
    </tr>

    <tr>
        <th>Gender</th>
        <td><?php echo $gender ?></td>
    </tr>
</table><br><br>

Click <a href="register.php">here</a> to go back