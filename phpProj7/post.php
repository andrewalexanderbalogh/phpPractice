<?php
    # Database configuration & connection file
    require('config/db.php');
    require('config/config.php');

    # Get ID of post, as set in URL query string
    // we use the mysqli_real_escape_string function to clean the query of potential SQL-Injection attacks
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    # Create Query w.r.t a specific Id
    $query = "SELECT * FROM posts WHERE id =$id";

    # Get Result
    $result = mysqli_query($conn, $query);

    # Fetch Data ~ as an associative array
    $post = mysqli_fetch_assoc($result);

    # Free Result (from memory)
    mysqli_free_result($result);

    # Close Connection
    mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Blog</title>
        <link rel="stylesheet" href="../phpProj4/css/bootstrap.min.css"
    </head>

    <body>
        <header>
            <h1>MYSQL Access</h1>
        </header>

        <main>
            <article>
                <div class="container">
                    <a href="index.php" class="btn btn-default">Back</a>
                    <h2><?php echo $post['title']; ?></h2>
                    <small>Created on
                        <?php echo $post['created_at']; ?> by
                        <?php echo $post['author']; ?>
                    </small>
                    <p><?php echo $post['body']; ?></p>

                </div>
            </article>

        </main>

        <footer></footer>

    </body>


</html>
