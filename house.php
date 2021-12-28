<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="Assets/CSS/index.css" rel="stylesheet" type="text/CSS">
    </head>

    <body>
       
  
        <div id="main-container">

            <div id="heading">
                <h1>
                    Putt person in house 
                </h1>
            </div>

            <div id="data">
                <ul>
                    <?php
                    include "Assets/db/db.php";

                    $conn = makeConnectionWithDatabase();

                    
                    $users = getQuery($conn,"select * from Users");

                    
                    foreach($users as $user){
                    ?>
                        <li> <?php echo $user["FirstName"]." ".$user["LastName"];
                        ?> 
                        </li>
                        <?php
                        
                    }

                    closeConnection($conn);
                    ?>
                            
                </ul>

                <button type="submit" name="house" value="1">
                This is a Ravenclaw!
                </button>

                <button type="submit" name="house" value="2">
                This is a Slytherin!
                </button>

                <button type="submit" name="house" value="3">
                This is a Hufflepuff!
                </button>

                <button type="submit" name="house" value="3">
                This is a Gryffindor!
                </button>

                <br>

                <button type="button" onclick="location.href='index.php'">
                    Back to main page
                </button>

                <button type="button" onclick="location.href='form.php'">
                    Add another user
                </button>

            </div>
            

        </div>
        
        

        <script src="Assets/JS/index.js"></script>
        
    </body>
</html>