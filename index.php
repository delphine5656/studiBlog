<?php
require_once "template/header.php";
require "lib/article.php";
require_once  "lib/config.php";
require_once "lib/pdo.php";

$articles = getArticles($pdo, _HOME_ARTICLES_LIMIT_);
?>

    <main>

            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="assets/images/default-article.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Tech Trendz l'actu Tech</h1>
                    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="actualites.php" class="btn btn-primary btn-lg px-4 me-md-2">Voir toutes les actualités</a>
                    </div>
                </div>
            </div>

<!--------------card article------------->
            <h2>Nos derniers articles</h2>
            <div class="row mb-2">
                <?php foreach($articles as $key => $article){
                    require "template/article_part.php";
                } ?>


            </div>
        <!--------------fin card article------------->

    </main>


<?php
require_once  "template/footer.php";