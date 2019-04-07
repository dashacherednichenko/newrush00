<?php
    session_start();
    $_SESSION['instal'] = 1;
header('Location: index.php');
//    echo "Instal ready";
