<!-- require user authentification -->
<?php
session_start();

?>
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <?php
        echo "<li><a href='/PA/front/index.php' class='nav-link px-2 text-secondary'>". $keywords->home ."</a></li>
            <li><a href='/PA/front/products.php' class='nav-link px-2 text-secondary'>". $keywords->shop ."</a></li>
            <li><a href='/PA/front/charities.php' class='nav-link px-2 text-secondary'>". $keywords->charities ."</a></li>";
        ?>
        </ul>

        <div class="text-end">
        <?php
        echo"<button type='button' class='btn btn-outline-light me-2'>". $keywords->signIn."</button>
            <button type='button' class='btn btn-warning'>". $keywords->signUp ."</button>
            <button type='button' id ='en' class='btn btn-outline-light me-2'>EN</button>
            <button type='button' id='fr' class='btn btn-outline-light me-2'>FR</button>
        ";
        ?>
        </div>
      </div>
    </div>
  </header>