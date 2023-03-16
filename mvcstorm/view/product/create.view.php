<?php include base_path("view/components/header.view.php"); ?>
<?php include base_path("view/components/navbar.view.php"); ?>
<main class="container">
    <div class="row p-5">
        <div class="col-12">
            <h3>CREATE A NEW PRODUCT</h3>
        </div>
        <div class="col-12">
            <form class="w-100" method="POST" action="/product/create">
                <div class="form-group">
                    <label for="user">User</label>
                    <select class="form-control" id="user" name="user_id">
                        <?php foreach ($users as $user) : ?>
                            <option value="<?= $user['id'] ?>"><?= $user['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="title">Price</label>
                    <input type="number" class="form-control" id="title" name="price">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input  class="form-control" id="description"  name="description">
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
