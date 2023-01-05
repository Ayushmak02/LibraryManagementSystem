<?php
$insert = false;
$insert1 = false;
if(isset($_POST['ch']))
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);
    if(!$con)
    {
        die("Connection to this database failed due to ".mysqli_connect_error());
    }
    $ch = $_POST['ch'];
    if($ch ==1)
    {
        $sql = "SELECT  * from onlinelib.books;";
        $info = $con->query($sql);

        $insert1 = true;
    }
    elseif($ch ==2)
    {
        $sql = "SELECT * from onlinelib.student;";
        $info = $con->query($sql);
        $insert = true;
    }
    elseif($ch ==3)
    {
        $sql = "SELECT * from onlinelib.student where returndate<current_timestamp();";
        $info = $con->query($sql);
        $insert = true;
    }
    else
    {
        echo "Error";
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
    <img class="bg" src="data:image/png;base64,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" alt="admin">
    <div class="container">
        <h1>ADMIN</h1>
        <?php
        if($insert == true)
        {
        echo "<p class='submitMsg'>Details</p>";
         while($row = $info->fetch_assoc()){
            echo "<p class='submitMsg'>***********************************************************<br> Enrollment number : " . $row['eno'] . "<br>Name :" . $row['name']."<br>Book :".$row['book']."<br>Issuedate :".$row['issuedate']."<br>Returndate :".$row['returndate']."</p>";
           }
        }
        if($insert1 == true)
        {
        echo "<p class='submitMsg'>Details</p>";
         while($row = $info->fetch_assoc()){
            echo "<p class='submitMsg'>************************************************************<br> ISBN  :" . $row['ISBN'] . "<br>Book Name :" . $row['bookname']."<br>Author :".$row['author']."</p>";
           }
        }
        echo "<p class='submitMsg'>***********************************************************<br>";

         ?>
        <a href ="admin1.html" ><button class="btn"> Back to Admin Page</button></a>
        <br>
        <br>
        <a href ="page1.html" ><button class="btn"> Back to Main Page</button></a>
    </div>
</body>
</html>