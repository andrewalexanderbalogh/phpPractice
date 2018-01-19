<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>HTML Basics</title>
        <script src="js/modernizr.js"></script>
        <script src="js/siteload.js"></script>
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <p> For your browser type of;
            <span id="agenta"><?php echo $_SERVER['HTTP_USER_AGENT']; ?></span>
        </p>
        <p>The verdict of the check was...
            <span id="result"></span>
        </p>
    </body>

</html>