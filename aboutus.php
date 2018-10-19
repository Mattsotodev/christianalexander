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
        /* about section*/

        .about_content {
            height: 100%;
            width: 75%;
            margin: auto;
            background: #000;
        }

        .about_content h2 {
            color: chartreuse;
            padding-top: 40px;
        }

        .about {
            height: 80%;
            background: #000;
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            justify-content: center;
            align-items: center;

        }

        .about_img {
            width: 400px;
            margin-right: 10px;
            padding: 10px;

        }

        .about_img img {
            width: 100%;
        }

        .about_para {
            width: 400px;
        }

        .about_para p {
            max-height: 400px;
            text-align: justify;
            font-size: 1.2em;
        }

    </style>

    <body>
</head>
<!--nav partial-->
<?php require_once('assets/partials/nav.php'); ?>
<!--about content-->
<div class="con">
    <div class="about_content">
        <h2>About us!</h2>
        <div class="about">
            <div class="about_img">
                <img src="assets/img/placeholder.png">
            </div>
            <div class="about_para">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div>
</div>
<?php require_once('assets/partials/footer.php'); ?>
</body>

</html>
