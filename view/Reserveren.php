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
            <div class="card">
            <h1 align="center">Reserveren</h1>
                <div class="card-body">
                    <form method="post" action="">
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="naam">Naam</label>
                                <input type="text" class="form-control" id="naam" placeholder="naam" name="naam">
                            </div>
                            <div class="form-group col-6">
                                <label for="achternaam">Achternaam</label>
                                <input type="text" class="form-control" id="achternaam" placeholder="achternaam" name="achternaam">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="aantal">Aantal personen</label>
                            <input type="number" class="form-control" id="aantal" placeholder="aantal" name="aantal">
                        </div>

                        <div class="form-group">
                            <label for="telefoon">Telefoon nummer</label>
                            <input type="text" class="form-control" id="telefoon" placeholder="telefoon" name="telefoon">
                        </div>

                        <div class="form-group">
                            <label for="datum">Datum</label>
                            <input type="datetime-local" class="form-control" id="datum" name="datum">
                        </div>

                        <div class="form-group">
                            <label for="tafel">Tafel</label>
                            <select id="tafel" class="form-control" name="tafel">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>


                        <button name="submit" type="submit" class="btn btn-success btn-lg btn-block">Done</button>
                    </form>
                </div>
            </div>
    </div>

<?php
require "view/partials/footer.php";
?>