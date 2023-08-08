<?php
require_once "lib/menu.php";
require_once  "lib/config.php";
require_once "lib/pdo.php";

//recupère le nom de la page sur le serveur
$currentPage = basename($_SERVER["SCRIPT_NAME"]);
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?=$mainMenu[$currentPage]["meta_description"] ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="assets/css/override-bootstrap.css" rel="stylesheet">
    <!----recupère le titre de page courante --->
    <title><?php echo $mainMenu[$currentPage]["head_title"]  ?></title>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img src="assets/images/logo-tech-trendz.png" class="img-fluid" alt="logo de bookstudi">
        </a>

        <ul class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <?php foreach ($mainMenu as $key => $menuItem) {
                if (!array_key_exists("exclude", $menuItem)) {
                    ?>
                    <li class="nav-item"><a href="<?=$key; ?>" class="nav-link px-2 <?php
                        if ($key === $currentPage) { echo "active"; }
                        //echo ($key === $currentPage) ? "active" : "";

                        ?>"><?=$menuItem["menu_title"]; ?></a></li>
                <?php }
            }
            ?>
        </ul>

        </ul>

        <div class="col-md-3 text-end">
            <a href="../login.php" class="btn btn-primary">Login</a>
            <a href="" class="btn btn-primary">Sign-up</a>
        </div>
    </header>
