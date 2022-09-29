<?php
    session_start();

    echo $_SESSION['teste'];

    session_destroy();

?>