<!doctype html>

<!-- TODO: активный язык -->
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <script id="afterload_scripts"></script>

    <!-- TODO: тайтл активной страницы -->
    <title>Grand Family Apartments</title>

    <!-- TODO: метатеги для ктивных языков -->
    <!--<link rel='alternate' hreflang='en' href='https://some.site/en' />
    <link rel='alternate' hreflang='ru' href='https://some.site/' />
    <link rel='alternate' hreflang='uk' href='https://some.site/ua' />-->

    <!-- TODO: метатеги для постранички: прев, некст -->
    <!-- TODO: мета каноникал -->
    <?php
        $Version = 19;
        $cssContent = '';

        $cssContent .= '<link rel="stylesheet" type="text/css" href="assets/scripts/jquery-modal/jquery.modal.min.css"/>';
        $cssContent .= '<link rel="stylesheet" type="text/css" href="assets/scripts/owlcarousel/owl.carousel.min.css"/>';
        $cssContent .= '<link rel="stylesheet" type="text/css" href="assets/css/style.css?v='.$Version.'"/>';

//        $cssContent .= file_get_contents('./assets/scripts/jquery-modal/jquery.modal.min.css');
//        $cssContent .= file_get_contents('./assets/scripts/owlcarousel/owl.carousel.min.css');
//        $cssContent .= file_get_contents('./assets/css/style.css');
//        $cssContent = "<style>$cssContent</style>";

        echo $cssContent;

        $jsContent = '';
        $jsContent .= file_get_contents('./assets/scripts/jquery-3.5.1.min.js');
        $jsContent .= 'jQuery.event.special.touchstart = {setup: function( _, ns, handle ) {this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });}};';
        $jsContent .= file_get_contents('./assets/scripts/scripts-afterload/index.js');
        $jsContent = "<script>$jsContent</script>";
        echo $jsContent;
    ?>


    <meta name="google-site-verification" content="zZ394Fm8P0o-K3kfzYf7WQMZUHWvdUjKivDABoa1FWU" />

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '368749994872073');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=368749994872073&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

</head>

<body  class="js-stop-transition">
<?php require_once './Classes/Gallery.php'; ?>
<?php require_once './Classes/CallbackForm.php'; ?>
<?php require_once './Classes/CallbackModal.php'; ?>
<?php require_once './Classes/CallbackModalButton.php'; ?>
<?php include 'header_nav.php'; ?>