<?php include base_path("view/components/header.view.php"); ?>
<?php include base_path("view/components/navbar.view.php"); ?>
<main class="container">
    <div class="row p-5">
        <div class="col-12">
            <h3>Edit Product</h3>
        </div>
        <div class="col-12">
            <form class="w-100" method="POST" action="/product">
                <input type="hidden" name="_method" value="PATCH"/>
                <input type="hidden" name="_id" value="<?=$product['id']?>>"/>
                <div class="form-group">
                    <label for="user">User</label>
                    <select class="form-control" id="user" name="user_id">
                        <?php foreach ($users as $user) : ?>
                            <option value="<?= $user['id'] ?>" <?php if($user['id'] === $product['user_id']){ ?> selected <?php }?> ><?= $user['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?=$product['title']?>" />
                </div>
                <div class="form-group">
                    <label for="title">Price</label>
                    <input type="number" class="form-control" id="title" name="price" value="<?=$product['price']?>" />
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input  class="form-control" id="description"  name="description" value="<?=$product['description']?>" />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <?php foreach ($errors??[] as $error) : ?>
                    <h6 class="text-danger mt-3"><i><?= $error ?></i></h6>
                <?php endforeach; ?>
            </form>
        </div>
    </div>
</main>
<?php include base_path("view/components/footer.view.php"); ?>
