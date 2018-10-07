<?php
    // TODO: maybe move this to an included php file?
    $home = '/practice/Portfolio/index.php';
    $loggedIn = false;

    if (array_key_exists('name', $_SESSION)) {
        $loggedIn = true;
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo $home; ?>"><img class="icon" src="https://s3-us-west-2.amazonaws.com/cdn-dkirschman/DK.png"/></a>
    <div class="navbar-collapse">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?php echo $home; ?>">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="projects.php">Projects</a>
            <a class="nav-item nav-link" href="about.php">About</a>
            <a class="nav-item nav-link" href="contact.php">Contact</a>
        </div>
    </div>
    <?php
        if ($loggedIn) {
            echo '<div class="justify-content-end" >
                <a class="nav-item nav-link" href = "logout.php" > Log Out </a >
            </div >';
        }
    ?>
</nav>