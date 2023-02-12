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
<h1 style="text-align: center;">ExerciceXP 1 Session Nom D'utilisateur</h1>

<div class="container">
        <?php
                // Demarrer la  session
                session_start();

                // verifier si la variable existe d'utilisateur
                if (!isset($_SESSION['username'])) {
                    $_SESSION['username'] = '';
                }

                // checker sur le button submit
                if (isset($_POST['submit'])) {
                    // modification de la variable
                    $_SESSION['username'] = $_POST['username'];
                }

                if (!empty($_SESSION['username'])) {
                    echo 'Welcome , ' . $_SESSION['username'] . '!';
                } else {

                            ?>
                                <form method="post">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Entrer un texte</label>
                                        <input type="texte" name="username" class="form-control">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </form><br>
                            <?php
                        }

            // verifier si le bouton submit est cliquer 
            if (isset($_POST['logout'])) {
                // detruire la session
                session_destroy();
                $_SESSION['username'] = '';
            }

?>

<form action="" method="post">
    <input type="submit" class="btn btn-dark" name="logout" value="Logout"><br>
</form>
</div>
</body>
</html>