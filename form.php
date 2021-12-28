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
                            Add a user
                        </h1>
                    </div>

                    

                    <hr>

                    <div>
                        <form action="add.php" method="GET" onsubmit = "return validateForm()">
                            <label for="first_name">
                                <b>First Name</b>
                            </label> <br>
                            <input type="text" id="first_name" name="first_name" value="" placeholder="enter your first name">

                            <br><br>

                            <label for="last_name">
                                <b>Last Name</b>
                            </label> <br>
                            <input type="text" id="last_name" name="last_name" value="" placeholder="enter your last name">

                            <br><br>

                            <label> 
                                <b>Gender</b>
                            </label for="gender"> <br>
                            <input type="radio" class="gender" name="gender" value="Male"> Male
                            <input type="radio" class="gender" name="gender" value="Female"> Female
                            <input type="radio" class="gender" name="gender" value="Other"> Other

                            <br><br>

                            <button type="submit">
                            Create a user
                            </button>

                            <button type="button" onclick="location.href='index.php'">
                            Back to main page
                            </button>
                            
                        </form>
                    </div>

                </div>

      

    </body>
</html>