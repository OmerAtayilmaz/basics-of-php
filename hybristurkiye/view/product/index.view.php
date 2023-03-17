<?php _include("common/header"); ?>
<main class="container">
    <div class="row ">
        <div class="col-12 p-2">
            <a class="btn btn-warning w-100" href="/product/create">CREATE</a>
        </div>
        <div class="col-12  d-flex justify-content-center align-items-center">
            <!--product card -->
            <?php foreach ($data["products"] as $product) { ?>
                <div class="col-4">
                    <div class="card h-100 w-100" style="width: 18rem;">
                        <img class="card-img-top" src="<?=$product['image']?>" alt="<?=$product['image']?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product["title"] ?></h5>
                            <p class="card-text"><?= substr($product["description"],0,25) ?></p>
                            <a href="/product/detail/1" class="btn btn-success">Details</a>
                            <a href="#" class="btn btn-primary">$<?= $product["price"] ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>
<?php _include("common/footer"); ?>
