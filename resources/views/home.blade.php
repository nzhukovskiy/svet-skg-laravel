@extends("layouts.layout")
<header class="header">
    <nav class="nav">
        <div class="wrap">
            <div class="logo"><span>SVE</span>T-SKG</div>
            <div class="toggle">
                <div class="toggle_nav">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="links">
                <div class="links_wrap">
                    <hr><a class="js-link link tooltip" href="#home">Главная</a>
                    <a class="js-link link" href="#about">О нас</a>
                    <a class="js-link link" href="#products">Продукция</a>
                    <a class="js-link link" href="#work">Работы</a>
                    <a class="js-link link" href="#service">Возможности</a>
                    <a class="js-link link" href="#contact">Связаться</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="header_content slider_show">

        <div class="slider_inner">
            <div class="slider_item">
                <div class="wrap">
                    <div class="slider_item_card">
                        <h1 class="slider_item_title">Производство широкого цикла</h1>
                        <div class="slider_item_text">Большой опыт в производстве светодиодоных светильников и осветительного оборудования промышленного класса.</div>
                        <a class="js-link btn" href="#contact">Свяжитесь с нами</a>
                    </div>
                </div>
            </div>
            <div class="slider_item">
                <div class="wrap">
                    <div class="slider_item_card">
                        <h1 class="slider_item_title">Качественная продукция</h1>
                        <div class="slider_item_text">Превратит даже самую темную ночь в день.</div>
                        <a class="js-link btn" href="#contact">Свяжитесь с нами</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="controls_slider wrap">
            <div class="active slider-dot"></div>
            <div class="slider-dot"></div>
        </div>
    </div>

    <!--<div class="slider_item">
      <div class="wrap">
        <div class="slider_item_card">
          <h1 class="slider_item_title">Производство широкого цикла</h1>
          <div class="slider_item_text">Большой опыт в производстве светодиодоных светильников и осветительного оборудования промышленного класса.</div>
            <a class="js-link btn" href="#contact">Свяжитесь с нами</a>
          </div>
      </div>
  </div>-->
    </div>
</header>
<section class="showcase">
    <div class="wrap">
        <div class="showcase_cols inverse-wrap">
            <div class="showcase_col">
                <div class="showcase_content">
                    <div class="showcase_title title">Довольные клиенты.</div>
                    <div class="showcase_text">Благодаря накопленному нашими специалистами опыту, мы делаем наших клиентов счастливыми, изготавливая качественные светодиодные светильники.</div>
                </div>
                <div class="showcase_img " data-delay="0s" ><img src="{{ Vite::asset('resources/images/500x500/01.jpg') }}"></div>
            </div>
            <div class="showcase_col">
                <div class="showcase_content">
                    <div class="showcase_title title">Выполненные проекты.</div>
                    <div class="showcase_text">Замечательное техническое оснащение и продвинутая материальная база позволяют нам выполять самые сложные проекты в короткий срок.</div>
                </div>
                <div class="showcase_img " data-delay="0.3s" ><img src="{{ Vite::asset('resources/images/500x500/02.jpg') }}"></div>
            </div>
            <div class="showcase_col">
                <div class="showcase_content">
                    <div class="showcase_title title">Доверие пользователей.</div>
                    <div class="showcase_text">Отлаженный технический процесс производства, с внедрением выскокого уровня автоматизации, обеспечивает изготовление не только ярких, но и надежных светильников.</div>
                </div>
                <div class="showcase_img " data-delay="0.6s" ><img src="{{ Vite::asset('resources/images/500x500/03.jpg') }}"></div>
            </div>
        </div>
    </div>
</section>
<section class="about section-gray" id="about">
    <div class="wrap about_cols">
        <div class="about_col">
            <h2>Почему мы вас заинтересуем?</h2>
            <div class="about_text  " >Наши специалиссты обладают наиболее полными знаниями в сфере производства и эксплуатации светодиодных светильников любых конфигураций.</div>
            <a class="btn btn-active  fadeInUp" href="./about_us.html" >О нашей компании</a>
        </div>
        <div class="about_col">
            <div class="accordeon_item accordeon_active  " >
                <div class="accordeon_title title">Это быстро.</div>
                <div class="accordeon_text"><div class="accordeon_wrap">Отлаженный процесс производства вкупе с опытом позволяют нам оперативно выполнить любой проект. </div></div>

            </div>
            <div class="accordeon_item " data-delay="0.3s" >
                <div class="accordeon_title title">Это красиво.</div>
                <div class="accordeon_text"><div class="accordeon_wrap">В разработке нашей продукции учавстуют не только инженеры, но и высококлассные дизайнеры.</div></div>
            </div>
            <div class="accordeon_item " data-delay="0.6s" >

                <div class="accordeon_title title">Это надежно.</div>
                <div class="accordeon_text"><div class="accordeon_wrap">Каждое изделие, изготовленное нашими специалистами, проходит этап тщательного тестирования, что исключает возможность неполадок.</div></div>

            </div>
        </div>
    </div>
</section>
<section class="products" id="products">
    <div class="wrap">
        <div class="section_title">
            <h2>Наша продукция.</h2>
            <div class="section_title_text">Ознакомьтесь с качественной, энергоэффективной и яркой продукцией.</div>
        </div>
        <div class="products-items-grid inverse-wrap">
            <div class="product_col products-items-grid_col">
                <a href="./product.html" class="products-items-grid_col_wrap">

                    <div class="product_img"><img src="{{ Vite::asset('resources/images/products/3.jpg') }}"></div>
                    <div class="product_title title">INDUSTRY 100.</div>
                    <div class="bage bage-accent bage-right-top">
                        Лучший выбор
                    </div>
                    <div class="product_text">
                        Промышленный светильник.
                        Мощность <span>100ватт</span>
                    </div>
                </a>
            </div>
            <div class="product_col products-items-grid_col">
                <a href="./product.html" class="products-items-grid_col_wrap">

                    <div class="product_img"><img src="{{ Vite::asset('resources/images/products/2.jpg') }}"></div>
                    <div class="product_title title">INDUSTRY 200.</div>
                    <div class="product_text">
                        Промышленный светильник.
                        Мощность <span>200ватт</span>
                    </div>
                </a>
            </div>
            <div class="product_col products-items-grid_col product_col product_col-last-in-row">
                <a href="./product.html" class="products-items-grid_col_wrap">

                    <div class="product_img"><img src="{{ Vite::asset('resources/images/products/2.jpg') }}"></div>
                    <div class="product_title title">AVENUE 200L.</div>
                    <div class="bage bage-accent bage-right-top">
                        Лучший выбор
                    </div>
                    <div class="product_text">
                        Промышленный светильник.
                        Мощность <span>200ватт</span>
                    </div>
                </a>
            </div>
        </div>
        <div style ="font-size: 20px;">
            <a href="./products.html" class='btn btn-active' style='background: #00bfd3; border: none'>
                Просмотреть каталог
            </a>
        </div>
    </div>
</section>
<section class="work section-gray" id="work" style="padding: 0;">
    <div class="wrap">
        <div class="section_title">
            <h2>Наши работы.</h2>
            <!--<div class="section_title_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad commodi dicta illo iure, magnam modi odio officia optio suscipit voluptate!</div>-->
        </div>
    </div>
    <div class="work_grid wrap">
        <div class="work_grid_inner inverse-wrap">
            <div class="work_item"><img src="{{ Vite::asset('resources/images/products-work/1.png') }}" style="height: 500px;" class="work-img expand-img" data-full="{{ Vite::asset('resources/images/products-work/1.png') }}"></div>
            <div class="work_item"><img src="{{ Vite::asset('resources/images/products-work/2.png') }}" style="height: 500px;" class="work-img expand-img" data-full="{{ Vite::asset('resources/images/products-work/2.png') }}"></div>
            <div class="work_item"><img src="{{ Vite::asset('resources/images/products-work/3.png') }}" class="work-img expand-img" data-full="{{ Vite::asset('resources/images/products-work/3.png') }}"></div>
            <div class="work_item"><img src="{{ Vite::asset('resources/images/products-work/4.png') }}" class="work-img expand-img" data-full="{{ Vite::asset('resources/images/products-work/4.png') }}"></div>
            <div class="work_item"><img src="{{ Vite::asset('resources/images/products-work/5.png') }}" class="work-img expand-img" data-full="{{ Vite::asset('resources/images/products-work/5.png') }}"></div>
            <div class="work_item"><img src="{{ Vite::asset('resources/images/products-work/6.png') }}" class="work-img expand-img" data-full="{{ Vite::asset('resources/images/products-work/6.png') }}"></div>
        </div>
    </div>
    <div class="work_expand" style="bottom: 0;">Показать все.</div>
</section>
<section style="background-color: #f9f9f9; padding: 0 0 10px;">
    <div class="wrap">
        <div style ="font-size: 20px;">
            <a href="./photos.html" class='btn btn-active' style='background: #00bfd3; border: none'>
                Перейти к галерее
            </a>
        </div>
    </div>
</section>

<section class="services" id="service">
    <div class="wrap">
        <div class="section_title">
            <h2>Возможности.</h2>
        </div>
        <div class="services_cols">
            <div class="service_col  " ><i class="fas fa-cogs fab "></i>
                <div class="service_title title">Надежность.</div>
                <div class="service_text">Тестирование каждого изготовленного изделия делает нашу продукцию одной из самых надежных.</div>
            </div>
            <div class="service_col service-active  " ><i class="fas fa-cloud-upload-alt"></i>
                <div class="service_title title">Качество материалов.</div>
                <div class="service_text">Мы используем только качественную материальную базу.</div>
            </div>
            <div class="service_col  " ><i class="far fa-building"></i>
                <div class="service_title title">Энергоэффективность.</div>
                <div class="service_text">Качество комплектующих вкупе с грамотным расчетом обеспечивает нашим светильникам высокий уровень КПД.</div>
            </div>
            <div class="service_col " data-delay=".3s" ><i class="fas fa-chart-line"></i>
                <div class="service_title title">Скорость работы.</div>
                <div class="service_text">В своей работе мы применяем множество машин, которые обеспечивают эффективное производство. </div>
            </div>
            <div class="service_col " data-delay=".3s" ><i class="fab fa-angular"></i>
                <div class="service_title title">Эстетичность</div>
                <div class="service_text">Мы знаем насколько потребители ценят внешний вид, мы заботися об этом.</div>
            </div>
            <div class="service_col " data-delay=".3s" ><i class="far fa-envelope"></i>
                <div class="service_title title">Отзывчивость.</div>
                <div class="service_text">Мы всегда на связи и прислушиваемся к потребителю.</div>
            </div>
        </div>
    </div>
</section>
<section class="docs">
    <div class="wrap">
        <div class="section_title">
            <h2>Наша документация.</h2>
            <!--<div class="section_title_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad commodi dicta illo iure, magnam modi odio officia optio suscipit voluptate!</div>-->
        </div>
    </div>
    <div class="docs_cols wrap">
        <div class="docs-wrap inverse-wrap">
            <div class="docs_col"><img src="{{ Vite::asset('resources/images/pdf/4.jpg') }}" alt="alt" class="expand-img" data-full="{{ Vite::asset('resources/images/pdf/4.jpg') }}"></div>
            <div class="docs_col"><img src="{{ Vite::asset('resources/images/pdf/3.png') }}" alt="alt" class="expand-img" data-full="{{ Vite::asset('resources/images/pdf/3.png') }}"></div>
            <div class="docs_col"><img src="{{ Vite::asset('resources/images/pdf/1.jpg') }}" alt="alt" class="expand-img" data-full="{{ Vite::asset('resources/images/pdf/1.jpg') }}"></div>
            <div class="docs_col"><img src="{{ Vite::asset('resources/images/pdf/2.jpg') }}" alt="alt" class="expand-img" data-full="{{ Vite::asset('resources/images/pdf/2.jpg') }}"></div>
        </div>
    </div>
    <div class="wrap">
        <a href="#" class="btn btn-active docs-expand">Просмотреть.</a>
    </div>
</section>
<section class="contact section-gray" id="contact">
    <div class="wrap contact_cols">
        <div class="contact_col  " data-delay="0.6s" >
            <div class="contact_title title">Таганрог</div>
            <div class="contact_text">Контактные данные нашего основного офиса, расположенного в Таганроге.</div>
            <div class="contact_tel contact_elem"><i class="fas fa-phone"></i>
                <div class="contact_elem_text">+1(234)567-89-89</div>
            </div>
            <div class="contact_mail contact_elem"><i class="far fa-envelope"></i>
                <div class="contact_elem_text">ooo-skg@example.com</div>
            </div>
        </div>
        <div class="contact_col " data-delay="0.3s" >
            <div class="contact_title title">Ростов-на-Дону</div>
            <div class="contact_text">Контактные данные представительства нашей организации в Ростове.</div>
            <div class="contact_tel contact_elem"><i class="fas fa-phone"></i>
                <div class="contact_elem_text">+1(234)567-89-89</div>
            </div>
            <div class="contact_mail contact_elem"><i class="far fa-envelope"></i>
                <div class="contact_elem_text">ooo-skg@example.com</div>
            </div>
        </div>

    </div>

    <div class="wrap contact-form">
        <form class="contact_form">
            <div style="width: 100%;">
                <h2 class="anim_type  anim_type_input">Напишите нам.</h2>
            </div>
            <div class="input-wrap  "  style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-user"></i></div>
                <input class="input_name" name="name" type="text" placeholder="Введите свое имя" required>
            </div>
            <div class="input-wrap " >
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="mail" type="email" placeholder="Введите свой email" autocomplete="email" required>
            </div>
            <div class="input-wrap  " >
                <div class="input-ico"><i class="fas fa-phone"></i></div>
                <input class="input_tel" name="tel" type="tel" placeholder="Введите свой номер" required>
            </div>
            <div class="input-wrap  "  style="flex-basis: 100%">
                <textarea class="input_message" name="message"  placeholder="Введите свой вопрос"></textarea>
            </div>
            <br>
            <label for="type-select">Выберите тип закупки</label>
            <div class="input-wrap  select-wrapper"  style="flex-basis: 100%">
                <select class="nice-select" name="type-select">
                    <option>Оптовые закупки</option>
                    <option>Розничные закупки</option>
                </select>
            </div>


            <div class="switch-group">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <label>Подписаться на рассылку</label>
            </div>

            <div class="radio-group">
                <p>Оставьте свою оценку</p>
                <div class="radio-wrap" >
                    <div class="star-group">
                        <input type="radio" id="first-star" class="radio-button" name="star">
                        <label for="first-star">Одна звезда</label>
                    </div>
                    <div class="star-group">
                        <input type="radio" id="second-star" class="radio-button" name="star">
                        <label for="second-star">Две звезды</label>
                    </div>
                    <div class="star-group">
                        <input type="radio" id="third-star" class="radio-button" name="star">
                        <label for="third-star">Три звезды</label>
                    </div>
                    <div class="star-group">
                        <input type="radio" id="fourth-star" class="radio-button" name="star">
                        <label for="fourth-star">Четыре звезды</label>
                    </div>
                    <div class="star-group">
                        <input type="radio" id="fifth-star" class="radio-button" name="star">
                        <label for="fifth-star">Пять звезд</label>
                    </div>
                </div>
            </div>



            <div class="checkbox-group">
                <div class="checkbox-wrap" >
                    <input type="checkbox" class="checkbox-input" name="captcha">
                </div>
                <label class="captcha-label" for="captcha">Я не робот</label>
            </div>

            <!-- <div class="g-recaptcha" data-sitekey="6LcKrGgUAAAAABir_0afQrZSiz2_XO5RpSx461FP" style="margin-top: 20px; margin-left: 5px;"></div>-->
            <button class="btn btn-active " type="submit" >Отправить</button>
        </form>
    </div>
</section>
<section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1903.9565388794563!2d38.90109093757926!3d47.25891882160598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e158391d98a645%3A0x20ecb97e625b0f75!2z0JjQvdC40YbQuNCw0YLQuNCy0L3QsNGPINGD0LsuLCA3OCwg0KLQsNCz0LDQvdGA0L7Qsywg0KDQvtGB0YLQvtCy0YHQutCw0Y8g0L7QsdC7LiwgMzQ3OTM2!5e0!3m2!1sru!2sru!4v1532428814992" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
