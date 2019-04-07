<?php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <base href="/rush00/">
    <meta charset="UTF-8">
    <title>School-42-Магазин</title>
    <link rel="stylesheet" href="templates/styles/style.css">
    <link href="/rush00/templates/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
</head>
<body>
<div id="container">
    <div class="header-logo">
        <a class="headerLogo" itemprop="url" href="index.php"></a>
    </div>
    <nav class="main-navigation open fullScreen" role="navigation">
        <ul id="menu-top_menu" class="open nav top-nav cf  menu ">
            <li class="liNav">
                <a href="index.php">
                    <img src="templates/images/menu.png" class="sidebar_icon"><br>
                    Каталог товарів
                </a>
                <ul class="submenuLeft open">
                    <li id="submenuLiLeft">
                        <a href="" id="submenuALeft">
                            <img src="" id="" alt="" style="height:38px; float:right">1
                        </a>
                    </li>
                    <li id="submenuLiLeft">
                        <a href="" id="submenuALeft">
                            <img src="" id="" alt="" style="height:38px; float:right">2
                        </a>
                    </li>
                    <li id="submenuLiLeft">
                        <a  href="" id="submenuALeft">
                            <img src="" id="" alt="" style="height:38px; float:right">3
                        </a>
                    </li>
                </ul>
            </li>
            <li class="liNav">
                <a  href="contacts.php">
                    <img src="templates/images/contact.png" class="sidebar_icon"><br>
                    Контакти
                </a>
            </li>
            <li class="liNav">
                <a  href="shipping.php">
                    <img src="templates/images/shipping.png" class="sidebar_icon"><br>
                    Доставка
                </a>
            </li>
            <li class="liNav">
                <a  href="pay.php">
                    <img src="templates/images/payment.png" class="sidebar_icon"><br>
                    Оплата
                </a>
            </li>
        </ul>
    </nav>
    <div>
        <div class="page-header">
            <div class="page-header-right">
                <div id="headerContactright">
                    <div style="margin:auto;display:flex;padding:10px">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             width="30" height="30"
                             viewBox="0 0 224 224"
                             style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,224v-224h224v224z" fill="none"></path><g fill-opacity="0.8" fill="#444f57"><g id="surface1"><path d="M53.0425,13.3875c-3.4475,-0.28 -7.28,0.7175 -10.815,3.2025c-3.115,2.17 -9.835,7.5075 -16.1175,13.545c-3.1325,3.01 -6.125,6.1425 -8.435,9.2225c-2.3275,3.08 -4.3575,5.8975 -4.235,9.9925c0.1225,3.675 0.49,14.5425 8.3125,31.2025c7.8225,16.6425 22.995,39.48 52.5875,69.09c29.61,29.61 52.4475,44.7825 69.09,52.605c16.6425,7.8225 27.5275,8.19 31.2025,8.3125c4.0775,0.1225 6.895,-1.9075 9.975,-4.235c3.08,-2.3275 6.2125,-5.3025 9.2225,-8.435c6.02,-6.2825 11.3575,-13.0025 13.5275,-16.1175c4.9525,-7.0525 4.13,-15.3825 -1.3825,-19.25c-3.465,-2.4325 -35.3325,-23.6425 -40.1275,-26.5825c-4.865,-2.975 -10.465,-1.6275 -15.47,1.015c-3.9375,2.0825 -14.595,8.19 -17.64,9.94c-2.2925,-1.4525 -10.99,-7.245 -29.6975,-25.9525c-18.725,-18.7075 -24.5,-27.405 -25.9525,-29.6975c1.75,-3.045 7.84,-13.65 9.94,-17.6575c2.625,-4.9875 4.095,-10.64 0.9625,-15.54c-1.3125,-2.0825 -7.28,-11.165 -13.3,-20.2825c-6.0375,-9.1175 -11.76,-17.7625 -13.2475,-19.8275v-0.0175c-1.9425,-2.6775 -4.97,-4.2525 -8.4,-4.5325zM52.22,22.54c1.225,0.1575 1.96,0.6475 1.96,0.6475c0.7175,0.9975 7,10.4125 13.02,19.5125c6.02,9.1175 12.1625,18.4625 13.23,20.16c0.175,0.2625 0.42,3.2375 -1.33,6.545v0.0175c-1.9775,3.7625 -11.2,19.88 -11.2,19.88l-1.2775,2.2575l1.3125,2.24c0,0 6.8775,11.6025 28.7525,33.4775c21.8925,21.875 33.495,28.77 33.495,28.77l2.24,1.3125l2.2575,-1.2775c0,0 16.0825,-9.205 19.88,-11.2c3.3075,-1.7325 6.2825,-1.505 6.6325,-1.295c3.0975,1.9075 37.52,24.78 39.6375,26.2675c0.07,0.0525 1.9425,2.8875 -0.7875,6.7725h-0.0175c-1.645,2.3625 -7.035,9.205 -12.6525,15.05c-2.8175,2.9225 -5.705,5.6525 -8.155,7.49c-2.45,1.8375 -4.6375,2.415 -4.2875,2.4325c-3.815,-0.1225 -12.2325,-0.21 -27.685,-7.4725c-15.4525,-7.245 -37.5025,-21.7525 -66.57,-50.8375c-29.05,-29.05 -43.5575,-51.1 -50.82,-66.57c-7.245,-15.4525 -7.3325,-23.87 -7.455,-27.6675c0.0175,0.35 0.595,-1.855 2.4325,-4.305c1.8375,-2.45 4.55,-5.355 7.4725,-8.1725c5.8625,-5.6175 12.6875,-11.0075 15.05,-12.6525v0.0175c1.9425,-1.365 3.64,-1.54 4.865,-1.4z"></path></g></g></g>
                        </svg>
                        <a href="tel:+380683030860" style="cursor:pointer; display:inline; color:rgba(68, 79, 87, 0.8); font-size:20px">
                            <span style="display:inline">(000) 123 11 11 </span>
                        </a>
                        <div style="margin:auto" id="contacts-show">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 width="20" height="20"
                                 viewBox="0 0 224 224"
                                 style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,224v-224h224v224z" fill="none"></path><g fill-opacity="0.8" fill="#444f57"><g id="surface1"><path d="M201.53,58.1c-2.38,0.07 -4.62,1.05 -6.265,2.765l-83.265,83.265l-83.265,-83.265c-1.6975,-1.7325 -4.0075,-2.7125 -6.44,-2.7125c-3.64,0 -6.9125,2.2225 -8.2775,5.6c-1.3825,3.3775 -0.56,7.245 2.0475,9.7825l89.6,89.6c3.5,3.5 9.17,3.5 12.67,0l89.6,-89.6c2.66,-2.555 3.5,-6.4925 2.065,-9.905c-1.4175,-3.4125 -4.7775,-5.6 -8.47,-5.53z"></path></g></g></g></svg>
                        </div>
                    </div>
                    <div id="headerContactright-hide">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             width="30" height="30"
                             viewBox="0 0 224 224"
                             style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,224v-224h224v224z" fill="none"></path><g fill-opacity="0.8" fill="#444f57"><g id="surface1"><path d="M53.0425,13.3875c-3.4475,-0.28 -7.28,0.7175 -10.815,3.2025c-3.115,2.17 -9.835,7.5075 -16.1175,13.545c-3.1325,3.01 -6.125,6.1425 -8.435,9.2225c-2.3275,3.08 -4.3575,5.8975 -4.235,9.9925c0.1225,3.675 0.49,14.5425 8.3125,31.2025c7.8225,16.6425 22.995,39.48 52.5875,69.09c29.61,29.61 52.4475,44.7825 69.09,52.605c16.6425,7.8225 27.5275,8.19 31.2025,8.3125c4.0775,0.1225 6.895,-1.9075 9.975,-4.235c3.08,-2.3275 6.2125,-5.3025 9.2225,-8.435c6.02,-6.2825 11.3575,-13.0025 13.5275,-16.1175c4.9525,-7.0525 4.13,-15.3825 -1.3825,-19.25c-3.465,-2.4325 -35.3325,-23.6425 -40.1275,-26.5825c-4.865,-2.975 -10.465,-1.6275 -15.47,1.015c-3.9375,2.0825 -14.595,8.19 -17.64,9.94c-2.2925,-1.4525 -10.99,-7.245 -29.6975,-25.9525c-18.725,-18.7075 -24.5,-27.405 -25.9525,-29.6975c1.75,-3.045 7.84,-13.65 9.94,-17.6575c2.625,-4.9875 4.095,-10.64 0.9625,-15.54c-1.3125,-2.0825 -7.28,-11.165 -13.3,-20.2825c-6.0375,-9.1175 -11.76,-17.7625 -13.2475,-19.8275v-0.0175c-1.9425,-2.6775 -4.97,-4.2525 -8.4,-4.5325zM52.22,22.54c1.225,0.1575 1.96,0.6475 1.96,0.6475c0.7175,0.9975 7,10.4125 13.02,19.5125c6.02,9.1175 12.1625,18.4625 13.23,20.16c0.175,0.2625 0.42,3.2375 -1.33,6.545v0.0175c-1.9775,3.7625 -11.2,19.88 -11.2,19.88l-1.2775,2.2575l1.3125,2.24c0,0 6.8775,11.6025 28.7525,33.4775c21.8925,21.875 33.495,28.77 33.495,28.77l2.24,1.3125l2.2575,-1.2775c0,0 16.0825,-9.205 19.88,-11.2c3.3075,-1.7325 6.2825,-1.505 6.6325,-1.295c3.0975,1.9075 37.52,24.78 39.6375,26.2675c0.07,0.0525 1.9425,2.8875 -0.7875,6.7725h-0.0175c-1.645,2.3625 -7.035,9.205 -12.6525,15.05c-2.8175,2.9225 -5.705,5.6525 -8.155,7.49c-2.45,1.8375 -4.6375,2.415 -4.2875,2.4325c-3.815,-0.1225 -12.2325,-0.21 -27.685,-7.4725c-15.4525,-7.245 -37.5025,-21.7525 -66.57,-50.8375c-29.05,-29.05 -43.5575,-51.1 -50.82,-66.57c-7.245,-15.4525 -7.3325,-23.87 -7.455,-27.6675c0.0175,0.35 0.595,-1.855 2.4325,-4.305c1.8375,-2.45 4.55,-5.355 7.4725,-8.1725c5.8625,-5.6175 12.6875,-11.0075 15.05,-12.6525v0.0175c1.9425,-1.365 3.64,-1.54 4.865,-1.4z"></path></g></g></g>
                        </svg>
                        <a href="tel:+380011011111" style="cursor:pointer; display:inline; color:rgba(68, 79, 87, 0.8)">
                            <span style="display:inline">(001) 101 11 11 </span>
                        </a><br>
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             width="30" height="30"
                             viewBox="0 0 224 224"
                             style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,224v-224h224v224z" fill="none"></path><g fill-opacity="0.8" fill="#444f57"><g id="surface1"><path d="M53.0425,13.3875c-3.4475,-0.28 -7.28,0.7175 -10.815,3.2025c-3.115,2.17 -9.835,7.5075 -16.1175,13.545c-3.1325,3.01 -6.125,6.1425 -8.435,9.2225c-2.3275,3.08 -4.3575,5.8975 -4.235,9.9925c0.1225,3.675 0.49,14.5425 8.3125,31.2025c7.8225,16.6425 22.995,39.48 52.5875,69.09c29.61,29.61 52.4475,44.7825 69.09,52.605c16.6425,7.8225 27.5275,8.19 31.2025,8.3125c4.0775,0.1225 6.895,-1.9075 9.975,-4.235c3.08,-2.3275 6.2125,-5.3025 9.2225,-8.435c6.02,-6.2825 11.3575,-13.0025 13.5275,-16.1175c4.9525,-7.0525 4.13,-15.3825 -1.3825,-19.25c-3.465,-2.4325 -35.3325,-23.6425 -40.1275,-26.5825c-4.865,-2.975 -10.465,-1.6275 -15.47,1.015c-3.9375,2.0825 -14.595,8.19 -17.64,9.94c-2.2925,-1.4525 -10.99,-7.245 -29.6975,-25.9525c-18.725,-18.7075 -24.5,-27.405 -25.9525,-29.6975c1.75,-3.045 7.84,-13.65 9.94,-17.6575c2.625,-4.9875 4.095,-10.64 0.9625,-15.54c-1.3125,-2.0825 -7.28,-11.165 -13.3,-20.2825c-6.0375,-9.1175 -11.76,-17.7625 -13.2475,-19.8275v-0.0175c-1.9425,-2.6775 -4.97,-4.2525 -8.4,-4.5325zM52.22,22.54c1.225,0.1575 1.96,0.6475 1.96,0.6475c0.7175,0.9975 7,10.4125 13.02,19.5125c6.02,9.1175 12.1625,18.4625 13.23,20.16c0.175,0.2625 0.42,3.2375 -1.33,6.545v0.0175c-1.9775,3.7625 -11.2,19.88 -11.2,19.88l-1.2775,2.2575l1.3125,2.24c0,0 6.8775,11.6025 28.7525,33.4775c21.8925,21.875 33.495,28.77 33.495,28.77l2.24,1.3125l2.2575,-1.2775c0,0 16.0825,-9.205 19.88,-11.2c3.3075,-1.7325 6.2825,-1.505 6.6325,-1.295c3.0975,1.9075 37.52,24.78 39.6375,26.2675c0.07,0.0525 1.9425,2.8875 -0.7875,6.7725h-0.0175c-1.645,2.3625 -7.035,9.205 -12.6525,15.05c-2.8175,2.9225 -5.705,5.6525 -8.155,7.49c-2.45,1.8375 -4.6375,2.415 -4.2875,2.4325c-3.815,-0.1225 -12.2325,-0.21 -27.685,-7.4725c-15.4525,-7.245 -37.5025,-21.7525 -66.57,-50.8375c-29.05,-29.05 -43.5575,-51.1 -50.82,-66.57c-7.245,-15.4525 -7.3325,-23.87 -7.455,-27.6675c0.0175,0.35 0.595,-1.855 2.4325,-4.305c1.8375,-2.45 4.55,-5.355 7.4725,-8.1725c5.8625,-5.6175 12.6875,-11.0075 15.05,-12.6525v0.0175c1.9425,-1.365 3.64,-1.54 4.865,-1.4z"></path></g></g></g>
                        </svg>
                        <a href="tel:+380442233365" style="cursor:pointer; display:inline; color:rgba(68, 79, 87, 0.8)">
                            <span style="display:inline">(002) 222 22 12</span>
                        </a>

                    </div>
                </div>
                <ul class="page-header-nav menu">
                    <li>
                        <a href="basket.php">
                            <img src="templates/images/shopping-bag.png" id="menu_icon">
                        </a>
                        <span id="skolko" class="hub-i-count"></span>
                    </li>
                    <li>
                        <a onclick="showauthmenu()">
                            <img src="templates/images/icons8-person-50.png" id="auth">
                        </a>
                    </li>
                    <li id="mobileScreen">
                        <a id="drop-menu"  value="open">
                            <img src="templates/images/menu.png" id="menu_icon" >
                        </a>
                    </li>
                </ul>
                <div id ="auth_div">
                    <div>
                        <a onclick="close_auth_div()">
                            <img src="templates/images/close_window.png" alt="" class="" id="close_window">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <ul id="mobileScreenMenu">
            <li>
                <a href="index.php">
                    Головна
                </a>
            </li>
            <li>
                <a href="index.php">
                    Каталог
                </a>
            </li>
            <li>
                <a href="contacts.php">
                    Контакти
                </a>
            </li>
            <li>
                <a href="shipping.php">
                    Доставка
                </a>
            </li>
            <li>
                <a href="pay.php">
                    Оплата
                </a>
            </li>
        </ul>
    </div>
    <div id="mainContainer">
        <h1>Доставка</h1><br>
        <div id="mainText">
            <blockquote>
                &#128073;
                Зробити замовлення Ви можете цілодобово. Опрацьовується  воно протягом доби (не враховуючи вихідні та святкові дні), після чого менеджер обов'язково зв'яжеться з Вами для уточнення наявності замовленого товару, адреси складу транспортної компанії і термінів доставки.
                </blockquote>
            <blockquote>
                &#128073;Відправлення здійснюється з понеділка по п'ятницю з 9.00 до 16.00.
                </blockquote>
            <blockquote>
            Зверніть увагу:
                </blockquote>
            <blockquote>
                &#128073;-Безкоштовна доставка діє при замовленні на суму 500 грн і більше. В іншому випадку вартість доставки оплачує Покупець.<br>
                &#128073;-Товар на відділенні транспортної компанії зберігається протягом 5 днів, після чого автоматично повертається відправнику.<br>
                Необхідно обов'язково оглянути товар перед отриманням, в іншому випадку жодні претензії щодо зовнішнього вигляду розглядатись не будуть.
                </blockquote>
            <h3>Способи доставки:</h3>
            <blockquote>
                Доставка товарів по Україні здійснюється:
            </blockquote>
            <blockquote>
            &#128073;-На відділення транспортної компанії Нова Пошта, яке не має обмежень по вазі.<br>
            &#128073;-Власним автотранспортом у м. Київ (на умовах передоплати). Гарантуємо доставку протягом 24 годин з моменту підтвердження замовлення.
            </blockquote>
            <blockquote>
                Ми, зі свого боку, зробимо все для максимально оперативного та зручного виконання замовлення!
            </blockquote>
        </div>
    </div>
    <div>
        <footer class="footer" role="contentinfo">
            <div>
                <div id="inner-footer-second-left">
                    <div itemscope itemtype="http://schema.org/Organization" style="font-weight:bold">
                        <a href="tel:+38002222221" style="color:white; cursor:pointer">
                            <span itemprop="telephone">+38 (000) 123 11 11</span>
                        </a>
                        <a href="tel:+38002222221" style="color:white; cursor:pointer">
                            <span itemprop="telephone">+38 (001) 101 11 11</span>
                        </a>
                        <a href="tel:+380022222212" style="color:white; cursor:pointer">
                            <span itemprop="telephone">+38 (002) 222 22 12</span>
                        </a>
                        <strong>e-mail:</strong>&nbsp;
                        <a href="mailto:dashacherednichenko@gmail.com" style="color:white"><span itemprop="email" style="display:inline">info@shop.ua</span></a>
                    </div>
                    <br>
                    <div id="social">
                        Ми в соцмережах:<br>
                        <a href="" rel="nofollow" target='_blank'>
                            <img src="templates/images/facebook-white.png" alt="facebook" style="width:30px">
                        </a>
                        <a href="" rel="nofollow" target='_blank'>
                            <img src="templates/images/instagram-white.png" alt="instagram" style="width:30px">
                        </a>
                        <a title="Telegram" href="" rel="nofollow">
                            <img src="templates/images/telegram-white.png" alt="Telegram" style="width:30px">
                        </a>
                        <a title="YouTube" href="" rel="nofollow" target='_blank'>
                            <img src="templates/images/yt.png" alt="YouTube" style="width:30px">
                        </a>
                    </div>
                    <br>
                    <div id="visa">
                        Ми приймаємо<img src="templates/images/visa-master-card.png" alt="logo_viza_mastercard" class="icons_visa"><br>
                        Доступна <strong>«Оплата частинами»</strong> <img src="templates/images/logos_privat_oplch.png" alt="logo_privatbank_oplatachast" class="icons_credit_footer">
                    </div>
                    <span id="footer1">Всі права захищені &copy; 2019</span>
                </div>
                <div id="inner-footer-second-right">
                    <div>
                        <span>ТОВ «Супер-Шоп» <br></span>
                        <span>тел.: (044) 222 22 22</span>
                        <div>
                            Адреса: <br>
                            <span>м. Київ,</span>
                            <span>вул. Дорогожицька 3</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="inner-footer-last" style="">
                <div style="display:inline;">
                    <a href="pay.php" style="">ОПЛАТА</a>
                </div>
                <div style="display:inline;">
                    <a href="shipping.php" style="">ДОСТАВКА</a>
                </div>
                <div style="display:inline; border-right:none">
                    <a href="contacts.php" style="">КОНТАКТИ</a>
                </div>
            </div>
            <button id="top">&#8593;</button>
        </footer>
    </div>
</div>
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>

