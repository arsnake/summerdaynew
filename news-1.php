<?php include 'page_parts/header.php'; ?>

    <div class="row">
        <div class="inrow">
            <div class="h2">Нове відео</div>
            <div class="crumbs">
                <ul>
                    <li><a class="item" href="/">Головна /</a></li>
                    <li><a class="item" href="/news">Новини /</a></li>
                    <li><span class="item">Нове відео</span></li>
                </ul>
            </div>

            <div class="article-content">
                <div class="col-50">
                    <div class="date"><i class="fa fa-calendar-alt"></i>23 вересня 2020</div>
                    <div class="text">
                        <p>Зустрічайте наше нове відео, у якому ми розповідаємо про життя та устрій нашого Комплексу Grand Family Apartments. Детальніше переглянути відео можна на нашому
                            <a href="https://www.youtube.com/channel/UC-VT5giBfkDIqzNpvIUHErw?view_as=subscriber" target="_blank">youtube</a> каналі. Переходьте, підписуйтесь, коментуйте. Гарного перегляду !</p>
                    </div>
                </div>
                <div class="col-50"><img src="assets/images/news/news-1.jpg" alt="Нове відео"></div>
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