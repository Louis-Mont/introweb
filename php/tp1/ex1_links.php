<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.13.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <br>Consultation de :</br>
        <form class="form" action="ex1_civil_status.php" methode="get">
            <div class="form-group">
                <input type="hidden" class="form-control" name="firstname" value="<?php echo $_GET['firstname'] ?>">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" name="lastname" value="<?php echo $_GET['lastname'] ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-link">- votre état civil</button>
            </div>
        </form>
        <form class="form" action="ex1_address.php" methode="get">
            <div class="form-group">
                <input type="hidden" class="form-control" name="address" value="<?php echo $_GET['address'] ?>">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" name="town" value="<?php echo $_GET['town'] ?>">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" name="postal" value="<?php echo $_GET['postal'] ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-link">- votre adresse</button>
            </div>
        </form>

    </div>
</body>