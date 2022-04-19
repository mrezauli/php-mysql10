<?php

require_once "header.php";

?>

<form action="store.php" method="POST">

    <div class="form-floating m-3">
        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating m-3">
        <input type="tel" class="form-control" id="floatingPassword" name="mobile" pattern="[0-9]{9}" placeholder="Password">
        <label for="floatingPassword">Mobile</label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php

require_once "footer.php";

?>