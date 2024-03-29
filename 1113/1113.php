<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/1113.less', 'css/1113.css');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>1113</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap-3.3.6.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap-3.3.6.min.js"></script>
    <script src="js/questions-js.js"></script>
    <link href="css/1113.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="css/swiper-4.5.1.min.css">
    <script src="js/swiper-4.5.1.min.js"></script>
</head>
<body>
    <?php include '../1113/1113-content.php'; ?>
    <script src="js/1113.js"></script>
</body>
</html>