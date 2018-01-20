<?php
    if (isset($_POST['submit'])){
        $username = htmlentities($_POST['username']);


        # This is the function to setup cookies
        setcookie('username', $username, time()+3600);  // expire in 1 hour

        # Use this to navigate to next page
        header('Location: page2.php');



    }



?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="">
        <script src=""></script>
    </head>

    <body>
        <main>
            <nav>
                <ul>
                    <li>Cookies</li>
                    <li>Cakes</li>
                    <li>Chocolate</li>
                </ul>

            </nav>

            <header>
                <p>Testing Cookies</p>
            </header>

            <section>
                <article>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <input type="text" name="username" placeholder="Enter Username">
                        <br>
                        <input type="submit" name="submit" value="Submitance">
                    </form>

                </article>

            </section>
            <footer>
                <address>
                    <a href="mailto:boromirofgondar@gmail.com">Warrior Boromir</a>
                </address>
                <p>Copyright &copy <?php echo date('Y/m/d'); ?></p>
            </footer>

        </main>
    </body>

</html>