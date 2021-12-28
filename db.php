<?php

//function: connect with database
function makeConnectionWithDatabase(){
    //lokale credentials: phpmyadmin
    /*$dbHost = "localhost";
    $dbUsername = "sorting_hat";
    $dbPassword = "ac110405@";
    $dbName = "Sorting_Hat";
    $dbPort = 8889;*/


    //Combell Credentials
    $dbHost = "ID362550_SortingHat.db.webhosting.be";
    $dbUsername = "ID362550_SortingHat";
    $dbPassword = "webisleuk123";
    $dbName = "ID362550_SortingHat";
    $dbPort = 3306;
    


    $conn = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);

    
    if ($conn==false){
        echo "connection failed";
        die();
        }

    return $conn;
}

function getQuery($conn,$query){
    $conn = makeConnectionWithDatabase();
    $result = mysqli_query($conn,$query);
    return $result->fetch_all(MYSQLI_ASSOC);
}



function insertQuery($conn,$query) {
    $conn = makeConnectionWithDatabase();
    $result = mysqli_query($conn,$query);
    return $result;
}


function closeConnection($conn){
    $conn->close();
}


