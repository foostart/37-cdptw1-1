<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1110">
    <div class="container">
        <div class="row">
            <!--Phan "Show off Your Creativity" -->
            <div class="wpb-collum">
                <div class="container">
                    <div class="show-text col-md-8">
                        <h2>Show off Your Creativity</h2>
                        <hr>    
                        <h4>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</h4>
                    </div>
                </div>
            </div>
            <!--/Ket thuc "Show off Your Creativity"-->

            <!-- Phan video -->
            <div class="vc-row">
                <div class="container">
                    <div class="video-box col-md-6 col-sm-6">

                        <iframe src="https://player.vimeo.com/video/59035269" width="625" height="400" frameborder="0" title="Factory Visit to NITTO" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="top">
                            <div class="box-icon">
                                <i class="fa fa-book"></i>
                            </div>
                            <h3 class="box-title">Ethical Management</h3>
                            <p>Business ethics has normative and descriptive dimensions. As a corporate practice and a career specialization, the field is primarily normative. Academics attempting to understand business behavior employ descriptive methods. The range and quantity of business ethical issues reflects the interaction of profit-maximizing behavior with non-economic concerns.</p>
                            <p>Interest in business ethics accelerated dramatically during the 1980s and 1990s, both within major corporations and within academia. For example, most major corporations today promote their commitment to non-economic values under headings. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Ket thuc phan "video"-->
        </div>
    </div>
</div>
