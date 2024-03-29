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
            <div class="h2"><strong>Галерея</strong></div>
            <div class="gallery">
                <div class="owl-carousel owl-theme">
                    <?= Gallery::getSlidesHtml("assets/images/gallery/projects", "galleryUniqueId") ?>
                </div>
            </div>
        </div>
    </div>
<?php include 'page_parts/footer.php'; ?>