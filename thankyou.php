<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Best Tour Plan - Hotel Booking</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600;700&family=Nunito:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/swiper-bundle.min.css" >
        <link rel="stylesheet" href="./css/style.css">
        <script src="https://api-maps.yandex.ru/2.1/?apikey=5d618378-4689-4ca7-880b-b683b6cd61d2&lang=ru_RU" type="text/javascript"></script>
        <script type="text/javascript">
    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты.
            // Порядок по умолчанию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: [40.76469330, -73.98120135],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 17,
        });
        
        var myPlacemark = new ymaps.Placemark([40.76469330, -73.98120135], {}, {
    preset: 'islands#redIcon'
});
        // Размещение геообъекта на карте.
    myMap.geoObjects.add(myPlacemark);
    }
</script>
    </head>
    <body>
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-wrapper">
                        <a href="index.html" class="logo" ><img src="./img/horisontal-logo.svg" alt="Logo: Best Tour Plan"></a>
                        <form action="#" class="search-form search-form--mobile_hidden">
                            <input type="text" class="search-form__input" placeholder="Search Location">
                            <button class="search-form__button"><img src="./img/search.svg" alt="Search: image"></button>
                        </form>
                        <a href="#" class="user user--mobile_hidden">
                            <img class="user__image" src="./img/user-photo.jpeg" alt="Avatar: Nathan">
                            <span class="user__name">Nathan</span>
                        </a>
                    <button class="menu-button header-top__menu-button">
                        <span class="menu-button__line"></span>
                        <span class="menu-button__line"></span>
                        <span class="menu-button__line"></span>
                    </button>
                    </div>
                </div>
            </div>
            <div class="navbar">
                <div class="container">
                    <nav class="navbar-menu">
                        <ul class="navbar-menu__list">
                            <li class="navbar-menu__item navbar-menu__item--mobile_visible">
                                <a href="#" class="user user--mobile_visible">
                                    <img class="user__image" src="./img/user-photo.jpeg" alt="Avatar: Nathan">
                                    <span class="user__name user__name--light">Nathan</span>
                                </a>
                            </li>
                            <li class="navbar-menu__item navbar-menu__item--mobile_visible">
                                <form action="#" class="navbar-menu__search-form search-form search-form--mobile_visible">
                                    <input type="text" class="search-form__input" placeholder="Search Location">
                                    <button class="search-form__button"><img src="./img/search.svg" alt="Search: image"></button>
                                </form>
                            </li>
                            <li class="navbar-menu__item"><a class="navbar-menu__link" href="#">All deals</a></li>
                            <li class="navbar-menu__item"><a class="navbar-menu__link" href="#">Hotels</a></li>
                            <li class="navbar-menu__item"><a class="navbar-menu__link" href="#">Activities</a></li>
                            <li class="navbar-menu__item"><a class="navbar-menu__link" href="#">Hotel Day Packages</a></li>
                            <li class="navbar-menu__item"><a class="navbar-menu__link" href="#">Restaurants</a></li>
                            <li class="navbar-menu__item"><a class="navbar-menu__link" href="#">Events</a></li>
                            <li class="navbar-menu__item"><a class="navbar-menu__link" href="#">Rodrigues</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>        
        <nav class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item"><a href="#" class="breadcrumbs__link">Home</a></li>
                    <li class="breadcrumbs__item"><a href="#" class="breadcrumbs__link">Flesh Offers</a></li>
                    <li class="breadcrumbs__item">Grand Hilton Hotel</li>
                </ul>
            </div>
        </nav>

        <section class="thanks">
            <div class="container">
                <h2 class="section-title">Спасибо за обращение!</h2>
                <span class="thanks__text">Наш оператор скоро с Вами свяжется.</span>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="footer__wrapper">
                    <a class="footer__logo footer-logo" href="index.html"><img class="footer-logo__img" src="./img/vertical-logo.svg" alt="image:VerticalLogo"></a>
                    <div class="footer__categories">
                        <h3 class="footer__title">All Categories</h3>
                        <ul class="footer__list">
                            <li class="footer__item"><a class="footer__link" href="#">All Deals</a></li>
                            <li class="footer__item"><a class="footer__link" href="#">Hotels</a></li>
                            <li class="footer__item"><a class="footer__link" href="#">Activities</a></li>
                            <li class="footer__item"><a class="footer__link" href="#">Spa Packages</a></li>
                            <li class="footer__item"><a class="footer__link" href="#">Hotel Day Packages</a></li>
                            <li class="footer__item"><a class="footer__link" href="#">Restaurants</a></li>
                            <li class="footer__item"><a class="footer__link" href="#">Fitness</a></li>
                            <li class="footer__item"><a class="footer__link" href="#">Rodrigues</a></li>
                        </ul>
                    </div>
                    <div class="footer__additional">
                        <h3 class="footer__title">Additional Information</h3>
                        <ul class="footer__list">
                            <li class="footer__item"><a class="footer__link" href="#">About Us</a></li>
                            <li class="footer__item"><a class="footer__link" href="#">Contacts Us</a></li>
                            <li class="footer__item"><a class="footer__link" href="#">How does it work?</a></li>
                            <li class="footer__item"><a class="footer__link" href="#">Frequently Asked Questions</a></li>
                            <li class="footer__item"><a class="footer__link" href="#">Deals.mu loyalty program</a></li>
                            <li class="footer__item"><a class="footer__link" href="#">Promote your Business on BTP</a></li>
                        </ul>
                    </div>
                    <div class="footer__social-network social-network">
                        <h3 class="footer__title">Social Network</h3>
                        <ul class="social-network__list">
                            <li class="social-network__item"><a class="social-network__link" href="#"><img class="social-network__icon" src="./img/facebook.svg" alt="icon:facebook"></a></li>
                            <li class="social-network__item"><a class="social-network__link" href="#"><img class="social-network__icon" src="./img/youtube.svg" alt="icon:youtube"></a></li>
                            <li class="social-network__item"><a class="social-network__link" href="#"><img class="social-network__icon" src="./img/instagram.svg" alt="icon:instagram"></a></li>
                            
                        </ul>
                    </div>
                    <div class="footer__legal-information">
                      <h3 class="footer__title">Legal Information</h3>  
                        <ul class="footer__list">
                            <li class="footer__item"><a class="footer__link" href="#">Terms & Conditions</a></li>
                            <li class="footer__item"><a class="footer__link" href="#">Disclimer</a></li>
                            <li class="footer__item"><a class="footer__link" href="#">Cancellation policy</a></li>
                            <li class="footer__item"><a class="footer__link" href="#">Privacy</a></li>
                        </ul>
                    </div>
                    <div class="footer__contact-details contact-details">
                        <h3 class="footer__title">Contact Details</h3>
                        <span class="contact-details__description">
                            Feel free to contacts us by phone, email or by our contact form
                        </span>
                        <ul class="contact-details__list">
                            <li class="contact-details__item"><img class="contact-details__icon" src="./img/contact-map.svg" alt="icon:contact-map">9748 Blossom Hill Rd undefined Landing, ldaho 68545 United States</li>
                            <li class="contact-details__item"><img class="contact-details__icon" src="./img/contact-phone.svg" alt="icon:contact-phone">
                                Tel (business hours) : 269 1500<br>
                                Tel (hotline) Monday - Saturday: 52-56-61-38 (08:00 am – 20:00 pm)<br>
                                Tel (hotline) Sunday: 52-56-61-38 (08:00 am – 14:00 pm)
                            </li>
                            <li class="contact-details__item"><img class="contact-details__icon" src="./img/contact-email.svg" alt="icon:contact-email">
                                <a class="footer__link" href="mailto:cherly.lawson@example.com">cherly.lawson@example.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__message">
                        <h3 class="footer__title">Send us a message</h3>
                            <form class="footer__form form-message" action="send.php" method="POST">
                                <input class="form-message__input form-message__field" type="text" name="name" value="" placeholder="Your Full Name*">
                                <input class="form-message__input form-message__field" type="text" name="phone" value="" placeholder="Phone Number*">
                                <textarea class="form-message__textarea form-message__field" name="message" placeholder="Message" rows="8" cols="40"></textarea>
                                <div class="form-message__wrapper">
                                    <button class="form-message__button" type="submit">Send</button>
                                    <span class="form-message__requared">* Required Fields</span>
                                </div>
                            </form>
                    </div>
                </div>
                <div class="footer__conditions footer-conditions">
                    <ul class="footer-conditions__list">
                        <li class="footer-conditions__item"><a class="footer-conditions__link" href="#">Disclaimer</a></li>
                        <li class="footer-conditions__item"><a class="footer-conditions__link" href="#">Conditions of use</a></li>
                        <li class="footer-conditions__item"><a class="footer-conditions__link" href="#">Cancellation policy</a></li>
                    </ul>
                    <img class="footer-conditions__pay-systems" src="./img/pay-systems.svg" alt="image:pay systems">
                </div>
            </div>
        </footer>
        
    <script src="./js/swiper-bundle.min.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bgscroll.js"></script> <!--Инициализация в main.js-->
    <script src="./js/main.js"></script>
    
    
    </body>

</html>
