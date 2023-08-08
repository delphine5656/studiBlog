<?php
if ($article["image"] ===null){
    $imagePath = _ASSETS_IMAGES_FOLDER_."default-article.jpg";
} else {
   $imagePath = _ARTICLES_IMAGES_FOLDER_.$article["image"];
}


?>
<!-----template de la card article------->
<div class="col-md-6">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Catégorie</strong>
            <h3 class="mb-0"><?php echo $article["title"]  ?></h3>
            <p class="card-text mb-auto"><?php echo $article["content"]  ?></p>
            <a href="../actualite.php?id=<?php echo $key ?>" class="stretched-link">Voir l'article</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="<?php echo $imagePath ?>" alt="image de l'article" style="width: 400px;">
        </div>
    </div>
</div>
