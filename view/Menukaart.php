<?php
/**
 * Created by PhpStorm.
 * User: abuzar
 * Date: 3-3-2019
 * Time: 20:42
 */

require "view/partials/header.php";
?>

    <div class="container mt-5">
        <div class="row">
            <h1 align="center"> Hoofd gerecht </h1>
            <?php

            echo $HG;

            ?>
            <h1 align="center"> Na gerecht </h1>
            <?php

            echo $NA;

            ?>
        </div>
    </div>

<?php
require "view/partials/footer.php";
?>