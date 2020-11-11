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
                <!-- div class="langs">
                    <ul>
                        <li><a href="#" class="active">RU</a></li>
                        <li><a href="#">UA</a></li>
                        <li><a href="#">EN</a></li>
                    </ul>
                </div -->
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
                <?php include 'icons_links.php'; ?>
            </div>
        </div>
        <div id="header_controls_toggle" class="desctop_hidden" onclick="$('#headerNavs').toggleClass('expanded');"></div>
    </div>
</div>