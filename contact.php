<?php
include("config.php");
include "email.php";

$title = "David Kirschman";
// TODO: make this actually send an email
$content = '<div class="text-center center">
        <h1 class="bold">Shoot me a message!</h1>
        <br>
        <form form action="" method="POST">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="John" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Doe" required>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="john@doe.com" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>';

$site->display($content, $title);
