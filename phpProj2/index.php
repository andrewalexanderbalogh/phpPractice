<?php

    if(isset($_POST['submit'])){
        # Start the session
        session_start();    // *This needs to be done on every page that needs access to the session variables

        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);


        # Use the header function to go to another page
        header('Location: page2.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP Sessions</title>
        <meta charset="UTF-8">
        <script src=""></script>
        <link rel="stylesheet" href="">

    </head>


    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" name="name" placeholder="Enter Name">
            <br>
            <input type="text" name="email" placeholder="Enter Email">
            <br>
            <input type ="submit" name="submit" value="SubmiT">
        </form>

    </body>




</html>