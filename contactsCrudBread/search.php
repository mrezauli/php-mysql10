<?php

require_once "header.php";
require_once "pattern.php";

?>

<h5>Searched Result by <i class="text-primary"><?=$name?></i> :</h5>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Mobile</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($phones as $key => $value) : ?>
            <tr>
                <th scope="row"><?=$value['id']?></th>
                <td><?php echo $value['name']?></td>
                <td><?= '+8801' . $value['mobile']?></td>
                <td>
                    <a href="show.php/<?=$value['id']?>" class="link-info">Browse</a>
                    |
                    <a href="edit.php/<?=$value['id']?>" class="link-success">Update / Edit</a>
                    |
                    <a href="delete.php/<?=$value['id']?>" class="link-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php

require_once "footer.php";

?>