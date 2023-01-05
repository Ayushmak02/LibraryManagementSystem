<?php
$insert = false;
if(isset($_POST['password']))
{
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);
    if(!$con)
    {
        die("Connection to this database failed due to ".mysqli_connect_error());
    }

    $uname = $_POST['uname'];
    $password = $_POST['password'];
    // $sql = "SELECT EXISTS(SELECT * from onlinelib.user WHERE pwd = $password and uname = $uname);"
    // $sql = "SELECT * from onlinelib.user WHERE pwd = $password and uname = $uname;";
    $sql = "INSERT INTO onlinelib.user values ('$password', '$uname';";
    if($con->query($sql) == true)
    {
        $insert = true;
    }
    $con->close();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Student Library</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <img class="bg" src="https://about.fb.com/wp-content/uploads/2019/03/newsroom-hero-image-password-security.png?fit=1440%2C988" alt="pass">
    <div class="container">
        <h1>PASSWORD</h1>
        <!-- <p>Enter the following details : </p> -->
        <?php
        if($insert == true)
        {
        echo "<p class='submitMsg'> DETAILS MATCHED.</p>";
        echo "<p class='submitMsg'><br>CLICK THE BUTTON TO ENTER : </p>";
        // include 'admin1.php';
        // echo "<a href ="admin1.html" ><button class="btn"> Back to Main Page</button></a>";
        }
         ?>
        <!-- <p class='submitMsg'> DETAILS MATCHED.</p>
        <p class='submitMsg'><br>CLICK THE BUTTON TO ENTER : </p>
        <a href ="admin1.html" ><button class="btn"> Back to Main Page</button></a> -->
        <!-- <form action="index.php" method="post">
            <input type="text" name="uname" id="uname", placeholder="Enter your username : ">
            <input type="password" id="pwd" name="pwd">
            <button class="btn">Check</button>
            <br>
        </form> -->
        <!-- <a href ="admin1.html" ><button class="btn"> Back to Main Page</button></a> -->
        <a href ="page1.html" ><button class="btn"> Back to Main Page</button></a>
    </div>
</body>
</html>