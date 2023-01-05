<?php
$insert = false;
if(isset($_POST['ISBN']))
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);
    if(!$con)
    {
        die("Connection to this database failed due to ".mysqli_connect_error());
    }
    $ISBN = $_POST['ISBN'];
    $bookname = $_POST['bookname'];
    $author = $_POST['author'];
    $s = "INSERT INTO onlinelib.books VALUES ('$ISBN', '$bookname', '$author');";
    if($con->query($s) == true)
    {
        $insert = true;
    }

    $s2 = "SELECT * from onlinelib.books where ISBN = '$ISBN';";
    $info = $con->query($s2);
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
    <img class="bg" src="data:image/png;base64,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" alt="add">
    <div class="container">
        <h1>ADMIN</h1>
    <?php
        if($insert == true)
        {
        echo "<p class='submitMsg'>Book Details</p>";
         while($row = $info->fetch_assoc())
         {
            echo "<p class='submitMsg'>***************************************************<br> ISBN : " . $row['ISBN'] . "<br>Book Name :" . $row['bookname']."<br>Author :".$row['author']."</p>";
           }
           echo "<p class='submitMsg'>***********************************************************<br>";
        }
         ?>
        <br>
        <a href ="admin1.html" ><button class="btn"> Back to Admin Page</button></a>
        <br>
        <br>
        <a href ="page1.html" ><button class="btn"> Back to Main Page</button></a>
    </div>
</body>
</html>