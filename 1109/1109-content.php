<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1109">
    <div class="container">
        <div class="row">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide">
                            <ul>
                                <li class="img-slide pic1" stt="0">
                                    <img src="images/slider-2.jpg" alt=""/>
                                    <div class="bg"></div>
                                </li>
                                <div class="mini-title text0 text-sub">THE ULTIMATE GOAL</div>
                                <div class="text-slide text0 text-sub"><h1>We are manufacturing products with world class quality.</h1></div>
                                <div class="read-more text0 text-sub">READ MORE</div>
                            </ul>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="slide">
                            <ul>
                                <li class="img-slide pic1" stt="1">
                                    <img src="images/slider-3.jpg" alt=""/>
                                    <div class="bg"></div>
                                </li>
                                <div class="mini-title text0 textt-sub">THE ULTIMATE GOAL</div>
                                <div class="text-slide text0 text-sub"><h1>Supplying the world with high quality chemical products.</h1></div>
                                <div class="read-more text0 text-sub">READ MORE</div>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>
</html>