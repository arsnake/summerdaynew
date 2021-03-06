<?php include 'page_parts/header.php'; ?>

    <div class="row">
        <div class="inrow">
            <div class="h2">Команда</div>

            <div class="crumbs">
                <ul>
                    <li><a class="item" href="/">Головна /</a></li>
                    <li><span class="item">Команда</span></li>
                </ul>
            </div>

        </div>
    </div>

<?= Template::view([
    'member_groups' => [
        'Архітектурний відділ' => [
            ['name' => 'Циба Дмитро', 'title' => 'Архітектор', 'image' => '1.jpg'],
        ],
        'Будівництво' => [
            ['name' => 'Бахір Геннадій', 'title' => 'Менеджер проектів', 'image' => '2.jpg'],
//            ['name' => 'Горденко Сергій', 'title' => 'Виконроб', 'image' => '10.jpg'],
//            ['name' => 'Зубец Сергій', 'title' => 'Виконроб', 'image' => '18.jpg'],
//            ['name' => 'Клименчук Володимир', 'title' => 'Виконроб', 'image' => '19.jpg'],
//            ['name' => 'Коноваленко Олександр', 'title' => 'Виконроб', 'image' => '24.jpg'],
//            ['name' => 'Подзега Геннадій', 'title' => 'Виконроб', 'image' => '41.jpg'],
            ['name' => 'Сидоренко Олександр', 'title' => 'Головний енергетик', 'image' => '44.jpg'],
//            ['name' => 'Чернявський Олексій', 'title' => 'Менеджер із розвитку', 'image' => '49.jpg'],
            ['name' => 'Якубін Ігор', 'title' => 'Головний інженер', 'image' => '51.jpg'],
        ],
        'Бухгалтерія' => [
            ['name' => 'Дергачова Наталія', 'title' => 'Бухгалтер', 'image' => '11.jpg'],
            ['name' => 'Єщенко Олена', 'title' => 'Старший бухгалтер', 'image' => '14.jpg'],
            ['name' => 'Ковальчук Анастасія', 'title' => 'Фінансовий спеціаліст', 'image' => '20.jpg'],
            ['name' => 'Манило Олександр', 'title' => 'Заступник фінансового директора', 'image' => '33.jpg'],
            ['name' => 'Наливайко Маргаритта', 'title' => 'Бухгалтер', 'image' => '35.jpg'],
            ['name' => 'Шипилова Інна', 'title' => 'Економіст', 'image' => '50.jpg'],
//            ['name' => 'Ярова Юлія', 'title' => 'Бухгалтер', 'image' => '52.jpg'],
        ],
        'Відділ Зовнішньо-економічних зв’язків' => [
            ['name' => 'Крупа Надія', 'title' => 'Адміністративний менеджер', 'image' => '27.jpg'],
//            ['name' => 'Михайленко Наталія', 'title' => 'Менеджер із продаж', 'image' => '34.jpg'],
        ],
//        'Відділ інвестицій' => [
////            ['name' => 'Галушков Валерій', 'title' => 'Керівник відділу інвестицій', 'image' => '7.jpg'],
////            ['name' => 'Корець Ольга', 'title' => 'Менеджер відділу інвестицій', 'image' => '25.jpg'],
//        ],
        'Відділ кошторисів' => [
            ['name' => 'Жучкова Юлія', 'title' => 'Помічниця спеціаліста із кошторисів', 'image' => '16.jpg'],
            ['name' => 'Фокіна Лідія', 'title' => 'Спеціаліст із кошторисів', 'image' => '48.jpg'],
        ],
//        'Відділ по роботі з клієнтами' => [
////            ['name' => 'Луценко Сергій', 'title' => 'Соціолог', 'image' => '31.jpg'],
////            ['name' => 'Стародуб Олена', 'title' => 'Менеджер по роботі із клієнтами', 'image' => '45.jpg'],
//        ],
        'Відділ постачання' => [
            ['name' => 'Галай Катерина', 'title' => 'Старший спеціаліст', 'image' => '6.jpg'],
            ['name' => 'Коноваленко Геннадий', 'title' => 'Начальник відділу постачання', 'image' => '23.jpg'],
            ['name' => 'Некрасов Олексій', 'title' => 'Менеджер по закупівлям', 'image' => '36.jpg'],
            ['name' => 'Нечаєв Єгор', 'title' => 'Менеджер по закупкам', 'image' => '37.jpg'],
        ],
        'Відділ продаж' => [
            ['name' => 'Верниковська Тетяна', 'title' => 'Керівник відділу продаж', 'image' => '4.jpg'],
            ['name' => 'Воробйова Тетяна', 'title' => 'Менеджер відділу продаж', 'image' => '5.jpg'],
            ['name' => 'Загайнова Оксана', 'title' => 'Менеджер відділу продаж', 'image' => '17.jpg'],
            ['name' => 'Коломійчук Вікторія', 'title' => 'Менеджер відділу продаж', 'image' => '22.jpg'],
            ['name' => 'Попенко Констянтин', 'title' => 'Менеджер відділу продаж', 'image' => '43.jpg'],
        ],
//        'Відділ стратегічного розвитку територій' => [
////            ['name' => 'Орлов Андрій', 'title' => 'Директор', 'image' => '39.jpg'],
//        ],
//        'Готель Воронцовський' => [
//            ['name' => 'Гордей Надія', 'title' => 'Керуюча готелем', 'image' => '9.jpg'],
//            ['name' => 'Коробцова Олена', 'title' => 'Адміністратор', 'image' => '26.jpg'],
//            ['name' => 'Макропуло Юлія', 'title' => 'Адміністратор', 'image' => '32.jpg'],
//            ['name' => 'Плевако Ірина', 'title' => 'Адміністратор', 'image' => '40.jpg'],
//        ],
//        'Керівництво' => [
//            ['name' => 'Жокін Іван', 'title' => '', 'image' => '15.jpg'],
//            ['name' => 'Левченко Сергій', 'title' => '', 'image' => '30.jpg'],
//            ['name' => 'Фокарді Олексій', 'title' => '', 'image' => '47.jpg'],
//        ],
        'Проектний відділ' => [
            ['name' => 'Гневанова Олена', 'title' => 'Директор', 'image' => '8.jpg'],
            ['name' => 'Дорофеєва Марія', 'title' => 'Проектант', 'image' => '12.jpg'],
            ['name' => 'Друцька Олександра', 'title' => 'Архітектор', 'image' => '13.jpg'],
            ['name' => 'Кудін Олексій', 'title' => 'Проектант', 'image' => '28.jpg'],
            ['name' => 'Кукурудзяк Ганна', 'title' => 'Головний інженер-проектувальник', 'image' => '29.jpg'],
            ['name' => 'Ніколаєнко Тетяна', 'title' => 'Проектант', 'image' => '38.jpg'],
            ['name' => 'Поленова Лариса', 'title' => 'Проектант', 'image' => '42.jpg'],
            ['name' => 'Федоренко Марина', 'title' => 'Проектант', 'image' => '46.jpg'],
        ],
        'Технагляд' => [
            ['name' => 'Бодневич Павло', 'title' => 'Інженер із технічного нагляду', 'image' => '3.jpg'],
            ['name' => 'Коврежкин Ігорь', 'title' => 'Енергетик', 'image' => '21.jpg'],
        ],
        'Відділ реклами' => [
            ['name' => 'Вікторія Строкань', 'title' => 'Менеджер з реклами', 'image' => '53.jpg'],
        ],
    ],
    //'title' => 'Досягнення'
], 'page_parts/templates/team.html'); ?>

<?php include 'page_parts/footer.php'; ?>