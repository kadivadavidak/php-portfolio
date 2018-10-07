<?php
    session_start();
    unset($_SESSION['name']);
    header("Location: /practice/Portfolio/index.php");