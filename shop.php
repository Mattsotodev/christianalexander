<html>

<head>
    <title>Home</title>
    <!--Required metatag and stylesheet-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Custom styles here-->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* bike section */

        .bike_section {
            height: 100%;
            width: 85%;

        }

        .bike_content {
            height: 80%;
            background: black;
            width: 85%;
            margin: auto;
        }

        .bike_content h2 {
            padding-top: 40px;
            color: chartreuse;
        }

        .flex_shop {
            height: 85%;
            background-color: #000;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .box {
            width: 350px;
            margin: 0 30px;
        }

        .box img {
            margin-top: 10px;
            width: 100%;
        }

        .box img:hover {
            box-shadow: 0 0 25px chartreuse;
            border: solid chartreuse 2px;
        }

    </style>
</head>

<body>
    <!-- nav partial-->
    <?php require_once('assets/partials/nav.php'); ?>
    <div class="con">
        <div class="bike_content">
            <h2>Shop Bikes!</h2>
            <div class="flex_shop">
                <div class="box">
                    <h3>Bike 1</h3>
                    <a href="bike1.php"><img src="assets/img/placeholder.png"></a>
                </div>
                <div class="box">
                    <h3>Bike 2</h3>
                    <a href="bike1.php"><img src="assets/img/placeholder.png"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer partial -->
    <?php require_once('assets/partials/footer.php'); ?>

    <!--Required scripts-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--Custom script here-->
    <script></script>

</body>

</html>
