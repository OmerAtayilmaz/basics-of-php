<?php include base_path("view/components/header.view.php"); ?>
<?php include base_path("view/components/navbar.view.php"); ?>
<main class="container">
    <div class="row p-5">
        <div class="col-12">
            <h3>Register</h3>
        </div>
        <div class="col-12">
            <form class="w-100" method="POST" action="/register">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="cpassword">Password Confirm</label>
                    <input type="password" class="form-control" id="cpassword"  name="cpassword">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
                <?php foreach ($errors??[] as $error) : ?>
                    <h6 class="text-danger mt-3"><i><?= $error ?></i></h6>
                <?php endforeach; ?>
            </form>
        </div>
    </div>
</main>
<?php include base_path("view/components/footer.view.php"); ?>
