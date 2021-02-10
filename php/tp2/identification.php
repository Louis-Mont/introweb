<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <?php

    $fields = ['login', 'pwd'];
    $vals = [];

    foreach ($fields as $f) {
        if (isset($_GET[$f])) {
            $vals[$f] = $_GET[$f];
        }
    }

    $connected = $vals['login'] == 'crepo' && $vals['pwd'] == 'nutella';
    ?>
    <div class="container">
        <?php if ($connected) {
            echo "<p class=\"text-success\">Vous êtes connecté</p>";
        } else {
            echo "<p class=\"text-danger\">Erreur de connexion</p>";
        }
        ?>
    </div>
</body>