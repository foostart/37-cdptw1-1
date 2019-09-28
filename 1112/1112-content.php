<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1112">
  <div class="container">
    <div class="row">
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
             <div class="swiper-container gallery-top">
              <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(images/1112-01.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(images/1112-02.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(images/1112-03.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(images/1112-04.jpg)"></div>
              </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
            <div class="swiper-container gallery-thumbs">
              <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(images/1112-01.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(images/1112-02.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(images/1112-03.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(images/1112-04.jpg)"></div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- /Ket thuc phan "8 cai hinh" -->
</div>
</div>