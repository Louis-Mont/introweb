<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    if (isset($_GET['login'])) {
        if ($_GET['login'] == 'login') {
            echo "login bon";
        }
    }
    if (isset($_GET['pwd'])) {
        if ($_GET['pwd'] == 'pwd') {
            echo "pwd bon";
        }
    }
    if (isset($_GET['type'])) {
        echo $_GET['type'];
    }
    ?>
    <div class="container">
        <h1><b>Moteur de recherche</b></h1>
        <form class="form-horizontal" action="" method="GET">
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
                <label class="control-label col-sm-2" for="cat"></label>
                <div id="cat" class="col-sm-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="teacher" value="teacher">
                        <label class="form-check-label" for="teacher">
                            Enseignant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="student" value="student">
                        <label class="form-check-label" for="student">
                            Etudiant
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-2">
                    <button type="submit" class="btn bot-default">Chercher</button>
                </div>
            </div>
        </form>
    </div>
</body>