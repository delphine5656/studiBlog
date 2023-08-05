
<!-----template de la card article------->
<div class="col-md-6">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Catégorie</strong>
            <h3 class="mb-0"><?php echo $article["title"]  ?></h3>
            <p class="card-text mb-auto"><?php echo $article["description"]  ?></p>
            <a href="../actualite.php?id=<?php echo $key ?>" class="stretched-link">Voir l'article</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="uploads/articles/<?php echo $article["image"] ?>" alt="image de l'article" style="width: 400px;">
        </div>
    </div>
</div>
