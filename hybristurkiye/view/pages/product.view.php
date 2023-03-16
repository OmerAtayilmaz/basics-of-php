<?php include __DIR__ . "/../common/header.view.php";?>
<main class="container h-75">
    <div class="row d-flex justify-content-center align-items-center h-50">
        <!--product card -->
        <?php foreach ($data["products"] as $product) { ?>
                <div class="col-md-4">
                    <div class="card h-100 w-100" style="width: 18rem;">
                        <img class="card-img-top" src="<?=$product['image']?>" alt="<?=$product['image']?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product["title"] ?></h5>
                            <p class="card-text"><?= $product["description"] ?></p>
                            <a href="#" class="btn btn-success">Details</a>
                            <a href="#" class="btn btn-primary">$<?= $product["price"] ?></a>
                        </div>
                    </div>
                </div>
        <?php } ?>
    </div>
</main>
<?= _include("common/footer"); ?>
