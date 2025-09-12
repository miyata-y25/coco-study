<?php
    $site_title = '';
    if (isset(\Service\Constans::$site_title[$controller . '_' . $action])) {
        $site_title = \Service\Constans::$site_title[$controller . '_' . $action];
    } elseif (isset(\Service\Constans::$site_title[$controller])) {
        $site_title = \Service\Constans::$site_title[$controller];
    } else {
        $site_title = 'ココスタディ紫明店｜京都・北区の会員制自習室';
    }
?>
<!doctype html>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<head>
<meta charset="utf-8" />
<title><?php echo $site_title; ?></title>
<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<meta content="telephone=no" name="format-detection" />
<meta content="width=device-width,initial-scale=1" name="viewport" />
<meta content="" name="keywords" />

<link href="https://coco-study.jp/assets/css/base.css" rel="stylesheet" type="text/css" />
<link href="https://coco-study.jp/assets/css/top.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="https://coco-study.jp/favicon.ico" sizes="32x32">
<link rel="icon" href="https://coco-study.jp/icon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="https://coco-study.jp/apple-touch-icon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@1,500&family=Zen+Kaku+Gothic+New:wght@400;500;700&display=swap" rel="stylesheet">
</head>


<body>


<header class="site-header">
    <div class="site-header__inner">
        <h1 class="site-header__logo"><img src="https://coco-study.jp/assets/img/common/header_logo.svg" alt="ココスタディ紫明店"></h1>
    </div>
</header>


<div class="wrap">