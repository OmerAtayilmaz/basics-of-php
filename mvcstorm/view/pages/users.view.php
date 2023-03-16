<?php include base_path("view/components/header.view.php"); ?>
<?php include base_path("view/components/navbar.view.php"); ?>
<main>
    <div class="container">
        <div class="row">
            <!--User List -->
            <div class="col-12">
                <h1 class="text-center">User List</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                        <tr>
                            <th scope="row"><?= $user["id"] ?></th>
                            <td><?= $user["name"] ?></td>
                            <td><?= $user["email"] ?></td>
                            <td><?= $user["role"] ?></td>
                            <td class="d-flex">
                                <form method="post">
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <input type="hidden" name="user_id" value="<?=$user['id']?>"  />
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <form method="get">
                                    <input type="hidden" name="_method" value="GET" />
                                    <input type="hidden" name="user_id" value="<?=$user['id']?>"  />
                                    <button type="submit" class="btn btn-warning">Edit</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
    </div>
</main>
<?php include base_path("view/components/footer.view.php"); ?>
