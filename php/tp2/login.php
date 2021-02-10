<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h1><b>Login</b></h1>
        <?php
        if (isset($_GET['connected'])) {
            if ($_GET['connected'] != 1) {
                echo "<p class=\"text-danger\">Erreur de connexion</p>";
            }
        }
        ?>
        <form class="form-horizontal" action="identification.php" methode="get">
            <div class="form-group">
                <label class="control-label col-sm-2" for="login">Login</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="login" name="login">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Votre mot de passe</label>
                <div class="col-sm-2">
                    <input type="password" class="form-control" id="pwd" name="pwd">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-2">
                    <button type="submit" class="btn bot-default">Login</button>
                </div>
            </div>
        </form>
    </div>
</body>