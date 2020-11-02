<?php include 'page_parts/header.php'; ?>

    <div class="row">
        <div class="inrow">
            <div class="h2">Оновлення сайту</div>
            <div class="crumbs">
                <ul>
                    <li><a class="item" href="/">Головна /</a></li>
                    <li><a class="item" href="/news">Новини /</a></li>
                    <li><span class="item">Оновлення сайту</span></li>
                </ul>
            </div>

            <div class="article-content">
                <div class="col-50">
                    <div class="date"><i class="fa fa-calendar-alt"></i>1 листопада 2020</div>
                    <div class="text">
                        <p>Світ дуже швидко змінюється, і ми разом із ним теж. Сьогодні наша группа розробників та дизайнерів нарешті завершила усі роботи з повного оновлення дизайну та функціоналу сайту. Незабаром ми ще додамо декілька дуже цікавих функій, завдяки яким Ви отримаєте ще більше інформації про наші проекти. Підписуйтесь на новини, слідкуйте за оновленнями. Приємного користування нашим оновленим інформаційним каналом.</p>
                    </div>
                </div>
                <div class="col-50"><img src="assets/images/news/news-4.jpg" alt="Оновлення сайту"></div>
            </div>


        </div>
    </div>


<?php include 'page_parts/buy_rent.php'; ?>
<?php include 'page_parts/last_news.php'; ?>
    <script>
        $('ul li').each(function(i)
        {
            $(this).find('a').removeClass('active'); // This is your rel value
            $('a[href$="news"]').addClass('active');
        });
    </script>
<?php include 'page_parts/footer.php'; ?>