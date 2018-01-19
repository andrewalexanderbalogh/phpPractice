<!DOCTYPE html>
<html>
    <?php
        # If not present, page will still load
        include 'phpLib/header.php';
        # Will make rest of page load fail if not present
        //require 'phpLib/header.php'
        # Will make sure that if page was already included, it is not again included
        require_once 'phpLib/header.php';
    ?>
    <body>
        <?php include 'phpLib/listing.php'?>

        <h1 id="hitB">Home</h1>

        <?php include 'phpLib/footer.php'?>


        <?php include 'phpLib/superGlobals.php'; ?>
        <h2>Server & File Info</h2>

        <?php if($server): ?>
            <ul class="list-group">
                <?php foreach($server as $key => $value): ?>
                    <li class="list-group-item">
                        <strong><?php echo $key; ?></strong>
                        <em><?php echo $value; ?></em>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <h3>Client Info</h3>
        <?php if($client): ?>
            <ul class="list-group">
                <?php foreach ($client as $key => $value): ?>
                    <li class="list-group-item">
                        <strong><?php echo $key; ?></strong>
                        <em><?php echo $value; ?></em>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

    </body>
</html>