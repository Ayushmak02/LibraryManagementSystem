<?php
$insert = false;
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);
    if(!$con)
    {
        die("Connection to this database failed due to ".mysqli_connect_error());
    }
        $sql = "SELECT  * from onlinelib.books;";
        $info = $con->query($sql);
        $insert = true;
    $con->close();
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
    <img class="bg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNBVZp3EXHDzSTJfpioP7ddXLyjNBSQi2BPA&usqp=CAU" alt="booklist">
    <div class="container">
        <h1>Book List</h1>
        <?php
        if($insert == true)
        {
        echo "<p class='submitMsg'>Details</p>";
         while($row = $info->fetch_assoc()){
            echo "<p class='submitMsg'>***********************************************************<br> ISBN : " . $row['ISBN'] . "<br>Book Name :" . $row['bookname']."<br>Author Name :".$row['author']."</p>";
           }
           echo "<p class='submitMsg'>***********************************************************<br>";
        }
         ?>
        <br>
        <br>
        <a href ="page1.html" ><button class="btn"> Back to Main Page</button></a>
    </div>
</body>
</html>