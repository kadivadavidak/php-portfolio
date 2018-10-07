<?php
include("config.php");

$title = "About me";
$content = '<div class="text-center center">
        <h1 class="bold">'.$title.'</h1>
        <br>
        <p>Let\'s start with the basics, shall we? I am a Software Engineer with 5+ years experience in various capacities from Webmaster to BI Developer - neck deep in SQL, reports and dashboards - to Full-stack Developer in languages such as C# and PHP. I have spent the majority of my working career heavily involved with the back-end of things, navigating databases, APIs and application logic. I have more recently been working on honing my front-end skills to round out my full-stack skill set. I am a perpetual learner, and love new challenges that I can tackle and new puzzles to solve.</p>
        <br>
        <p>When I am not studying, working or renovating my century-old home, I enjoy skateboarding, longboarding and snowboarding. I am also a casual runner and occasionally run one of the local races. I am a technology nut and am constantly reading about the latest devices and live for the rumored upcoming tech.</p>
        <br>
        <p>Let me know if you have questions! I\'d love to chat!</p>
        <a class="nav-item nav-link" href="contact.php">Send me a message!</a>
    </div>';

$site->display($content, $title);
