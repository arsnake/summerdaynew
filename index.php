<?php include 'page_parts/header.php'; ?>

<div class="row">
    <div class="inrow">
        <div class="video" style="position:relative;width:100%;">
		<video controls preload="auto" muted class="video-js" style="position:absolute;right: 0;bottom: 0;min-width: 100%;min-height: 100%;" id="main-video" poster="assets/images/video-bg.jpg" data-setup="{}">
		    <source src="/assets/video/GRAND FAMILY_6.10.mp4" type="video/mp4"/>
              <p class="vjs-no-js">
                 To view this video please enable JavaScript, and consider upgrading to a web browser that
                 <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
              </p>
		</video>
            <div class="glass">
                <div class="content">
                    <div class="title">Апартаменти біля моря</div>
                    <div class="controls">
                        <!-- TODO: при клике на кнопку - открывать видео во весь екран -->
							<span id="main-video-control" onclick="mainVideoControl()" class="play fa fa-play"></span>
                    </div>
                </div>
                <!--<img class="isatex-logo" src="assets/images/logo-isatex-light.svg" alt="Isatex Invest Group">-->
            </div>
        </div>
    </div>
</div>

<div class="row brands-links">
    <div class="inrow">
        <div class="isatex-link col-50">
            <div class="glass">
                <span class="content">
                    <img class="isatex-logo" src="assets/images/logo-isatex-light.svg" alt="Isatex Invest Group">
                    <div class="title">Про нас</br>Isatex INVEST Group</div>
                </span>
            </div>
        </div>
        <div class="col-25">
            <a href="/project" class="gfa col-25">
                <span class="content">
                    <img src="assets/images/logo-g.png" alt="Grand Family Apartments">
                    <span class="brand">Grand Family</span>
                    <span class="model">Apartments</span>
                    <span class="description">
                        <i class="fas fa-home"></i>
                        <span>Другий етап</span> <span>будівництва</span>
                    </span>
                </span>
            </a>
        </div>
        <div class="col-25">
            <a href="/project2" class="gfv col-25">
                <span class="content">
                    <img src="assets/images/logo-gfv.svg" alt="Grand Family Village">
                    <span class="brand">Grand Family</span>
                    <span class="model">Village</span>
                    <span class="description">
                        <i class="fas fa-wallet"></i>
                        <span>Початок</span> <span>продажу</span>
                    </span>
                </span>
            </a>
        </div>
    </div>
</div>

<script>
// Get the video
var video = document.getElementById("main-video");

// Get the button
var btn = document.getElementById("main-video-control");

// Pause and play the video, and change the button text
function mainVideoControl() {
  if (video.paused) {
    video.play();
  } else {
    video.pause();
  }
}
</script>
<?php include 'page_parts/achievements.php'; ?>
<?php include 'page_parts/buy_rent.php'; ?>

    <div class="row">
        <div class="inrow">
            <div class="h2">Grand Новини</div>
            <?php
            $news = [
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

    <div class="row">
        <div class="inrow">
            <div class="h2"><b>Grand</b> Галерея</div>
            <div class="gallery">
                <div class="owl-carousel owl-theme">
                    <?php
                    $directory = "assets/images/gallery/main";    // Папка с изображениями
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

<?php include 'page_parts/footer.php'; ?>