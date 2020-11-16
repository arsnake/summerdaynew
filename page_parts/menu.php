<?php
    require_once './Classes/Menu.php';
    $menuLinks = [
        ['href' => '/', 'name' => 'Головна'],
        ['href' => '/about', 'name' => 'Про нас'],
        ['href' => '/projects', 'name' => 'Проекти'],
        ['href' => '/projects', 'name' => 'Придбати', 'submenu' => [
            ['href' => '/project', 'name' => 'Grand Family Apartments'],
            ['href' => '/project2', 'name' => 'Grand Family Village']
        ]],
        ['href' => 'https://gfa.in.ua/', 'name' => 'Забронювати', 'target' => '_blank'],
        ['href' => '/news', 'name' => 'Новини'],
        ['href' => '/contacts', 'name' => 'Контакти']
    ];
?>


<!-- TODO: микроразметка -->
<div class="menu">
    <?= Menu::getHtml($menuLinks) ?>
</div>