<?php
    // Start the session: needs to be done on all loaded pages needing session access
    session_start();
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Sessions 2</title>
        <script src=""></script>
        <link rel="stylesheet" href="">
    </head>

    <body>
        <h5>
            Thank you <?php echo $name; ?>, You have subscribed with the
            email <?php echo $email; ?>
        </h5>
    <a href="page3.php">Go to page 3</a>
    </body>

</html>