<?php
    session_start();
    if ($_COOKIE["lang"] == "en") {
        $multilingual = file_get_contents('../../../resources/multilingual/en.json');
      }else{
        $multilingual = file_get_contents('../../../resources/multilingual/fr.json');
      }
      $keywords = json_decode($multilingual);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User - New Deal</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body class="bg-dark text-white text-center">

        <?php
            require('../../header.php');?>
            <?php
            echo "<form class='m-4'><input class='m-1' type='text' id='productName' placeholder='". $keywords->name ."'><br>";
            echo "<input class='m-1' type='text' id='productDescription' placeholder='Description'><br>";
            echo "<select class='m-1' id='condition'>
			        <option value=0.10>". $keywords->badCondition ."</option>
			        <option value=0.45>". $keywords->decentCondition ."</option>
                    <option value=0.75>". $keywords->goodCondition ."</option>
                    <option value=1>". $keywords->asnewCondition ."</option>
		        </select><br>";
        ?>
		<!-- get api ajax js pour remplir-->
        <select class='m-1' id="category">
        </select><br>
        <?php
            echo "</form><button onclick='addProduct()' class='btn btn-outline-light me-2'>". $keywords->confirm ."</button>";
        ?>
        <output id='estimationResult'></output>

    <script src="../../scripts/newProduct.js"></script>
    <script src="../../scripts/utils.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>