<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/slideshow-main-less.less', 'css/slideshow-main-css.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/slideshow-main-css.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/slideshow-main-js.js" type="text/javascript"></script>
        <script src="js/lightSlider.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="slide">
            <ul>
                <li class="img-slide pic1" stt="0">
                    <img src="images/slider-2.jpg" alt=""/>
                    <div class="bg"></div>
                </li>
                <div class="mini-title text0 text-sub">THE ULTIMATE GOAL</div>
                <div class="text-slide text0 text-sub"><h1>We are manufacturing products with world class quality.</h1></div>
                <div class="read-more text0 text-sub">READ MORE</div>

                <li class="img-slide pic2" stt="1">
                    <img src="images/slider-3.jpg" alt=""/>
                    <div class="bg"></div>
                </li>
                <div class="mini-title text1 textt-sub">THE ULTIMATE GOAL</div>
                <div class="text-slide text1 text-sub"><h1>Supplying the world with high quality chemical products.</h1></div>
                <div class="read-more text1 text-sub">READ MORE</div>
            </ul>
            <div class="btn-slide">
                <i class="fa fa-angle-left"></i>
                <i class="fa fa-angle-right"></i>
            </div>
            <div class="time-banner"></div>
        </div>
    </body>
</html>