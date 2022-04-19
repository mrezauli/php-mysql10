<?php

require "header.php";
require "browse.php";

?>

<form action="/update.php/<?= $phone['id'] ?>" method="POST">

    <div class="form-floating m-3">
        <input type="text" name="name" value="<?= $phone['name'] ?>" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating m-3">
        <input type="tel" class="form-control" id="floatingPassword" name="mobile" value="<?= $phone['mobile'] ?>" pattern="[0-9]{9}" placeholder="Password">
        <label for="floatingPassword">Mobile</label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php

require_once "footer.php";

?>