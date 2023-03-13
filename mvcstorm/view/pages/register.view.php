<?php include base_path("view/components/header.view.php"); ?>
<?php include base_path("view/components/navbar.view.php"); ?>
<main class="container">
    <div class="row p-5">
        <form class="w-100" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input  class="form-control" id="email" placeholder="Enter your email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
            </div>
            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" name="c-password">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
            <?php foreach ($errors??[] as $error) : ?>
                <h6 class="text-danger mt-3"><i><?= $error ?></i></h6>
            <?php endforeach; ?>
        </form>
    </div>
</main>
<?php include base_path("view/components/footer.view.php"); ?>
