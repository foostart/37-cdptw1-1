<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/Here-is-Our-Gallery-css.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
            require_once($dir_block . '/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/Here-is-Our-Gallery-less.less', 'css/Here-is-Our-Gallery-css.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
    </head>
    <body>
        <!-- Phan co 8 cai hinh -->
        <div class="wpb-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-wpbrow">
                        <h2>Here is Our Gallery</h2>
                        <hr>
                        <h4>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam doloremque laudantium, totam rem aperiam.</h4>
                    </div>
                    <div class="col-md-8 pic-wpbrow">
                       <div class="col-md-3 col-sm-6 pic-wpbrowmin">
                            <img src="images/chemical-b-1024x640.jpg"  onclick="openModal();
                                    currentSlide(1)" class="hover-shadow cursor"> 
                        </div>
                        <div  href='#' class="col-md-3 col-sm-6 pic-wpbrowmin">
                            <img src="images/agriculture-b-1024x640.jpg"  onclick="openModal();
                                    currentSlide(2)" class="hover-shadow cursor">
                        </div>
                        <div  href='#' class="col-md-3 col-sm-6 pic-wpbrowmin">
                            <img src="images/Agricultural-1024x682.jpg"  onclick="openModal();
                                    currentSlide(3)" class="hover-shadow cursor">
                        </div>
                        <div  href='#' class="col-md-3 col-sm-6 pic-wpbrowmin">
                            <img src="images/glass-b-1024x640.jpg"  onclick="openModal();
                                    currentSlide(4)" class="hover-shadow cursor">
                        </div>
                        <!-- <div class="clearfix"></div> -->
                        <a href='#' class="col-md-3 col-sm-6 pic-wpbrowmin">
                            <img src="images/engine.jpg"  onclick="openModal();
                                    currentSlide(5)" class="hover-shadow cursor">
                        </a>
                        <div href='#' class="col-md-3 col-sm-6 pic-wpbrowmin">
                            <img src="images/4.jpg"  onclick="openModal();
                                    currentSlide(6)" class="hover-shadow cursor">
                        </div>
                        <div href='#' class="col-md-3 col-sm-6 pic-wpbrowmin">
                            <img src="images/5.jpg"  onclick="openModal();
                                    currentSlide(7)" class="hover-shadow cursor">
                        </div>
                        <div href='#' class="col-md-3 col-sm-6 pic-wpbrowmin">
                            <img src="images/8.jpg"  onclick="openModal();
                                    currentSlide(8)" class="hover-shadow cursor">
                        </div>
                    </div>
                </div>
                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">             
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        <div class="mySlides">
                            <img class="demo cursor" src="images/chemical-b-1024x640.jpg"style="width:100%; height: 80%;"  onclick="currentSlide(9)" >
                        </div>
                        <div class="mySlides">
                            <img class="demo cursor" src="images/agriculture-b-1024x640.jpg"style="width:100%; height: 80%;"   onclick="currentSlide(9)" >
                        </div>
                        <div class="mySlides">
                            <img class="demo cursor" src="images/Agricultural-1024x682.jpg" style="width:100%; height: 80%;"  onclick="currentSlide(9)" >
                        </div>
                        <div class="mySlides">
                            <img class="demo cursor" src="images/glass-b-1024x640.jpg"style="width:100%; height: 80%;"  onclick="currentSlide(9)" >
                        </div>
                        <div class="mySlides">
                            <img class="demo cursor" src="images/engine.jpg"style="width:100%; height: 80%;"  onclick="currentSlide(9)" >
                        </div>
                        <div class="mySlides">
                            <img class="demo cursor" src="images/4.jpg"style="width:100%; height: 80%;"  onclick="currentSlide(9)" >
                        </div>
                        <div class="mySlides">
                            <img class="demo cursor" src="images/5.jpg" style="width:100%; height: 80%;" onclick="currentSlide(9)" >
                        </div>
                        <div class="mySlides">
                            <img class="demo cursor" src="images/8.jpg"style="width:100%; height: 80%;"  onclick="currentSlide(9)" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Ket thuc phan "8 cai hinh" -->
    </body>
</html>