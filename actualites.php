<?php
require_once "template/header.php";
require "lib/article.php";
require_once "lib/config.php";
require_once "lib/pdo.php";

$articles = getArticles($pdo);
?>

    <main>


        <!--------------card article------------->

        <div class="row mb-2">
            <?php foreach($articles as $key => $article){
               require "template/article_part.php";
             } ?>
        </div>
        <!--------------fin card article------------->

    </main>


<?php
require_once  "template/footer.php";
