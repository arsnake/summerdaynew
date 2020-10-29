<div class="row">
    <div class="inrow">
        <div class="h2">Grand Новини</div>
        <?php
            $news = [
              ['date' => '10 вересня 2020', 'name' => 'Новий рівень житла', 'image' => '1.jpg', 'company_name' => 'apartments', 'company_logo' => 'logo-g.png', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at corporis culpa dolor doloribus earum fuga fugit id illum, impedit iusto maxime, natus nobis odio optio quod rerum vitae? Atque!'],
              ['date' => '10 вересня 2020', 'name' => 'Новий рівень житла', 'image' => '1.jpg', 'company_name' => 'apartments', 'company_logo' => 'logo-g.png', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at corporis culpa dolor doloribus earum fuga fugit id illum, impedit iusto maxime, natus nobis odio optio quod rerum vitae? Atque!'],
              ['date' => '10 вересня 2020', 'name' => 'Новий рівень житла', 'image' => '1.jpg', 'company_name' => 'apartments', 'company_logo' => 'logo-g.png', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at corporis culpa dolor doloribus earum fuga fugit id illum, impedit iusto maxime, natus nobis odio optio quod rerum vitae? Atque!'],
              ['date' => '10 вересня 2020', 'name' => 'Новий рівень житла1', 'image' => '1.jpg', 'company_name' => 'village', 'company_logo' => 'logo-gfv.svg', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at corporis culpa dolor doloribus earum fuga fugit id illum, impedit iusto maxime, natus nobis odio optio quod rerum vitae? Atque!'],
            ];
        ?>

        <div class="news owl-carousel owl-theme">
            <?php foreach($news as $article){ ?>
                <a class="article item" href="newscontent">
                    <div class="title">
                        <div class="name">
                            <div class="date"><?= $article['date'] ?></div>
                            <div class="text"><?= $article['name'] ?></div>
                        </div>
                        <span class="company-logo <?= $article['company_name'] ?>">
                        <img src="assets/images/<?= $article['company_logo'] ?>" alt="Grand Family <?= $article['company_name'] ?>">
                        <span class="brand">Grand Family</span>
                        <span class="model"><?= $article['company_name'] ?></span>
                    </span>
                    </div>

                    <div class="content">
                        <img src="assets/images/news/<?= $article['image'] ?>" alt="<?= $article['name'] ?>">
                        <div class="text"><?= $article['text'] ?></div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</div>