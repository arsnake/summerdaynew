<div class="row">
    <div class="inrow">
        <div class="h2">Grand Новини</div>
        <?php
        $news = [

            ['date' => '1 листопада 2020', 'url' => 'news-4', 'name' => 'Оновлення сайту', 'image' => 'news-4.jpg', 'company_name' => 'apartments', 'company_logo' => 'logo-g.png', 'text' => 'Світ дуже швидко змінюється, і ми разом із ним теж. Сьогодні наша группа розробників та дизайнерів нарешті завершила усі роботи з повного оновлення дизайну та функціоналу сайту. Незабаром ми ще додамо декілька дуже цікавих ...'],
            ['date' => '14 жовтня 2020', 'url' => 'news-3', 'name' => 'День українського козацтва', 'image' => 'news-3.jpg', 'company_name' => 'apartments', 'company_logo' => 'logo-g.png', 'text' => 'Цього дня українці святкують одразу три свята. Перше- Свято Покрови Божої Матері, друге- День українського козацтва, і наймолодше- День захисника України.'],
            ['date' => '01 жовтня 2020', 'url' => 'news-2', 'name' => 'Початок підготовки до будівництва', 'image' => 'news-2.jpg', 'company_name' => 'apartments', 'company_logo' => 'logo-g.png', 'text' => 'Ми із великою повагою ставимось до наших інвесторів та гостей, тому усі будівельні роботи, пов&#39;язані із великою технікою та підвищеним шумом, проводимо у період виключно із 1 жовтня по 1 травня. Із 1 жовтня...'],
            ['date' => '23 вересня 2020', 'url' => 'news-1', 'name' => 'Нове відео', 'image' => 'news-1.jpg', 'company_name' => 'apartments', 'company_logo' => 'logo-g.png', 'text' => 'Зустрічайте наше нове відео, у якому ми розповідаємо про життя та устрій нашого Комплексу Grand Family Apartments. Детальніше переглянути відео можна на ...']

        ];
        ?>

        <div class="news owl-carousel owl-theme">
            <?php foreach($news as $article){ ?>
                <a class="article item" href="<?= $article['url'] ?>">
                    <div class="title">
                        <div class="name">
                            <div class="date"><?= $article['date'] ?></div>
                            <div class="text"><?= $article['name'] ?></div>
                        </div>
                        <span class="company-logo <?= $article['company_name'] ?>">
                        <img class="owl-lazy" data-src="assets/images/<?= $article['company_logo'] ?>" alt="Grand Family <?= $article['company_name'] ?>">
                        <span class="brand">Grand Family</span>
                        <span class="model"><?= $article['company_name'] ?></span>
                    </span>
                    </div>

                    <div class="content">
                        <img class="owl-lazy" data-src="assets/images/news/<?= $article['image'] ?>" alt="<?= $article['name'] ?>">
                        <div class="text"><?= $article['text'] ?></div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</div>