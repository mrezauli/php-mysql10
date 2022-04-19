<?php

require_once "header.php";
require_once "browse.php";

?>

<div class="card mt-3">
    <div class="card-header">
        Featured Mobile Number
    </div>
    <div class="card-body">
        <h5 class="card-title">Name: <?=$phone['name']?></h5>
        <p class="card-text">Mobile: <?= '+8801' . $phone['mobile']?></p>
    </div>
</div>

<?php

require_once "footer.php";

?>