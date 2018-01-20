<?php
    // Start the session: needs to be done on all loaded pages needing session access
    session_start();
    unset($_SESSION['name']);

    # Running this will kill off the session values that were set
    // session_destroy();
?>