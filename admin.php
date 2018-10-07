<?php

    // TODO: Route to admin page if already authenticated

    include "config.php";
    include "login.php";

    $title = "Admin";
    $content = '<form method="POST" action="">
    <?php echo $errorHtml; ?>
    <div class="form-group">
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Username">
    </div>
        <div class="form-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Log In</button>
    </form>';

    $site->display($content, $title);
