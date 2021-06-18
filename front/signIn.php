<?php
    session_start();
    if ($_COOKIE["lang"] == "en") {
        $multilingual = file_get_contents('../resources/multilingual/en.json');
      }else{
        $multilingual = file_get_contents('../resources/multilingual/fr.json');
      }
      $keywords = json_decode($multilingual);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body class="bg-dark text-white text-center">
<?php
    require('header.php');
?>
    <form class='m-4'>
        <?php
            echo "<input type='email' class='m-1 name='firstName' id='email' placeholder='Email'><br>
                  <input type='pwd' class='m-1 name='pwd' id='pwd' placeholder='". $keywords->pwd ."'><br>
                  <button type='button' class='btn btn-warning' onclick='signIn()'>". $keywords->signIn ."</button>
                  ";

        ?>
        
    </form>

    <script src="scripts/utils.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>