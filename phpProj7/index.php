<?php
    # Database configuration & connection file
    require('config/db.php');
    require('config/config.php');

    # Create Query
    $query = 'SELECT * FROM posts';

    # Get Result
    $result = mysqli_query($conn, $query);

    # Fetch Data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
                    <h2>Posts</h2>
                    <?php foreach($posts as $post): ?>
                        <div class="well">
                            <h3><?php echo $post['title']; ?></h3>
                            <small>Created on
                                <?php echo $post['created_at']; ?> by
                                <?php echo $post['author']; ?>
                            </small>
                            <p><?php echo $post['body']; ?></p>
                            <a class="btn btn-default" href="post.php?id=<?php echo $post['id']; ?>">Read More</a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </article>

        </main>

        <footer></footer>

    </body>


</html>
