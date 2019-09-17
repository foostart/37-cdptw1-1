<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('../type-6/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/questions-less.less', 'css/questions-css.css');
        ?>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/questions-js.js" type="text/javascript"></script>
        <link href="css/questions-css.css" rel="stylesheet" type="text/css"/>


    </head>
    <body>
        <div class="fluid">
            <div class="container">
                <div class="fluid-question col-md-6">
                    <ul>
                        <li class="active-li fluid-question-li-1">What do we do?</li>
                        <div class="text-li text-li1">
                            <p>We believe in building to positively impact communities, infrastructure, the economy, opportunity and employment. We take great pride in being proactive with our approach to projects, while ensuring that the best interests of the stakeholders are represented at every stage.</p>
                            <p>We are serious about our values. And in the context of those values we can tackle your whole project in a comprehensive customer focused way or a portion thereof.</p>
                        </div>
                        <li class="fluid-question-li-2">Why do we do it?</li>
                        <div class="text-li text-li2">
                            <p>We are serious about our values. And in the context of those values we can tackle your whole project in a comprehensive customer focused way or a portion thereof.</p>
                            <p>We believe in building to positively impact communities, infrastructure, the economy, opportunity and employment. We take great pride in being proactive with our approach to projects, while ensuring that the best interests of the stakeholders are represented at every stage.</p>
                        </div>
                    </ul>


                </div>
                <div class="fluid-titles col-md-6">


                    <div class="fluid-titles-panel">
                        <h4 class="active-titles-panel a2">
                            <i class="fa fa-life-ring"></i>
                            <span class="a4">SAFETY</span>
                            <i class="fa fa-plus titles-panel-i a"></i>
                            <i class="fa fa-minus titles-panel-i a1" style="display: none;"></i>
                        </h4>
                        <p class=" ap">A personal and professional commitment to proactively protecting the well-being of our employees, our contractors, our customers and the people of the communities in which we operate.</p>
                    </div>
                    <div class="fluid-titles-panel">
                        <h4 class="b2">
                            <i class="fa fa-life-ring b3"></i>
                            <span class="b4">QUALITY</span>
                            <i class="fa fa-plus titles-panel-i b"></i>
                              <i class="fa fa-minus titles-panel-i b1" style="display: none;"></i>
                        
                        </h4>
                        <p class="bp">A personal and professional commitment to proactively protecting the well-being of our employees, our contractors, our customers and the people of the communities in which we operate.</p>
                    </div>
                    <div class="fluid-titles-panel">
                        <h4 class="c2">
                            <i class="fa fa-balance-scale c3"></i><span class="c4">INTEGRITY</span>
                            <i class="fa fa-plus titles-panel-i c"></i>
                             <i class="fa fa-minus titles-panel-i c1" style="display: none;"></i>
                        </h4>
                        <p class="cp">I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    </div>
                </div>
            </div>
        </div>
       
    </body>
</html>