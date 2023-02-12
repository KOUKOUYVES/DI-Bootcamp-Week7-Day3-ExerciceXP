<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<br><br>
<h1 style="text-align: center;">ExerciceXP 3 Check Student Grade</h1>

<div class="container">

        <?php

           session_start();

            // Définition de variables de session
            $_SESSION['username'] = "Mon Nom Utilisateur";
            $_SESSION['email'] = "email@exemple.com";

            // Affichage des variables de session
            echo "Username: " . $_SESSION['username'] . "<br>";
            echo "Email: " . $_SESSION['email'];
        ?>
</div>

</body>
</html>