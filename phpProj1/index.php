<?php

    // Message Vars
    $msg = '';
    $msgClass = '';


    // Check for Submit
    if(filter_has_var(INPUT_POST, 'submit')){
        // Get form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Check required fields
        if(!empty($name) && !empty($email) && !empty($message)){
            // Passed
            // Check email
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                // Failed
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            }
            else {
                // Passed
                $toEmail = 'boromirofgondar@gmail.com';
                $subject = 'Contact Request from ' . $name;
                $body =
                    '<h2>Contact Request</h2>' .
                    '<h4>Name</h4>' . "<p>$name</p>" .
                    '<h4>Email</h4>' . "<p>$email</p>" .
                    '<h4>Message</h4>' . "<p>$message</p>";

                // Email Headers
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8\r\n";

                // Additional Headers
                $headers .= "From: $name < $email >\r\n";

                // Send mail if it works.. ~ i.e. You have a Mail-Server setup on the server side.
                if(mail($toEmail, $subject, $body, $headers)){
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';
                }
                else {
                    // Failed
                    $msg = 'Your email was not sent';
                    $msgClass = 'alert-danger';
                }

            }


        }
        else {
            // Failed
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contact Us</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">

    </head>


    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">My Website</a>
                </div>
            </div>
        </nav>

        <div class="container">
            <?php if($msg != ''): ?>
                <div class="alert <?php echo $msgClass; ?>">
                    <?php echo $msg; ?>
                </div>
            <?php endif; ?>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo !empty($name) ? $name : ''; ?>">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo !empty($email) ? $email : ''; ?>">
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" class="form-control"><?php echo !empty($message) ? $message : ''; ?></textarea>
                </div>

                <br>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>





    </body>

</html>