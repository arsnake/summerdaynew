    <?php include 'page_parts/header.php'; ?>

    <div class="row">
        <div class="inrow">
            <div class="h2"><strong>Grand Family Apartments</strong> - нове ім’я, нове життя, нові можливості</div>
            <div class="crumbs">
				<ul>
					<li><a class="item" href="/">Головна /</a></li>
					<li><a class="item" href="/projects">Придбати /</a></li>
					<li><span class="item">Grand Family Apartments</span></li>
				</ul>
			</div>
            <div class="about">
                <p>Усе буде <strong>Grand!</strong></p>
            </div>
			
			<div class="header-bg second-queue"></div>
			
        </div>
    </div>

    <div class="row">
        <div class="inrow">
            <div class="h2">Другий етап будівництва:</div>
            <div class="about">
                <p>Із великим задоволенням ми раді представити Вам нову стадію нашого проекту- другу чергу будівництва. Ставлячись із великою повагою до наших інвесторів та гостей, усі будівельні роботи ми робимо виключно із 1 жовтня до 1 травня. </p>
                <div>
                    <a href="#" target="_blank" class="download-link"><i class="fa fa-download"></i>Планування 30 кв.м. PDF</a>
                    <a href="#" target="_blank" class="download-link"><i class="fa fa-download"></i>Планування 64 кв.м. PDF</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="inrow">
        <div class="h2"><strong>Grand</strong> будівництво </div>
        <div class="achievements">
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/office.svg" alt="Житлових корпусів">
                    <div class="text">перша лінія моря</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/hand.svg" alt="Житлових корпусів">
                    <div class="text">басейн із підігрівом</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/parking-area.svg" alt="Житлових корпусів">
                    <div class="text">кафе та ресторан</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/roads.svg" alt="Житлових корпусів">
                    <div class="text">дитячі майданчики</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/swimming-pool.svg" alt="Житлових корпусів">
                    <div class="text">зони відпочинку</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/slide.svg" alt="Житлових корпусів">
                    <div class="text">зони барбекю</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/beach.svg" alt="Житлових корпусів">
                    <div class="text">паркінги</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/forest.svg" alt="Житлових корпусів">
                    <div class="text">цілодобова охорона</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/forest.svg" alt="Житлових корпусів">
                    <div class="text">СПА салон</div>
                </div>
            </div>
			
			
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/roads.svg" alt="Житлових корпусів">
                    <div class="text">конференц- зала</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/swimming-pool.svg" alt="Житлових корпусів">
                    <div class="text">спортивні майданчики</div>
                </div>
            </div>
            <div class="achievement">
                <div class="content">
                    <img src="assets/images/icons/slide.svg" alt="Житлових корпусів">
                    <div class="text">магазини</div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="row">
        <div class="inrow">
            <div class="h2">Другий етап будівництва:</div>
            <div class="gallery">
                <div class="owl-carousel owl-theme">
                    <?php
                    $directory = "assets/images/gallery/2nd-queue";    // Папка с изображениями
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
                            echo '<a data-fancybox="galleryUniqueId1" data-caption="" href="'.$directory.'/'.$file.'"><img src="'.$directory.'/'.$file.'" class="item" title="'.$file.'" style="height: 200px;"/></a>';
                            $i++;
                        }

                    }
                    closedir($dir_handle);  //закрыть папку
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="inrow">
            <div class="h2">Перший етап будівництва. Друге життя “Горіхового гаю”</div>
            <div class="about">
                <p>
Ще у 2016 році, “Горіховий гай” перебував в жалюгідному стані. Зараз, коли ми навели лад, побудувавши 1 серію будівництва, вже важко навіть уявити, що ще 2 роки тому ця територія була настільки захаращеною, що радше нагадувала смітник. Безлад панував не тільки на цій державній території, а й в документах.
</p>
            </div>
        </div>
    </div>

    <?php include 'page_parts/achievements.php'; ?>
    <div class="row">
        <div class="inrow">
            <div class="h2">Перший етап будівництва:</div>
            <div class="gallery">
                <div class="owl-carousel owl-theme">
                <?php
                    $directory = "assets/images/gallery/1st-queue";    // Папка с изображениями
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
                      echo '<a data-fancybox="galleryUniqueId1" data-caption="" href="'.$directory.'/'.$file.'"><img src="'.$directory.'/'.$file.'" class="item" title="'.$file.'" style="height: 200px;"/></a>';
                     $i++;
                      }

                      }
                    closedir($dir_handle);  //закрыть папку
                ?>
                </div>
            </div>
        </div>
    </div>
	
	<div class="row">
        <div class="inrow">
            <div class="h2"><strong>Grand</strong> інвестиція</div>
            <div class="about">
                <p>Купуючи нерухомість біля моря, Ви вигідно та надійно вкладаєте свої кошти у масштабний інфраструктурний проект. Ваші кошти будуть надійно збережені та примножені з роками.</p>
                <div class="achievements">
					<div class="achievement">
						<div class="content">
							<img src="assets/images/icons/parking-area.svg" alt="Житлових корпусів">
							<div class="text">розстрочка від забудовника</div>
						</div>
					</div>
					<div class="achievement">
						<div class="content">
							<img src="assets/images/icons/roads.svg" alt="Житлових корпусів">
							<div class="text">ліквідна нерухомість</div>
						</div>
					</div>
					<div class="achievement">
						<div class="content">
							<img src="assets/images/icons/swimming-pool.svg" alt="Житлових корпусів">
							<div class="text">стабільний пасивний дохід</div>
						</div>
					</div>
					<div class="achievement">
						<div class="content">
							<img src="assets/images/icons/slide.svg" alt="Житлових корпусів">
							<div class="text">обслуговування керуючою компанією</div>
						</div>
					</div>
					<div class="achievement">
						<div class="content">
							<img src="assets/images/icons/beach.svg" alt="Житлових корпусів">
							<div class="text">окупність до 3 років </div>
						</div>
					</div>
			</div>
            </div>
			<div class="h2"><strong>155</strong> щасливих сімей вже з нами</div>
        </div>
    </div>

    <?php include './page_parts/projects.php'; ?>

    <?php include 'page_parts/footer.php'; ?>