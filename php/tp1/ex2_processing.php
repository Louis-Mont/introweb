<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.13.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    function between($number, $low, $high)
    {
        if ($number > $low && $high > $number) {
            return "Oui, " . $number . " est compris entre " . $low . " et " . $high;
        }
        return "Non, " . $number . " n'est pas compris entre " . $low . " et " . $high;
    }
    ?>
    <div class="container">
        <h1><b>Résultats du test</b></h1>
        <p class="text-success"><?php echo $_GET['number'] ?> est-il compris entre <?php echo $_GET['lower'] ?> et <?php echo $_GET['upper'] ?> ?</p>
        <p class="text-danger"><?php echo between($_GET['number'], $_GET['lower'], $_GET['upper']) ?></p>
    </div>
</body>