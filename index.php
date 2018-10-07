<?php
    include("config.php");

    $title = "David Kirschman";
    $content = '<div class="text-center center">
        <img class="logo" src="https://s3-us-west-2.amazonaws.com/cdn-dkirschman/DavidKirschman.png"/>
        <h2 class="bold">Software Engineer</h2>
        <br>
        <p>Welcome to the home of my tinkers!</p>
        <p><a href="https://github.com/kadivadavidak">My projects</a> </p>
    </div>';

    $site->display($content, $title);
