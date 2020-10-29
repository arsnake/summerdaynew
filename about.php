<?php include 'page_parts/header.php'; ?>

    <div class="row">
        <div class="inrow">
            <div class="h2">Про нас</div>
            <?php include 'page_parts/crumbs.php'; ?>

            <?php
                $owners = [
                  ['name' => 'Олексій Фокарді', 'image' => 'owner_avatar_1.jpg', 'description' => 'співвласник, керуючий партнер', 'text' => 'Ми реалізуємо складні проекти  в суворих умовах. Отримання максимальних результатів  вимагає довіри, яка дозволяє всім висловлюватися вільно, осягнення нових способів мислення і достатньої сили волі, щоб зуміти попросити про допомогу. Ми працюємо тільки на ринках, де можемо внести значний вклад в покращення життя країни. Це — наша спадщина, і ми прагнемо залишити її майбутнім поколінням, незважаючи на пріоритет короткострокових перспектив у нинішньому світі'],
                  ['name' => 'Іван Жокін', 'image' => 'owner_avatar_3.jpg', 'description' => 'співвласник, операційний директор.', 'text' => 'Професія будівельника завжди була затребуваною та престижною. Будуючи нові об’єкти, ми створюємо певну інфраструктуру та багато робочих місць. Ми також знаходимось у тісній співпраці із місцевими владами, щоб наша праця була найбільш вигідною для держави та суспільства.'],
                  ['name' => 'Сергій Левченко', 'image' => 'owner_avatar_2.jpg', 'description' => 'співвласник, операційний директор', 'text' => 'Ми прийняли рішення будувати тому що таке наше покликання. Нам подобається те, що ми робимо, і наші співробітники люблять власним прикладом показувати, як потрібно працювати, і вірять в те, заради чого ми всі тут. Завдання зазвичай називають нездійсненним тільки тому, що його раніше ніхто ніколи не виконував']
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
                <p>Холдинг Isatex Invest Group виник в м. Мелітополь Запорізької області, Україна. Історія холдингу розпочалася з невеликого приватного бізнесу, який за рахунок швидкого розвитку, в результаті, придбав форму багатогалузевого холдингу.</p>
<p>Сьогодні холдинг складається з 21 компанії, охоплюючи кілька індустрій, переважно – у сфері будівництва, виробництва, консалтингу, готельного бізнесу та сільського господарства. Ряд наших цільових галузей також доповнюється некомерційними громадськими організаціями, спрямованими на соціальний розвиток, рівноправність, створення середнього класу і стабільність в громадянському суспільстві.</p>
<p>З 2013 року холдинг розширив свою діяльність на міжнародний рівень, заснувавши бізнес в Латвії і в Канадській провінції Онтаріо.</p>
</p>
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
                    <img src="assets/images/icons/hand.svg" alt="Житлових корпусів">
                    <div class="number">1445</div>
                    <div class="text">збудовано квартир</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/office.svg" alt="Житлових корпусів">
                    <div class="number">19855</div>
                    <div class="text">кв.м. житла </div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/slide.svg" alt="Житлових корпусів">
                    <div class="number">1</div>
                    <div class="text">реконструйовано завод</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/parking-area.svg" alt="Житлових корпусів">
                    <div class="number">1</div>
                    <div class="text">готельний комплекс</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/roads.svg" alt="Житлових корпусів">
                    <div class="number">9500</div>
                    <div class="text">кв.м. побудовано офісних приміщень</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/swimming-pool.svg" alt="Житлових корпусів">
                    <div class="number">14300</div>
                    <div class="text">встановлено кв.м. сонячних панелей</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/beach.svg" alt="Житлових корпусів">
                    <div class="number">30000</div>
                    <div class="text">побудовано виробничих приміщень та складів кв.м</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/forest.svg" alt="Житлових корпусів">
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
            <div class="owl-carousel owl-theme">
			<?php
				$directory = "assets/images/gallery/about";    // Папка с изображениями
				$allowed_types=array("jpg", "png", "gif");  //разрешеные типы изображений
				$file_parts = array();
				  $ext="";
				  $title="";
				  $i=0;
				//пробуем открыть папку
				  $dir_handle = @opendir($directory) or die("Ошибка при открытии папки !!!");
				while ($file = readdir($dir_handle))    //поиск по файлам
				  {
				  if($file=="." || $file == "..") continue;  //пропустить ссылки на другие папки
				  $file_parts = explode(".",$file);          //разделить имя файла и поместить его в массив
				  $ext = strtolower(array_pop($file_parts));   //последний элеменет - это расширение


				  if(in_array($ext,$allowed_types))
				  {
				  echo '
							<a data-fancybox="galleryUniqueId" data-caption="" href="'.$directory.'/'.$file.'"><img src="'.$directory.'/'.$file.'" class="item" title="'.$file.'" style="height: 200px;"/></a>
							
						';
				 $i++;
				  }

				  }
				closedir($dir_handle);  //закрыть папку
			?>
            </div>
        </div>
    </div>
</div>

<?php include 'page_parts/footer.php'; ?>