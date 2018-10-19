<html>
<head>
    <title>Home</title>
    <!--Required metatag and stylesheet-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
    <!--Custom styles-->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        
        /* hero section*/
        .hero {
            margin: 0 auto;
            height: 85vh;
            width: 85%;
            background: #000;
            background-image: url("/assets/img/Brooklyn-bridge.jpg");
            /*            background-size: contain;*/
            background-position: center;
            border: 2px solid black;
        }

        #myVideo {
            position: absolute;
            width: 100%;
            height: 100%;
            min-width: 100%;
            min-height: 100%;
        }

    </style>
</head>

<body>
    <!-- hero container-->
<?php require_once('assets/partials/nav.php'); ?>
<div class="con">
        <div class="container-fluid hero">
        </div>
    </div>

    <!-- footer partial -->
    <?php require_once('assets/partials/footer.php'); ?>

    <!--Required scripts-->
    <script src="js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

    <!--Custom script-->
</body>

</html>
