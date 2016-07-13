<?php

/**
 * @author LiveLong
 * @copyright 2015
 */

    session_start();
    session_destroy();
    
    header('Location: index.php');

?>