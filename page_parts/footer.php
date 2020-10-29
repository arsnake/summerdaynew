
<?php include 'subscribe.php'; ?>
<?php include 'map.php'; ?>

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
                    <div class="callback-form jsCallbackForm">
                        <div class="text">
                            Залиште свій контакт і ми зателефонуємо
                        </div>
                        <div class="callback">Дякуємо за звернення, наші менеджери зв'яжуться з вами у найближчий час</div>
                        <div class="content">
                            <label for="">Номер телефону</label>
                            <input type="text" name="phone">
                        </div>
                        <div class="controls">
                            <!-- TODO: ajax сделать ajax отправку и сохранение данных формы на бекенде  -->
                            <!-- TODO: слать заявку на вайбер  -->
                            <span class="submit" onclick="$('.jsCallbackForm').addClass('submitted')">Зателефонуйте <i class="fa fa-phone"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-25">
                    <div class="title">Меню</div>
                    <?php include 'menu.php'; ?>
                </div>
                <div class="col-25">
                    <div class="title">Зареєстровані торгові марки</div>
                    <div class="footer-logos">
                        <img src="assets/images/3logos.jpg" alt="Grand Family">
                        <!--<img class="gfa" src="assets/images/gfa.svg" alt="Grand Family Apartments">
                        <img class="gfv" src="assets/images/gfv.svg" alt="Grand Family Village">
                        <img class="isatex" src="assets/images/logo-isatex.svg" alt="Isatex Invest Group">-->
                    </div>
                </div>
            </div>
            <div class="copyright">Copyrights Isatex Invest Group 2020</div>
            <div class="will-be-grand">Усе буде GRAND</div>
        </div>
    </div>
</div>


<script src="assets/scripts/owlcarousel/owl.carousel.js"></script>
<script src="assets/scripts/fancybox/jquery.fancybox.min.js"></script>

<script>
    $('.news.owl-carousel').owlCarousel({
        margin: 0,
        nav:false,
        loop:true,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })
    $('.gallery .owl-carousel').owlCarousel({
        margin: 0,
        nav:false,
        loop:false,
        dots:true,
        // autoWidth:true,
        lazyLoad: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })
</script>

</body>
</html>