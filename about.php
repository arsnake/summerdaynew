<?php include 'page_parts/header.php'; ?>

    <div class="row">
        <div class="inrow">
            <div class="h2">Про нас</div>
            
            <div class="crumbs">
				<ul>
					<li><a class="item" href="/">Головна /</a></li>
					<li><span class="item">Про нас</span></li>
				</ul>
			</div>

            <?php
                $owners = [
                  ['name' => 'Олексій Фокарді', 'image' => 'owner_avatar_1.jpg', 'description' => 'Генеральний директор', 'text' => 'Світ не стоїть на місці і тільки нові підходи з індивідуальним баченням все частіше дозволяють досягти необхідних результатів. Понад 15 років набутого досвіду переконали нас, що найкращим пріоритетом є довгострокові перспективи, довіра клієнтів і надійна репутація. Ми використовуємо досвід, сучасні технології і безпечні рішення. Будуємо майбутнє саме для вас. '],
                  ['name' => 'Іван Жокін', 'image' => 'owner_avatar_3.jpg', 'description' => 'Операційний директор', 'text' => 'Будівництво - це комплексний, кропіткий процес, що вимагає вправності, вміння та розуміння. Вся наша команда, від проєктувальника до муляра, - це професіонали своєї справи. Гарантуючи бездоганну якість, ми можемо з гордістю стверджувати, що наша нерухомість стане комфортною і безпечною оселею для кожної сім\'ї. '],
                  ['name' => 'Сергій Левченко', 'image' => 'owner_avatar_2.jpg', 'description' => 'фінансовий директор', 'text' => 'Реалізація будь-якого проєкту – це виклик і завдання, вирішення якого потребує максимальної точності, оперативності та віддачі. Починаючи роботу над кожним проєктом, ми враховуємо всі варіанти, опрацьовуємо кожен крок і розробляємо відповідний план реалізації. Головним доказом нашого професіоналізму є завершені об\'єкти і довіра наших партнерів. ']
                ];
            ?>
            <div class="owners-reviews">
                <?php foreach($owners as $owner){ ?>
                    <div class="review">
                        <div class="avatar">
                            <img src="assets/images/<?=$owner['image']?>" alt="alt">
                        </div>
                        <div class="content">
                            <div class="name"><?=$owner['name']?></div>
                            <div class="description"><?=$owner['description']?></div>
                            <div class="text"><?=$owner['text']?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="about">
                <p><b>ISATEX INVEST GROUP</b> – багатогалузевий холдинг зі штаб-квартирою в м. Мелітополь, який завдяки 15-річному досвіду об’єднує комерційну діяльність, інноваційні бізнес-проекти та соціальне підприємництво. На сьогодні до складу холдингу входять 43 Українські компанії та 3 закордонних підприємства.</p>
                <h2>Діяльність ISATEX INVEST GROUP:</h2>
                <ul>
                    <li>Будівництво нерухомості</li>
                    <li>Оренда, продаж нерухомого майна</li>
                    <li>Туризм та готельний бізнес</li>
                    <li>Сільське господарство</li>
                    <li>Сільськогосподарська переробка</li>
                    <li>Стратегічний та інвестиційний консалтинг</li>
                    <li>Енергетика</li>
                    <li>Управлінська діяльність</li>
                </ul>

                <h2>Географія діяльності</h2>
                <p>В Україні:</p>
                <ul>
                    <li>Мелітополь</li>
                    <li>Київ</li>
                    <li>Дніпро</li>
                    <li>Приморськ</li>
                    <li>Запоріжжя</li>
                </ul>

                <p>За кордоном:</p>
                <ul>
                    <li>Провінція Онтаріо (Канада)</li>
                    <li>Рига (Латвія)</li>
                </ul>

            </div>
        </div>
    </div>

<div class="row">
    <div class="inrow">
        <div class="h2"><strong>Досягнення</strong> Іsatex Invest Group</div>
        <div class="achievements">
            <!--
                TODO: Заменить вёрстку ачивметнов на массив + цикл foreach
                $achievements = [
                    ['text' => 'Житлових корпусів', 'number' => 5, 'image' => '1.svg']
                ]
                <div class="achievement">
                    <img src="assets/images/icons/$achievement['image']" alt="$achievement['name']">
                    <div class="number">$achievement['number']</div>
                    <div class="text">$achievement['name']</div>
                </div>
            -->
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/aparment.svg" alt="Збудовано квартир">
                    <div class="number">1445</div>
                    <div class="text">збудовано квартир</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/002-smart-home-5.svg" alt="кв.м. житла ">
                    <div class="number">19855</div>
                    <div class="text">кв.м. житла </div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/014-factory-2.svg" alt="Реконструйовано завод">
                    <div class="number">1</div>
                    <div class="text">реконструйовано завод</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/001-open%2024%20hours.svg" alt="Готельний комплекс">
                    <div class="number">1</div>
                    <div class="text">готельний комплекс</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/027-sales.svg" alt=">кв.м. побудовано офісних приміщень">
                    <div class="number">9500</div>
                    <div class="text">кв.м. побудовано офісних приміщень</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/029-solar-panel.svg" alt="Встановлено кв.м. сонячних панелей">
                    <div class="number">14300</div>
                    <div class="text">встановлено кв.м. сонячних панелей</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/008-conveyor.svg" alt="Побудовано виробничих приміщень та складів кв.м">
                    <div class="number">30000</div>
                    <div class="text">побудовано виробничих приміщень та складів кв.м</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/007-logistics.svg" alt="Побудовано логістичний термінал">
                    <div class="number">1</div>
                    <div class="text">побудовано логістичний термінал</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="inrow">
        <div class="h2"><strong>Галерея</strong> Іsatex Invest Group</div>
        <div class="gallery">
            <div class="owl-carousel owl-theme"><?= Gallery::getSlidesHtml("assets/images/gallery/about", "galleryUniqueId") ?>
            </div>
        </div>
    </div>
</div>
<?php include 'page_parts/footer.php'; ?>