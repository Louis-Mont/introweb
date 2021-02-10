<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    session_start();
    
    $form = "<form action=\"login.php\"></form>";
    $script = '<script>$("form").submit()</script>';
    $redirect = $form . $script;

    if (isset($_SESSION['connected'])) {
        if ($_SESSION['connected'] != 'yes') {
            echo $redirect;
        }
    } else {
        echo $redirect;
    }
    ?>
    <div class="container">
        <p class="text-primary"><?php echo $_SESSION['login']?></p>
        <a href="deconnexion.php"><img src="logout.jpg" class="img-responsive" /></a>
    </div>
</body>