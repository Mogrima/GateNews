<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title>Врата. Версия 6</title>
  <link href="img/favicon.png" rel="apple-touch-icon" sizes="180x180">
  <link href="img/favicon.png" rel="icon" sizes="32x32" type="image/png">
  <link href="img/favicon.png" rel="icon" sizes="16x16" type="image/png">
  <link href="/site.webmanifest" rel="manifest">
  <link color="#5bbad5" href="img/favicon.png" rel="mask-icon">
  <meta content="#da532c" name="msapplication-TileColor">
  <meta content="#ffffff" name="theme-color">
  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body class="page">
  <div class="background-header"></div>
  <header class="page-header">
      <div class="page-header__wrapper container">
        <a class="page-header__logo"><img class="page-header__logo-image" alt="Логотип Врата" width="164" height="54" src="img/Logo.png" width="164"></a>
        <nav class="page-header__user-block">
          <ul class="user-navigation">
            <li class="user-navigation__item">
              <a class="user-navigation__link registration-link" href="registration.html">Оформить читательский билет</a>
            </li>
            <li class="user-navigation__item user-navigation__item--bottom">
              <a class="user-navigation__link login-link" href="login.html">Представиться</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
  <nav class="page-navigation">
      <ul class="page-navigation__list">
        <li class="page-navigation__item">
          <a class="page-navigation__link" href="index.html">Новости</a>
        </li>
        <li class="page-navigation__item">
          <a class="page-navigation__link page-navigation__link--green" href="works-catalog.html">Книги</a>
        </li>
        <li class="page-navigation__item">
          <a class="page-navigation__link page-navigation__link--yellow" href="gallery.html">Галерея</a>
        </li>
        <li class="page-navigation__item">
          <a class="page-navigation__link page-navigation__link--peach" href="about.html">О нас</a>
        </li>
        <li class="page-navigation__item">
          <a class="page-navigation__link page-navigation__link--lilac" href="reviews.html">Отзывы</a>
        </li>
        <li class="page-navigation__item">
          <a class="page-navigation__link page-navigation__link--purple" href="FAQ.html">FAQ</a>
        </li>
      </ul>
  </nav>
  <main class="page-main">
    <div class="container">
      <div class="substrate">
        <!-- Подложка -->
        <h1 class="visually-hidden">Врата</h1>
        <div class="page-main__head">
          <h2 class="title">Добро пожаловать во <span class="page-main__label">Врата</span></h2>
          <p class="page-description page-description--flex">Данный ресурс посвящён разным формам творчества. Здесь вы сможете найти: иллюстрации, арты и книги авторства Р.М. Врата раскрывают множество путей, отведущих ваше воображение по тропам к давно сгинувшим мирам, а может даже к истокам истории. За ними изложены и показаны судьбы. Шаг за врата, уступка любопытству, и я постараюсь рассказать все, что знаю.</p>
          <div class="search-block">
            <input class="search-block__input" placeholder="Поиск..." type="text"> <span class="search-block__icon"></span>
          </div>
        </div>
        <section class="works">
          <h2 class="section-header">Популярные произведения</h2>
          <div class="works__wrapper">
            <figure class="works__item">
              <figcaption class="works__title">
                Привратник и овощи
              </figcaption><img alt="Привратник и овощи" class="works__image" height="347" src="img/works-catalog/01.jpg" width="258">
              <p class="works__description">Таким образом реализация намеченных плановых заданий позволяет оценить значение систем массового участия.</p><a class="button" href="#">Открыть</a>
            </figure>
            <figure class="works__item">
              <figcaption class="works__title">
                Неугосимый огонь
              </figcaption><img alt="Неугосимый огонь" class="works__image" height="347" src="img/works-catalog/02.jpg" width="258">
              <p class="works__description">Таким образом реализация намеченных плановых заданий позволяет оценить значение систем массового участия.</p><a class="button" href="#">Открыть</a>
            </figure>
            <figure class="works__item">
              <figcaption class="works__title">
                Принц и Скрипач
              </figcaption><img alt="Принц и Скрипач" class="works__image" height="347" src="img/works-catalog/03.jpg" width="258">
              <p class="works__description">Таким образом реализация намеченных плановых заданий позволяет оценить значение систем массового участия.</p><a class="button" href="#">Открыть</a>
            </figure>
          </div>
        </section>
        <section class="works">
          <h2 class="section-header">Популярные рисунки</h2>
          <div class="works__wrapper">
           <figure class="works__item">
             <figcaption class="works__title works__title--mt">
               Портреты
             </figcaption><img alt="Портреты" class="works__image" height="347" src="img/arts-catalog/gefest.jpg" width="258">
             <p class="works__description">Лица, а то и переданные полностью образы знакомых и просто припомнившихся персон.</p><a class="button works__button" href="inner-page/portraits.html">Открыть</a>
           </figure>
           <figure class="works__item">
             <figcaption class="works__title works__title--mt">
               Состояния
             </figcaption><img alt="Состояния" class="works__image" height="347" src="img/arts-catalog/clarification.jpg" width="258">
             <p class="works__description">Пускай человечество относится к эмоциям, как ко второстепенным в своей жизни проявлениям, именно они владеют нашей жизнью, прокладывают нам путь в мире.</p><a class="button works__button" href="inner-page/condition.html">Открыть</a>
           </figure>
           <figure class="works__item">
             <figcaption class="works__title works__title--mt">
               Старые работы
             </figcaption><img alt="Старые работы" class="works__image" height="347" src="img/arts-catalog/alive.jpg" width="258">
             <p class="works__description">Следы давно минувших безвозвратно лет – самые старые из работ, на которых явственнее всего видны ошибки и стремления, а порой и изжившие себя взгляды.</p><a class="button works__button" href="inner-page/oldWorks.html">Открыть</a>
           </figure>
          </div>
        </section>
        <section class="news">
          <h2 class="section-header">Новости</h2>
          <ul class="news__list">
            <li class="news__item clearfix">
              <div class="header-title">
                <h3 class="header-title__title"><a class="header-title__link" href="news-1.html">Заголовок новости</a></h3><time class="header-title__date" datetime="2016-01-11">11 января</time>
              </div>
              <img alt="Рисунок новости" class="news__picture" height="123" src="img/news.jpg" width="121">
              <p class="news__text">Повседневная практика показывает, что консультация с широким активом обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития. </p><a class="button" href="news-1.html">Читать далее</a>
            </li>
            <li class="news__item clearfix">
              <div class="header-title">
                <h3 class="header-title__title"><a class="header-title__link" href="news-1.html">Заголовок новости</a></h3><time class="header-title__date" datetime="2016-01-11">11 января</time>
              </div><img alt="Рисунок новости" class="news__picture" height="123" src="img/news.jpg" width="121">
              <p class="news__text">Повседневная практика показывает, что консультация с широким активом обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p><a class="button" href="news-1.html">Читать далее</a>
            </li>
            <li class="news__item clearfix">
              <div class="header-title">
                <h3 class="header-title__title"><a class="header-title__link" href="news-1.html">Заголовок новости</a></h3><time class="header-title__date" datetime="2016-01-11">11 января</time>
              </div><img alt="Рисунок новости" class="news__picture" height="123" src="img/news.jpg" width="121">
              <p class="news__text">Повседневная практика показывает, что консультация с широким активом обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p><a class="button" href="news-1.html">Читать далее</a>
            </li>
          </ul>
          <!-- <ul class="pagination">
            <div class="pagination__wrapper">
              <li class="pagination__item"><a class="pagination__link pagination__link--current">1</a>
              </li>
              <li class="pagination__item"><a class="pagination__link" href="#">2</a>
              </li>
              <li class="pagination__item"><a class="pagination__link" href="#">3</a>
              </li>
              <li class="pagination__item"><a class="pagination__link" href="#">4</a>
              </li>
            </div>
          </ul> -->
        </section>
      </div><!-- Подложка -->
    </div>
  </main>
  <footer class="page-footer">
    <nav class="footer-navigation">
      <ul class="footer-navigation__list">
        <li class="footer-navigation__item">
          <a class="footer-navigation__link footer-navigation__link--current"><img alt="Врата" height="30" src="img/Logo.png" width="100"></a>
        </li>
        <li class="footer-navigation__item">
          <a class="footer-navigation__link" href="works-catalog.html">Книги</a>
        </li>
        <li class="footer-navigation__item">
          <a class="footer-navigation__link" href="gallery.html">Галерея</a>
        </li>
        <li class="footer-navigation__item">
          <a class="footer-navigation__link" href="about.html">О нас</a>
        </li>
        <li class="footer-navigation__item">
          <a class="footer-navigation__link" href="feedback.html">Отзывы</a>
        </li>
        <li class="footer-navigation__item">
          <a class="footer-navigation__link" href="FAQ.html">FAQ</a>
        </li>
      </ul>
    </nav>
    <p class="page-footer__copyright copyright"><b class="copyright__developers">Разработано: Ro&Mo</b><br>
        <span class="copyright__reserved">© Все права защищены. 2018</span></p>
    <div class="footer-social">
          <b class="footer-social__title">Контакты для связи:</b>
          <ul class="footer-social__list">
            <li class="footer-social__item">
              <a href="#"><span class="visually-hidden">Вконтакте</span> <svg aria-hidden="true" class="svg-inline--fa fa-vk fa-w-18" data-icon="vk" data-prefix="fab" height="44" role="img" viewbox="0 0 576 512" width="44" xmlns="http://www.w3.org/2000/svg">
              <path class="footer-social__icon-color" d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z" fill="currentColor"></path></svg></a>
            </li>
            <li class="footer-social__item">
              <a href="#"><span class="visually-hidden">Фейсбук</span> <svg aria-hidden="true" class="svg-inline--fa fa-facebook-f fa-w-9" data-icon="facebook-f" data-prefix="fab" height="35" role="img" viewbox="0 0 264 512" width="40" xmlns="http://www.w3.org/2000/svg">
              <path class="footer-social__icon-color" d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229" fill="currentColor"></path></svg></a>
            </li>
            <li class="footer-social__item">
              <a href="#"><span class="visually-hidden">Твиттер</span> <svg aria-hidden="true" class="svg-inline--fa fa-twitter fa-w-16" data-icon="twitter" data-prefix="fab" height="32" role="img" viewbox="0 0 512 512" width="32" xmlns="http://www.w3.org/2000/svg">
              <path class="footer-social__icon-color" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" fill="currentColor"></path></svg></a>
            </li>
            <li class="social-list__item">
              <a href="#"><span class="visually-hidden">Девианарт</span> <svg aria-hidden="true" class="svg-inline--fa fa-deviantart fa-w-10" data-icon="deviantart" data-prefix="fab" height="35" role="img" viewbox="0 0 320 512" width="35" xmlns="http://www.w3.org/2000/svg">
              <path class="footer-social__icon-color" d="M320 93.2l-98.2 179.1 7.4 9.5H320v127.7H159.1l-13.5 9.2-43.7 84c-.3 0-8.6 8.6-9.2 9.2H0v-93.2l93.2-179.4-7.4-9.2H0V102.5h156l13.5-9.2 43.7-84c.3 0 8.6-8.6 9.2-9.2H320v93.1z" fill="currentColor"></path></svg></a>
            </li>
          </ul>
        </div>
  </footer>
  <section class="login login__log">
      <h2 class="visually-hidden">Здесь можно представиться</h2>
      <p class="section-header login__title">Здравствуйте</p>
      <form action="#" method="post">
        <p class="input__wrapper">
          <label for="user-name" class="visually-hidden">Ваше имя</label>
          <input id="user-name" class="input login__input" type="text" name="user-name" placeholder="Ваше имя...">
        </p>
        <p class="input__wrapper">
          <label for="user-pass" class="visually-hidden">Ваш пароль</label>
          <input id="user-pass" class="input login__input" type="password" name="user-pass" placeholder="Ваш ключ...">
        </p>
        <div class="login__info">
          <input id="login__remember" class="checkbox login__info-checkbox" type="checkbox" name="remember"> <label for="login__remember" class="checkbox__name login__checkbox-name"><span class="checkbox__indicator login__checkbox-indicator"></span>Запомните меня</label>
          <a class="login__restore" href="#">Я забыл(а) пароль!</a> 
        </div>
        <button class="button login__button" type="submit">Представиться</button>
      </form>
       <button class="close login__close-log">Закрыть</button>
  </section>
   <section class="login login__reg">
    <h2 class="visually-hidden">Здесь можно зарегистрироваться</h2>
    <p class="section-header login__title">Добро пожаловать</p>
    <form action="#" method="post">
      <p class="input__wrapper">
        <label for="user-name" class="visually-hidden">Ваше имя...</label>
        <input id="user-name" class="input login__input" type="text" name="user-name" placeholder="Ваше имя...">
      </p>
      <p class="input__wrapper">
        <label for="user-email" class="visually-hidden">Ваш почтовый ящик...</label>
        <input id="user-email" class="input login__input" type="email" name="user-email" placeholder="Ваш почтовый ящик...">
      </p>
      <p class="input__wrapper">
        <label for="user-pass" class="visually-hidden">Придумайте пароль</label>
        <input id="user-pass" class="input login__input" type="password" name="user-pass" placeholder="Придумайте пароль">
      </p>
      <div class="login__info login__info--start">
        <input id="remember" class="checkbox login__info-checkbox" type="checkbox" name="remember" checked="checked"> <label for="remember" class="checkbox__name login__checkbox-name"><span class="checkbox__indicator login__checkbox-indicator"></span>Запомните меня</label>
      </div>
      <button class="button login__button" type="submit">Зарегистрироваться</button>
    </form>
    <button class="close login__close-reg">Закрыть</button>
  </section>
  <div class="overlay"></div>
  <script src="js/modal.js"></script>
</body>
</html>