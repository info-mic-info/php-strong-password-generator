<?php
include __DIR__. '/functions.php';

    session_start();
    $_SESSION['num'] = $_GET['num'];
    if(empty($_SESSION['num'])){
        header("Location:./index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/style.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col d-flex justify-content-center text-bg-primary  p-2">
                <h2>La password è: <?php echo generatePassword($_GET["num"]);?></h2>
            </div>
        </div>
    </div>
</body>
</html>