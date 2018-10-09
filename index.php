<html>

<head>
    <title>Home</title>
    <!--Required metatag and stylesheet-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Custom styles-->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .hero_h1{
            
        }
        .hero_call {
            font-size: 1.6em;
            padding: 15px 20px;
            color: #000;
            background-color: chartreuse;
            border-radius: 5%;
        }
        
        .hero_call:hover {
            background-color: firebrick;
            color: azure;
            text-decoration: none;
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

    <!-- Nav Partial-->
    <?php require_once('assets/partials/nav.php'); ?>

    <!-- hero container-->
    <div class="container-fluid hero">
        <div class="flex_hero">
            <div class="row">
                <div class="col-md-12">
                    <h1>Some text will go here</h1>
                    <a href="shop.php" class="hero_call">Shop Bikes</a>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>

    <!-- about section-->
    <div class="container-fluid about_section">
        <div class="row">
            <h2>About us</h2>
            <div class="col-md-6 col-md-push-3">
                <div class="about_info">
                    <img src="assets/img/placeholder.png">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid bike_section">
        <div class="row">
            <div class="col-md-12">
                <h2>Our Bikes</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-push-2">
                <h3>Bike 1</h3>
                <a href="bike1.php"><img src="assets/img/placeholder.png"></a>
            </div>
            <div class="col-md-4 col-md-push-2">
                <h3>Bike 2</h3>
                <a href="bike1.php"><img src="assets/img/placeholder.png"></a>

            </div>
        </div>
    </div>

    <!-- footer partial -->
    <?php require_once('assets/partials/footer.php'); ?>
    <!--Required scripts-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!--Custom script-->
    <script>


    </script>

</body>

</html>
