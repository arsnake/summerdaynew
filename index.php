<?php include 'page_parts/header.php'; ?>

<div class="row">
    <div class="inrow">
        <div class="video" style="position:relative;width:100%;">
            <video autoplay muted loop playsinline id="myVideo">
                <source src="/assets/videos/videobg10secClear.mp4" type="video/mp4">
                <!--<source src="/assets/videos/videobg30sec.mp4" type="video/mp4">-->
            </video>

		<!--<video preload="auto" muted class="video-js vjs-fluid" style="position:absolute;right: 0;bottom: 0;min-width: 100%;min-height: 100%;" id="main-video" playsinline autoplay loop data-setup="{}">
		    <source src="/assets/videos/gf_bg2.mp4" type="video/mp4"/>
		    <source src="/assets/videos/gf_bg2.webm" type="video/webm"/>
              <p class="vjs-no-js">
                 To view this video please enable JavaScript, and consider upgrading to a web browser that
                 <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
              </p>
		</video>-->
            <div class="glass">
                <div class="content">
                    <div class="title">Апартаменти біля моря</div>
                    <div class="controls">
                        <!-- TODO: при клике на кнопку - открывать видео во весь екран -->
							<!--<span id="main-video-control" class="play fa fa-play c-play"></span>-->
                        <a class="video-play-button" href="https://www.youtube.com/watch?v=oj45W4szziA" rel="nofollow" target="_blank">
                            <span id="myBtn" onclick="myFunction()" class="play fa fa-play"></span>
                            <div class="text">Переглянути відео</div>
                        </a>


                    </div>
                </div>
                <!--<img class="isatex-logo" src="assets/images/logo-isatex-light.svg" alt="Isatex Invest Group">-->
            </div>

            
            <script>
                // Get the video
                var video = document.getElementById("myVideo");

                // Get the button
                var btn = document.getElementById("myBtn");

                // Pause and play the video, and change the button text
                function myFunction() {
                    // if (video.paused) {
                    //     video.play();
                    //     if (btn.classList.contains("fa-play")) {
                    //         btn.classList.remove("fa-play");
                    //     }
                    //     btn.classList.add("fa-pause");
                    // } else {
                    //     video.pause();
                    //     if (btn.classList.contains("fa-play")) {
                    //         btn.classList.remove("fa-pause");
                    //     }
                    //     btn.classList.add("fa-play");
                    // }
                }
            </script>
        </div>
    </div>
</div>

<div class="row online-translation">
    <button type="button" href="https://rtsp.me/embed/dTkDRH3a/" data-fancybox="" data-type="iframe">
        <i class="fa fa-play"></i>
        Дивитися трансляцію
    </button>
</div>

<div class="row brands-links">
    <div class="inrow">
        <a href="/about" class="isatex-link col-50">
            <div class="glass">
                <span class="content">
                    <img class="isatex-logo" src="assets/images/logo-isatex-light.svg" alt="Isatex Invest Group">
                    <div class="title">Про нас</br>Isatex INVEST Group</div>
                </span>
            </div>
        </a>
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


<?php include 'page_parts/achievements.php'; ?>
<?php include 'page_parts/buy_rent.php'; ?>
<?php //include 'page_parts/last_news.php'; ?>

    <div class="row">
        <div class="inrow">
            <div class="h2"><b>Grand</b> Галерея</div>
            <div class="gallery">
                <div class="owl-carousel owl-theme">
                    <?= Gallery::getSlidesHtml("assets/images/gallery/main", "galleryUniqueId1") ?>
                </div>
            </div>
        </div>
    </div>

    <!--<div class="c-video-modal" data-video-id="oj45W4szziA">
        <div class="c-video-modal__close"></div>
        <div id="player-container"></div>
    </div>-->

<!--<script src="assets/scripts/youtube.js"></script>-->
<?php include 'page_parts/footer.php'; ?>
