<?php include 'page_parts/header.php'; ?>

    <div class="row">
        <div class="inrow">
            <div class="h2">Проекти</div>
            <div class="crumbs">
				<ul>
					<li><a class="item" href="/">Головна /</a></li>
					<li><span class="item">Проекти</span></li>
				</ul>
			</div>
            <div class="about">
                <p><strong>Grand Family Apartments та Grand Family Village</strong> - це новий для України рівень бізнесу та відпочинку, який успішно втілюється по всьому світові. Елітне якісне житло за вигідною ціною, обслуговування та гарантії від забудовника- це найвигідніша інвестиція у ваше майбутнє.</p>
            </div>
        </div>
    </div>

<?php include './page_parts/projects.php'; ?>
    <div class="row">
        <div class="inrow">
            <div class="h2"><strong>Grand</strong> Досягнення</div>
            <div class="achievements">
                <div class="achievement">
                    <div class="content">
                        <img src="assets/images/icons/office.svg" alt="Житлових корпусів">
                        <div class="number">5</div>
                        <div class="text">Житлових корпусів</div>
                    </div>
                </div>
                <div class="achievement">
                    <div class="content">
                        <img src="assets/images/icons/hand.svg" alt="Житлових корпусів">
                        <div class="number">174</div>
                        <div class="text">Квартири</div>
                    </div>
                </div>
                <div class="achievement">
                    <div class="content">
                        <img src="assets/images/icons/parking-area.svg" alt="Житлових корпусів">
                        <div class="number">2</div>
                        <div class="text">Паркінги</div>
                    </div>
                </div>
                <div class="achievement">
                    <div class="content">
                        <img src="assets/images/icons/roads.svg" alt="Житлових корпусів">
                        <div class="number">7,8</div>
                        <div class="text">Км. доріжок</div>
                    </div>
                </div>
                <div class="achievement">
                    <div class="content">
                        <img src="assets/images/icons/swimming-pool.svg" alt="Житлових корпусів">
                        <div class="number">1</div>
                        <div class="text">Басейн</div>
                    </div>
                </div>
                <div class="achievement">
                    <div class="content">
                        <img src="assets/images/icons/slide.svg" alt="Житлових корпусів">
                        <div class="number">3</div>
                        <div class="text">Дитячих майданчики</div>
                    </div>
                </div>
                <div class="achievement">
                    <div class="content">
                        <img src="assets/images/icons/beach.svg" alt="Житлових корпусів">
                        <div class="number">450</div>
                        <div class="text">Метрів чистого пляжу</div>
                    </div>
                </div>
                <div class="achievement">
                    <div class="content">
                        <img src="assets/images/icons/forest.svg" alt="Гектар озеленення">
                        <div class="number">2.1</div>
                        <div class="text">Гектар озеленення</div>
                    </div>
                </div>
                <div class="achievement">
                    <div class="content">
                        <img src="assets/images/icons/045-cctv.svg" alt="охорона території">
                        <div class="number">&nbsp;</div>
                        <div class="text">Охорона території</div>
                    </div>
                </div>
                <div class="achievement">
                    <div class="content">
                        <img src="assets/images/icons/washing-machine.svg" alt="прання білизни">
                        <div class="text">Прання білизни</div>
                    </div>
                </div>
                <div class="achievement">
                    <div class="content">
                        <img src="assets/images/icons/vacuum-cleaner.svg" alt="прибирання">
                        <div class="text">Прибирання</div>
                    </div>
                </div>
                <div class="achievement">
                    <div class="content">
                        <img src="assets/images/icons/008-skewer.svg" alt="зона барбекю">
                        <div class="text">Зона барбекю</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="row">
        <div class="inrow">
            	
			<div class="about">
                <p>Наші Комплекси знаходяться на першій лінії Азовського моря, мають розвинену інфраструктуру та усе необхідне для якісного життя та відпочинку.</p>
                <p>Здійсніть свою мрію разом з <strong>Grand Family Apartments.</strong></p>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="inrow">
            <div class="h2"><strong>Галерея</strong> Іsatex Invest Group</div>
            <div class="gallery">
                <div class="owl-carousel owl-theme">
                    <?php
                    $directory = "assets/images/gallery/projects";    // Папка с изображениями
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
                            echo '<a data-fancybox="galleryUniqueId" data-caption="" href="'.$directory.'/'.$file.'"><img src="'.$directory.'/'.$file.'" class="item" title="'.$file.'" style="height: 200px;"/></a>';
                            $i++;
                        }

                    }
                    closedir($dir_handle);  //закрыть папку
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('ul li').each(function(i)
        {
            $(this).find('a').removeClass('active'); // This is your rel value
            $('a[href$="projects"]').addClass('active');
        });
    </script>
<?php include 'page_parts/footer.php'; ?>