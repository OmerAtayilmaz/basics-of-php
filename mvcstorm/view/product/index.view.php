<?php include base_path("view/components/header.view.php"); ?>
<?php include base_path("view/components/navbar.view.php"); ?>
<main>
    <div class="container">
        <div class="row p-5">
            <div class="col-12">
                <a href="/product/create" class="btn btn-primary">Create Product</a>
            </div>
            <!--Product List -->
            <div class="col-12">
                <h1 class="text-center">Product List</h1>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">title</th>
                        <th scope="col">description</th>
                        <th scope="col">image</th>
                        <th scope="col">price</th>
                        <th scope="col">user</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach($products as $product): ?>
                            <tr>
                                <th scope="row"><?= $product["id"] ?></th>
                                <td><?= $product["title"] ?></td>
                                <td><?= substr($product["description"],0,50) ?>...</td>
                                <td><img src="<?=$product['image']?>" width="80"/> </td>
                                <td><?= $product["price"] ?>$</td>
                                <td class="d-flex">
                                    <form method="post">
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <input type="hidden" name="user_id" value="<?=$product['id']?>"  />
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    <a href="/product/edit?id=<?=$product['id']?>" class="btn btn-warning">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php include base_path("view/components/footer.view.php"); ?>
