<?php
    // Start the session: needs to be done on all loaded pages needing session access
    session_start();
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
    $email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Sessions 3</title>
        <script scr=""></script>
        <link rel="stylesheet" href="">
    </head>

    <body>
        <h1>
            Hello <?php echo $name; ?>
        </h1>
    </body>
</html>
