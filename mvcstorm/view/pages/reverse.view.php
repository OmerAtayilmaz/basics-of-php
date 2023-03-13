<?php include(base_path("view/components/header.view.php")); ?>
<?php include(base_path("view/components/navbar.view.php")); ?>
<main>
    <?= reverse($data["content"]); ?>
</main>
<?php include(base_path("view/components/footer.view.php")); ?>

