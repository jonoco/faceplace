<?php

    /**
     * config.php
     *
     * Configures pages.
     */

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("constants.php");
    require("functions.php");

    // enable sessions
    session_start();

    // require authentication for all pages except /login.php, /logout.php, /welcome.php, and /register.php
    if (!in_array($_SERVER["PHP_SELF"], ["/welcome.php", "/login.php", "/register.php", "/logout.php"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("welcome.php");
        }
    }

?>
