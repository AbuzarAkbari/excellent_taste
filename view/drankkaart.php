<?php
/**
 * Created by PhpStorm.
 * User: abuzar
 * Date: 3-3-2019
 * Time: 20:43
 */

require "view/partials/header.php";
?>

    <div class="container mt-5">
        <div class="row">
            <h1 align="center">Drank Kaart</h1>
            <?php
            echo $table;
            ?>
        </div>
    </div>

<?php
require "view/partials/footer.php";
?>