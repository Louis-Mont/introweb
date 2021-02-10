<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    foreach ($_GET as $k => $v) {
        echo "<br>" . $k . " : " . $v . "</br>";
    }
    ?>
    <div class="container">
        <h1><b>Sport que tu aimes</b></h1>
        <form class="form-horizontal" action="" method="GET">
            <div class="form-group">
                <label class="control-label col-sm-2" for="own">Vous possédez</label>
                <div id="own" class="col-sm-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="judo" name="judo">
                        <label class="form-check-label" for="judo">
                            Judo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="tennis" name="tennis">
                        <label class="form-check-label" for="tennis">
                            Tennis
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="piano" name="piano">
                        <label class="form-check-label" for="piano">
                            Piano
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