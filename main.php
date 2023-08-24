<?php
require_once 'php/config.php';
$db = Database::getDBO();
$id = $_GET['id'];
if ($id) $content = $db->getRowById('art_titan',$id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ART-Titan</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/media.css">
    <link rel="stylesheet" href="./css/btn.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="./css/slick.css" />

</head>

<body>

    <header class="header head-main">
        <div class="container">
            <!-- Header nav -->
            <div class="header-nav header-main">
                <img src="./img/logo/logo.svg" alt="" class="logo-s">
                <a href="#!" class="logo">ART-Titan</a>

                <nav id="nav" class="nav">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="index.php" class="nav-link active">О нас</a></li>
                        <li class="nav-item"><a href="index.php#price" class="nav-link">Цены</a></li>
                        <li class="nav-item second"><a href="index.php#price" class="nav-link">Услуги</a>
                            <ul class="nav-list-second">
                                <li><a href="main.php?id=3">Антивандальные конструкции</a></li>
                                <li><a href="main.php?id=1">Мангальные зоны</a></li>
                                <li><a href="main.php?id=6">Мебель ЛОФТ</a></li>
                                <li><a href="main.php?id=5">Входная группа</a></li>
                                <li><a href="main.php?id=8">Забор и ворота из профнастила</a></li>
                                <li><a href="main.php?id=9">Гаражные стеллажи</a></li>
                                <li><a href="main.php?id=4">Навесы</a></li>
                                <li><a href="main.php?id=10">Терассы</a></li>
                                <li><a href="main.php?id=11">Гаражные ворота</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="index.php#gallery" class="nav-link">Наши работы</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link">Контакты</a></li>
                    </ul>
                    <button id="nav-btn" class="nav-button">
                        <img id="nav-btn-img" src="./img/icons/nav-open.svg" alt="Nav button">
                    </button>
                </nav>
            </div>

            <!-- Header content -->

        </div>
    </header>


<?php if($content) {?>
    <section class="about-us" data-aos="fade-down" id="about">
        <div class="container">
            <div class="about-us-cont">
                <div class="about-title">
                    <h2 class="title-1"><?=$content['title']?></h2>
                </div>

                <div class="about-main">
                    <article class="about-text">
                        <?=$content['text']?>

                    </article>
                </div>
                <div class="about-img">
                    <img src="<?=$content['photo']?>" alt="Фото работ" class="about-img">
                </div>
            </div>
        </div>
    </section>
    <?php } else {header("Location: index.php");
          exit();       
    }?>


    <footer class="contacts" id="contact">
        <div class="container">
            <div class="contacts-title">
                <h2 class="title-1">Контакты</h2>
            </div>
            <div class="contact-main">
                <div class="contacts-content" data-aos="fade-down">
                    <div class="contact-item">
                        <img src="img/adress/adres.png" alt="">
                        <p> г. Екатеринбург ул.Счастливая д.3</p>
                    </div>
                    <div class="contact-item">
                        <img src="img/adress/phone.png" alt="">
                        <p> +7 (900) 20-06-343</p>
                    </div>
                    <div class="contact-item">
                        <img src="img/adress/mail.png" alt="">
                        <p> svarkaart96@yandex.ru</p>
                    </div>
                    <div class="contact-item">
                        <img src="img/adress/time.png" alt="">
                        <p> с 9-00 до 21-00</p>
                    </div>

                    <div class="widget-callback">
                        <div class="contacts-button">
                            <a href="#" class="btn">Заказать Звонок</a>
                        </div>
                        <div class="callback-form">

                            <form id="calbback-widget-form">

                                <span class="callback-form-title">Оставьте телефон и мы перезвоним</span>
                                <input type="text" placeholder="Ваше имя" required>
                                <input type="tel" name="wgphone" placeholder="+7 (999) 999 99 99" required>
                                <textarea type="textarea" name="wgpage" class="textarea"
                                    placeholder="Введите ваш вопрос или комментарий"></textarea>

                                <input type="hidden" name="wgdata" value="Обратный звонок">
                                <div class="close-btn" onclick="location.reload()">&times;</div>
                                <!--<input type="hidden" name="wgpage" value="<?php echo "
                                https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"> -->

                                <input type="submit">

                            </form>

                        </div>
                    </div>

                </div>
            </div>

            <div class="contacts-footer">
                <p>Сайт производства студии Zifir@IT <br>+7 (922) 61-77-899</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="./js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <script src="./js/main.js"></script>
</body>


</html>