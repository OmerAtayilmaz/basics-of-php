<?php _include("common/header"); ?>
<main class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <!--product card -->
        <form method="POST" class="w-50" action="/product/create">
            <div class="form-group">
                <label for="user"> User:   </label>
                    <select id="user" name="user_id" class="form-control">
                        <?php foreach ($users as $user ) : ?>
                            <option value="<?=$user['id']?>"><?=$user["name"]?></option>
                        <?php endforeach; ?>
                    </select>
            </div>
            <div class="form-group">
                <label for="title">Title:</label><input class="form-control" type="text" name="title" id="title"/>
            </div>
            <div class="form-group">
                <label for="description">Description: </label><input class="form-control" type="text" name="description" id="description"/>
            </div>
            <div class="form-group">
                <label for="price">Price: </label><input class="form-control" type="number" name="price" id="price"/>
            </div>
            <button class="btn btn-primary" type="submit">Create Product</button>
        </form>
    </div>
</main>
<?php _include("common/footer"); ?>
