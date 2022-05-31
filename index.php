<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ВОИ Главная страница</title>
    <link rel="shortcut icon" href="accets/images/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="accets/reset.css">
    <link rel="stylesheet" href="accets/dist/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500;700&family=Ruda:wght@700&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Шапка сайта -->
    
        <?php require "accets/blocks/header.php" ?>

    <!-- /Шапка сайт -->



    <!-- блок с новостями -->

    <div class="news container">

        <h2><img src="accets/images/Наши новости значок.svg" alt=""><span>Наши </span> новости</h2>

        <div class="blocks_news flex">
            <article class="block_news">
                <img src="accets/images/КАРТИНКА ПЕРВОЙ НОВОСТИ.jpg" alt="Новость 1"><br>
                <time datetime="2021-01-01">1 января 2021</time>
                <h3>Все инвалиды получили подарки на Новый Год. Депутаты тоже поздравили инвалидов, и подарили им новые инвалидные коляски</h3>
                <a href="#">Подробнее</a>
            </article>
            <article class="block_news">
                <img src="accets/images/КАРТИНКА ПЕРВОЙ НОВОСТИ.jpg" alt="Новость 2"><br>
                <time datetime="2021-01-01">1 января 2021</time>
                <h3>Все инвалиды получили подарки на Новый Год. Депутаты тоже поздравили инвалидов, и подарили им новые инвалидные коляски</h3>
                <a href="#">Подробнее</a>
            </article>
            <article class="block_news">
                <img src="accets/images/КАРТИНКА ПЕРВОЙ НОВОСТИ.jpg" alt="Новость 3"><br>
                <time datetime="2021-01-01">1 января 2021</time>
                <h3>Все инвалиды получили подарки на Новый Год. Депутаты тоже поздравили инвалидов, и подарили им новые инвалидные коляски</h3>
                <a href="#">Подробнее</a>
            </article>
        </div>
        <div class="btn">
            <a href="#">Читать все новости</a>
        </div>
    </div>

    <!-- конец блока с новостями -->


    <!-- блок о нас -->

    <div class="o_nas">

        <div class="container">
            <h2><span>О</span> нас</h2>
            <div class="blocks_o_nas flex">
                <section class="block_o_nas">
                    <h3>Коротко о нас</h3>
                    <p>Всероссийское общество инвалидов создано 18 июля 1988 года.
                        Сегодня ВОИ – это более <span style="color: #ff4040;">1465</span> человек, 18 первичных ячеек.
                        В 1998 году ВОИ присвоен Специальный консультативный статус при Экономическом и Социальном Совете ООН. 
                        
                    </p>
                    <a href="#">Подробнее</a>
                </section>
                <section class="block_o_nas">
                    <h3>Игры и мероприятия</h3>
                    <p>В нашей организации собраны различные игры <br>Мы имеем немало популярных игр, которые позволят вам хорошо провести время. У нас вы найдете разнообразные развлечения, тренирующие ум и моторику рук.</p>
                    <a href="#">Подробнее</a>
                </section>
                <section class="block_o_nas">
                    <h3 class="lastoviy">С кем мы сотрудничаем</h3>
                    <p>Как государственная организация мы сотрудничаем со множеством других организаций которые организую дополнительные мероприятия и поездки в различные места для проведения времени вне стен общества или вашего дома</p>
                    <a href="#">Подробнее</a>
                </section>
            </div>
        </div>
    </div>
    <!-- КОНЕЦ БЛОК О НАС -->

   
        <div class="achivment container">
            <h2><span>Наши</span> достижения</h2>
            <div class="achiv_blocks">
                <div class="achiv_block flex">
                    <img src="" alt="1">
                    <div class="block_text_achiv">
                        <h3>Достижение №1</h3>
                        <p>Повседневная практика показывает, что социально-экономическое развитие представляет собой интересный ных форм деятельности играет. Не следует, однако, забывать о том, что дальнейшее развитие</p>
                    </div>
                </div>
                <div class="achiv_block flex">
                    <img src="" alt="2">
                    <div class="block_text_achiv">
                        <h3>Достижение №1</h3>
                        <p>Повседневная практика показывает, что социально-экономическое развитие представляет собой интересный ных форм деятельности играет. Не следует, однако, забывать о том, что дальнейшее развитие</p>
                    </div>
                </div>
                <div class="achiv_block flex">
                    <img src="" alt="3">
                    <div class="block_text_achiv">
                        <h3>Достижение №1</h3>
                        <p>Повседневная практика показывает, что социально-экономическое развитие представляет собой интересный ных форм деятельности играет. Не следует, однако, забывать о том, что дальнейшее развитие</p>
                    </div>
                </div>
                <div class="achiv_block flex">
                    <img src="" alt="4">
                    <div class="block_text_achiv">
                        <h3>Достижение №1</h3>
                        <p>Повседневная практика показывает, что социально-экономическое развитие представляет собой интересный ных форм деятельности играет. Не следует, однако, забывать о том, что дальнейшее развитие</p>
                    </div>
                </div>
            </div>
        </div>
  
    <!-- конец блкоа достижения -->

     

    <!-- блок наши спонсоры -->

    <div class="spons">
        <div class="container">

        
            <h2><img src="accets/images/heart.svg" alt=""> Спонсоры</h2>
            <div class="spons_img">
                <div class="img_block">
                    <img src="accets/images/Первый спонсор.png" alt="1">
                    <p>БОЕВОЕ <br> БРАТСТВО</p>
                </div>
                <div class="img_block">
                    <img src="accets/images/image 12.png" alt="2">
                    <p>ГК Эковоз</p>
                </div>
                <div class="img_block">
                    <img src="accets/images/image 13.png" alt="3">
                    <p>"Мега-Лада"</p>
                </div>
            </div>
            <h3>С кем мы <span style="color: #FF4040;">сотрудничаем</span></h3>
            <div class="block">
                <ul class="spons_list">
                    <li class="spon_element"><span>Городской музейный комплекс "Наследие"</span></li>
                    <li class="spon_element"><span>Библиотеки тольятти</span></li>
                    <li class="spon_element"><span>Дворец культуры, искусства и творчества</span></li>
                </ul>
            </div>

        </div>
    </div>

    <!-- конец блока спонсоры -->

    <!-- футор -->

    <?php require "accets/blocks/footer.php" ?>

    <!-- конец подвала -->

    <script src="accets/scripts/header.js"></script>
</body>

</html>