<?php
        $firstname = $_GET["first_name"];
        $lastname = $_GET["last_name"];
        $gender = $_GET["gender"];
        $dbHost = "localhost";
        $dbUsername = "sorting_hat";
        $dbPassword = "ac110405@";
        $dbName = "Sorting_Hat";
        $dbPort = 8889;

        include "Assets/db/db.php";
        
        $conn = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName,$dbPort);

        if ($conn==false){
                echo "connection failed";
                die();
                }

        $query = "select * from Users where FirstName LIKE '$firstname' AND LastName like '$lastname' AND Gender like '$gender";
        $users = getQuery($conn,$query);

        
        if (sizeof($users)>0){
                header ("Location: http://localhost/exist.php");
        } else {
                insertQuery($conn, "INSERT INTO Users(FirstName,LastName,Gender) VALUES ('$firstname','$lastname','$gender');");

                header("Location: http://localhost:8888/succes.php");
        }

        $conn->close();

