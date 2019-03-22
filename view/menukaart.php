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
            <h1 align="center"> Bij gerecht </h1>
            <?php

            echo $BG;

            ?>
        </div>
    </div>

<?php
require "view/partials/footer.php";
?>