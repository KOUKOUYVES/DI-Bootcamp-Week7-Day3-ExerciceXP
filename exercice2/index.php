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
<h1 style="text-align: center;">ExerciceXP 2 Détails De Connexion Au Magasin</h1>

<div class="container">
        

        <?php
        // my user data
                $data = [
                    "username" => "Armand",
                    "cookiesTime" => time() + (86400 * 30),
                ];

                // encode data in json and base64
                $dataEncoding = base64_encode(json_encode($data));

                // Store Login Detail
                setcookie("userInfos", $dataEncoding, time() + (86400 * 30), "/"); // 86400 = 1 day

                // form submit
                $submit = false;
                // login state
                $logIn = false;

                // le bouton Submit du formulaire
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $submit = true;

                    // decode data base64 and json
                    $dataDecrypt = json_decode(base64_decode($_COOKIE["userInfos"]), true);

                    if (($dataDecrypt["username"] == $_POST["username"])) {
                        $logIn = true;
                    }
                }
            
        ?>
            <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Entrer Votre Nom</label>
                    <input type="texte" name="username" class="form-control">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form><br>

            <!-- msg connect -->
    <?php if($submit): ?>
        <h3>Login <?= $logIn ? "success" : "error" ?> </h3>
    <?php endif; ?>
</div>

</body>
</html>