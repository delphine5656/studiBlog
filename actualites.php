<?php
require_once "template/header.php";
require "lib/article.php";
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
