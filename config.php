<?php
    session_start();
    // This should calculate the current browser timezone, rather than choosing one. This is done for simplicity.
    date_default_timezone_set('America/Denver');
    $date = date("Y-m-d h:i:sa");
    if (!isset($_COOKIE['current_date'])) {
        setcookie('current_date', $date);
        $_COOKIE['current_date'] = $date;
    }

    if (!isset($_COOKIE['previous_date'])) {
        setcookie('previous_date', $date);
        $_COOKIE['previous_date'] = $date;
    } else {
        setcookie('previous_date', $_COOKIE['current_date']);
        $_COOKIE['previous_date'] = $_COOKIE['current_date'];
    }
    setcookie('current_date', $date);

    function __autoload($class) {
        include "classes/" . $class . ".php";
    }

    $site = new Site;
    $site->addHeader("header.php");
    $site->addFooter("footer.php");

    $page = new Page;