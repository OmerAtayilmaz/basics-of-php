<?php _include("common/header"); ?>
<main class="container">
    <div class="row d-flex justify-content-center align-items-center ">
        <!--product card -->
                <div class="card h-100 w-100" style="width: 18rem;">
                    <img class="card-img-top" src="<?=$product['image']?>" alt="<?=$product['image']?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product["title"] ?></h5>
                        <p class="card-text"><?= substr($product["description"],0,25) ?></p>
                        <a href="#" class="btn btn-primary">Buy Product $<?= $product["price"] ?></a>
                    </div>
                </div>
    </div>
</main>
<?php _include("common/footer"); ?>
