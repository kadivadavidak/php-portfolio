<?php
include("config.php");

$title = "David Kirschman";
$content = '<div class="text-center center">
        <h1 class="bold">Projects</h1>
        <br>
        <div class="card-deck">
            <a href="https://github.com/kadivadavidak/joke">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="assets/images/code.png" alt="Card image cap">
                    <h5 class="card-title">Jokes</h5>
                    <div class="card-body">
                        <p class="card-text">joke is a joke generation app for your entertainment. All jokes are family safe (as far as I have seen).</p>
                        <p>Uses the icanhazdadjoke.com joke API to get random jokes.</p>
                    </div>
                </div>
            </a>
            <a href="https://github.com/kadivadavidak/sportsstore2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="assets/images/code.png" alt="Card image cap">
                    <h5 class="card-title">Sports Store</h5>
                    <div class="card-body">
                        <p class="card-text">A sports store application built using .Net Core. This is a work in progress.</p>
                    </div>
                </div>
            </a>
            <a href="https://github.com/kadivadavidak/tinyuniversity">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="assets/images/code.png" alt="Card image cap">
                    <h5 class="card-title">Tiny University</h5>
                    <div class="card-body">
                        <p class="card-text">A university course management application built using .Net Core.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>';

$site->display($content, $title);
