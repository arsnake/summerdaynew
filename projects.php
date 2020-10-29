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
<?php include 'page_parts/achievements.php'; ?>

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

<?php include 'page_parts/footer.php'; ?>