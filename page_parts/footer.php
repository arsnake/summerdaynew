
<?php include 'subscribe.php'; ?>


<?php
if(($_SERVER['REQUEST_URI'] === '/about')) {
    include 'map-isatex.php';
}else{
    include 'map.php';
}
?>


<div class="row">
    <div class="inrow">
        <div class="footer">
            <div class="content">
                <div class="col-25">
                    <div class="title">Контакти</div>
                    <?php include './page_parts/contacts.php'; ?>
                </div>
                <div class="col-25">
                    <div class="title">Зв'язок</div>
                    <?= CallbackForm::getHtml('footerCallback') ?>
                    <?php include 'icons_links.php'; ?>
                </div>
                <div class="col-25">
                    <div class="title">Меню</div>
                    <?php include 'menu.php'; ?>
                </div>
                <div class="col-25">
                    <div class="title">Зареєстровані торгові марки</div>
                    <div class="footer-logos">
                        <!--<img src="assets/images/3logos.svg" alt="Grand Family">-->
                        <img class="gfa" src="assets/images/gfa.svg" alt="Grand Family Apartments">
                        <img class="gfv" src="assets/images/gfv.svg" alt="Grand Family Village">
                        <img class="isatex" src="assets/images/logo-isatex.svg" alt="Isatex Invest Group">
                        <img class="isatex" src="assets/images/isatex-logo-2.jpg" alt="TM Isatex">

                    </div>
                </div>
            </div>
            <div class="copyright">Copyrights Isatex Invest Group 2020</div>
            <div class="will-be-grand">Усе буде GRAND</div>
        </div>
    </div>
</div>

<link rel="preload" href="webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
<link rel="preload" href="webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous">
<link href="assets/font-awesome/css/all.css" rel="preload" as="style" onload="this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="assets/font-awesome/css/all.css"></noscript>
</body>
</html>