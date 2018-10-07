<?php
include("config.php");

if (!array_key_exists('name', $_SESSION)) {
    header("Location: /practice/Portfolio/index.php");
}

$title = "Admin Portal";
$content = '<div class="text-center center">
        <h1 class="bold">'.$title.'</h1>
    </div>';

$site->display($content, $title);
