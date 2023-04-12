<?php
$insert = false;
if (isset($_POST["name"])) {
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);
    
    //Check for connection success
    if (!$con) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    //  echo "Success connecting to the db";

    //Collect post variables
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $mobilenumber = $_POST["mobilenumber"];
    $email = $_POST["email"];
    $sql = "INSERT INTO `power_zone`.`registration` (`name`, `age`, `gender`, `mobilenumber`, `email`) 
    VALUES ('$name', '$age', '$gender', '$mobilenumber', '$email');";
    // echo $sql;

    if ($con->query($sql) == true) {
        // echo "Successfully inserted";

        //Flag for successful insertion
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }
    
    // Close the database connection
    $con->close();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Power Zone </title>
</head>
<link rel="stylesheet" href="css/style.css">
<style>
    body {
        color: rgb(22, 221, 221);
        margin: 0px;
        padding: 0px;
        background: url("man-g974710382_1920.jpg");
        background-attachment: fixed;
        height: 1000px;
    }

    .left {
        display: inline-block;
        /* border: 2px solid red; */
        position: absolute;
        left: 23px;
        top: 8px;
    }

    .left img {
        width: 90px;
    }

    .mid {
        display: block;
        width: 65%;
        margin: 28px 190px;
        /* border: 2px solid yellow; */
    }

    .right {
        position: absolute;
        width: 200px;
        right: 4px;
        top: 38px;

        display: inline-block;
        /* border: 2px solid blue; */
    }

    .navbar {
        display: inline-block;
    }

    .navbar li {
        display: inline-block;
        font-size: 25px;
    }

    .navbar li a {
        color: #1ec9a4;
        text-decoration: none;
        text-align: center;
        display: block;
        padding: 29px 6px;
        width: 121%;
        margin: -39px 31px;
    }

    .navbar li a:hover,
    .navbar li a.active {
        text-decoration: underline;
        color: rgb(180, 201, 173);
    }

    .btn {
        margin: 1px 9px;
        padding: 5px 5px;
        border: 8px solid rgb(23, 204, 189);
        border-radius: 20px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: rgb(173, 194, 190);
    }

    .container {
        /* border: 2px solid yellow; */
        color: rgb(10, 232, 240);
        margin: 100px 57px;
        padding: 70px 21px;
        width: 34%;
        border-radius: 22px;
    }

    .form-group input {
        text-align: center;
        display: block;
        width: 270px;
        padding: 4px;
        /* border: 2px solid rgb(252, 23, 23); */
        margin: 4px auto;
        font-size: 18px;
        border-radius: 24px;
    }

    .container h1 {
        text-align: center;
    }

    .container button {
        text-align: center;
        display: block;
        width: 70%;
        margin: 20px auto;
    }

    .Submitmsg {
        color: greenyellow;
        margin: 24px;
        font-size: 20px;
        width: 100%;
        text-align: center;
    }
</style>

<body>
    <header class="header">
        <div class="left">

            <div class="left">
                <img src="istockphoto-1334162226-1024x1024.jpg" alt="">
                <div> Power Zone </div>
            </div>
        </div>
        <div class="mid">
            <ul class="navbar">
                <li> <a href="#">Home</li>
                <li> <a href="#">About us</li>
                <li> <a href="#">Fitness Calculator</li>
                <li> <a href="#">Contact us</li>
            </ul>

        </div>
        <div class="right">
            <button class="btn">Call Us</button>
            <button class="btn">Email US</button>

        </div>
    </header>
    <div class="container">
        <h1> Join the best Gym</h1>
        <form action="index.php" method="post">
            <div class="form-group">
                <input type="text" name="name" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <input type="text" name="age" id="age" placeholder="Enter your age">
            </div>
            <div class="form-group">
                <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            </div>
            <div class="form-group">
                <input type="text" name="mobilenumber" id="mobilenumber" placeholder="Enter your mobilenumber">
            </div>
            <div class="form-group">
                <input type="text" name="email" id="email" placeholder="Enter your email">
            </div>
            <button class="btn">Submit</button>

        </form>

        <?php
        if ($insert == true) {
            echo "<p class='Submitmsg'>Thanks for submitting your form.</p>";
        }
        ?>

    </div>

</body>

</html>