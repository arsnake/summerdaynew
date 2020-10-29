<div class="row">
    <div class="inrow">
        <div id="headerNavs">
            <div class="mobile-menu-content desctop_hidden">
                <div id="close_mobile_menu" onclick="$('#headerNavs').toggleClass('expanded');"></div>
                <!--<img src="/design/dentalogic/images/logo.svg" class="logo" alt="Dentalogic">-->
                <div class="title">Зв'язок</div>
                <?php include './page_parts/contacts.php'; ?>

                <div class="title">Меню</div>
            </div>
            <div class="head">
                <?php include 'menu.php'; ?>

                <!-- TODO: здесь реализуй сортировку чтобы активный язык был первым -->
                <!-- TODO: активной ссылке добавлять класс .active -->
                <!-- TODO: микроразметка -->
                <div class="langs">
                    <ul>
                        <li><a href="#" class="active">RU</a></li>
                        <li><a href="#">UA</a></li>
                        <li><a href="#">EN</a></li>
                    </ul>
                </div>
            </div>
            <div class="side-nav">
                <!-- TODO: микроразметка -->
                <div class="companies">
                    <a href="/project" class="gfa">
                        <img src="assets/images/logo-g.png" alt="Grand Family Apartments">
                        <span class="brand">Grand Family</span>
                        <span class="model">Apartments</span>
                    </a>
                    <a href="/project2" class="gfv">
                        <img src="assets/images/logo-gfv.svg" alt="Grand Family Village">
                        <span class="brand">Grand Family</span>
                        <span class="model">Village</span>
                    </a>
                </div>
                <div class="icon-links">
                    <div class="social">
                        <ul>
                            <li><a href="https://www.facebook.com/primorsk.apart." class="facebook fab fa-facebook" title="Facebook" target="_blank"></a></li>
                            <li><a href="https://www.instagram.com/grand_family_apartments/?hl=uk" class="instagram fab fa-instagram" title="Instagram" target="_blank"></a></li>
                            <li><a href="https://www.youtube.com/channel/UC-VT5giBfkDIqzNpvIUHErw?view_as=subscriber" class="youtube fab fa-youtube" title="Youtube" target="_blank"></a></li>
                        </ul>
                    </div>
                    <div class="messengers">
                        <ul>
                            <li><a href="viber://chat?number=%2B380977942020" class="viber fab fa-viber" title="Viber" target="_blank"></a></li>
                            <li><a href="whatsapp://send?phone=%2B380977942020" class="wats-app fab fa-whatsapp" title="Whatsapp" target="_blank"></a></li>
                            <li><a href="#" class="telegram fab fa-telegram" title="Telegram" target="_blank"></a></li>
                            <li><a href="https://www.messenger.com/t/primorsk.apart" class="facebook-messenger fab fa-facebook-messenger" title="Messenger" target="_blank"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="header_controls_toggle" class="desctop_hidden" onclick="$('#headerNavs').toggleClass('expanded');"></div>
    </div>
</div>