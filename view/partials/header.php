<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    <?php include "view/assets/style.css"; ?>
    </style>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <title>excellent taste</title>

    </head>
  <body>

  <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="nav-color py-2 d-none d-md-inline-block" href="/home/home">Home</a>
        <a class="nav-color py-2 d-none d-md-inline-block" href="/reserve/form">Reserveren</a>
        <a class="nav-color py-2 d-none d-md-inline-block" href="/reserve/reserveringen">Reserveringen</a>
          <div class="dropdown nav-color">
              <a class=" dropdown py-2 d-none d-md-inline-block dropdown-toggle"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Bestellingen
              </a>
              <div class="dropdown-menu nav-color" aria-labelledby="dropdownMenu2">
                  <a class=" dropdown-item" href="//bestelling/ober">Ober</a>
                  <a class=" dropdown-item"  href="/bestelling/chef">Chef</a>
                  <a class=" dropdown-item"  href="/bestelling/bar">Bar</a>
              </div>
          </div>
      <div class="dropdown nav-color">
          <a class=" dropdown py-2 d-none d-md-inline-block dropdown-toggle"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Menukaart
          </a>
          <div class="dropdown-menu nav-color" aria-labelledby="dropdownMenu2">
              <a class=" dropdown-item" href="/menu/drank">Drank kaart</a>
              <a class=" dropdown-item" href="/menu/eten">Eten Kaart</a>
          </div>
      </div>
      </div>
    </nav>