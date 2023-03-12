<?php include("view/storefront/components/header.view.php"); ?>
<?php include("view/storefront/components/navbar.view.php"); ?>
<main>
    <?= reverse($data["content"]); ?>
</main>
<?php include("view/storefront/components/footer.view.php"); ?>

