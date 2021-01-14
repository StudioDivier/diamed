<?php get_header(); ?>

    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Диагностика на дому</li>
            </ol>
        </div>
    </nav>

    <section class="diagnostic__main">
        <div class="diagnostic-main-bg-1">
            <div class="diagnostic-main-bg-2">
                <div class="diagnostic-main-bg-3">
                    <div class="diagnostic-main-bg-4">
                        <div class="diagnostic-main-bg-5">
                            <div class="diagnostic-main-bg-6">
                                <div class="container revealator-slideleft revealator-once">
                                    <div class="row">
                                        <div class="col-lg-6"></div>
                                        <div class="col-lg-6">
                                            <h1>Диагностика на дому</h1>
                                            <p class="dm-subtitle">Наш квалифицированный персонал окажет Вам необходимую
                                                медицинскую помощь с выездном на дом. Вы сможете пройти УЗИ или снять
                                                кардиограмму, не выходя из дома, а также сдать все необходимые анализы.</p>
                                            <div class="row">
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?php bloginfo('template_directory') ?>/img/diagnostic-main-icon.svg" alt="staff-check">
                                                </div>
                                                <div class="col-sm-9">
                                                    <p>Наши доктора постоянно повышают квалификацию, владеют как
                                                        традиционными,</p>
                                                    <p>так и самыми передовыми методами профилактики, диагностирования и
                                                        лечения различных заболеваний</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="diagnostic__retangle">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <img src="<?php bloginfo('template_directory') ?>/img/diagnostic-retangle.svg" class="revealator-slideup revealator-once" alt="diagnostic-retangle">
                </div>
                <div class="col-xl-9">
                    <h6 class="revealator-slideup revealator-once">В работе мы используем лучшее диагностическое
                        оборудование.</h6>
                    <p class="revealator-slideup revealator-once">Все наши специалисты обеспечены средствами
                        индивидуальной защиты.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="diagnostic__service">
        <div class="diagnostic__service-bg1">
            <div class="diagnostic__service-bg2">
                <div class="container">
                    <div class="service__title">
                        <div class="service__title-before">
                            <div class="title-before__line"></div>
                            <span>Медицинская диагностика на дому</span>
                        </div>
                        <h3>Оказываемые услуги</h3>
                    </div>

                    <div class="service__item">
                        <div class="row revealator-slideup revealator-once">
                            <div class="col-md-3 d-flex align-items-center justify-content-center">
                                <div class="servie-item__circle-img">
                                    <img src="<?php bloginfo('template_directory') ?>/img/service-1.svg" alt="service-icon">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h5>Анализ на короновирусную инфекцию</h5>
                                <p>ПЦР-исследование – мазок из ротоглотки, который дает информацию о наличии вируса
                                    SARS-CoV2.</p>
                                <button class="btn" data-toggle="modal" data-target="#callbackModal">Заказать</button>
                            </div>
                        </div>
                        <p class="revealator-slideup revealator-once">Обнаружить наличие антител IgG поможет кровь,
                            забранная из вены. При этом положительный
                            результат, говорит о наличии специфического иммунитета к коронавирусной инфекции. Другой вид
                            тестов, на антитела IgM покажет наличие инфекции на ранней и развитой стадии.</p>
                        <hr>
                        <h5>Прайс лист анализа на короновирусную инфекцию</h5>
                        <div class="service__cards">
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <div class="service__card revealator-slideup revealator-once">
                                        <div class="card__number">
                                            <span>01</span>
                                        </div>
                                        <div class="card__title">
                                            <h5><?= get_field("card1_name"); ?></h5>
                                            <p><?= get_field("card1_name_f"); ?></p>
                                        </div>
                                        <div class="card__options">
                                            <p><?= get_field("card1_bio"); ?></p>
                                            <p><?= get_field("card1_res"); ?></p>
                                        </div>
                                        <div class="card__divider"></div>
                                        <div class="card__service">
                                            <p>Цена одного исследования: <span><?= get_field("card1_price"); ?></span></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="service__card revealator-slideup revealator-delay1 revealator-once">
                                        <div class="card__number">
                                            <span>02</span>
                                        </div>
                                        <div class="card__title">
                                            <h5><?= get_field("card2_name"); ?></h5>
                                            <p><?= get_field("card2_name_f"); ?></p>
                                        </div>
                                        <div class="card__options">
                                            <p><?= get_field("card2_bio"); ?></p>
                                            <p><?= get_field("card2_res"); ?></p>
                                        </div>
                                        <div class="card__divider"></div>
                                        <div class="card__service">
                                            <p>Цена одного исследования: <span><?= get_field("card2_price"); ?></span></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="service__card revealator-slideup revealator-delay2 revealator-once">
                                        <div class="card__number">
                                            <span>03</span>
                                        </div>
                                        <div class="card__title">
                                            <h5><?= get_field("card3_name"); ?></h5>
                                            <p><?= get_field("card3_name_f"); ?></p>
                                        </div>
                                        <div class="card__options">
                                            <p><?= get_field("card3_bio"); ?></p>
                                            <p><?= get_field("card3_res"); ?></p>
                                        </div>
                                        <div class="card__divider"></div>
                                        <div class="card__service">
                                            <p>Цена одного исследования: <span><?= get_field("card3_price"); ?></span></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="service__card revealator-slideup revealator-once">
                                        <div class="card__number">
                                            <span>04</span>
                                        </div>
                                        <div class="card__title">
                                            <h5><?= get_field("card4_name"); ?></h5>
                                            <p><?= get_field("card4_name_f"); ?></p>
                                        </div>
                                        <div class="card__options">
                                            <p><?= get_field("card4_bio"); ?></p>
                                            <p><?= get_field("card4_res"); ?></p>
                                        </div>
                                        <div class="card__divider"></div>
                                        <div class="card__service">
                                            <p>Цена одного исследования: <span><?= get_field("card4_price"); ?></span></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="service__card revealator-slideup revealator-delay1 revealator-once">
                                        <div class="card__number">
                                            <span>05</span>
                                        </div>
                                        <div class="card__title">
                                            <h5><?= get_field("card5_name"); ?></h5>
                                            <p><?= get_field("card5_name_f"); ?></p>
                                        </div>
                                        <div class="card__options">
                                            <p><?= get_field("card5_bio"); ?></p>
                                            <p><?= get_field("card5_res"); ?></p>
                                        </div>
                                        <div class="card__divider"></div>
                                        <div class="card__service">
                                            <p>Цена одного исследования: <span><?= get_field("card5_price"); ?></span></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="service__card service__card-with-btn revealator-slideup revealator-delay2 revealator-once">
                                        <div class="card__number">
                                            <span>06</span>
                                        </div>
                                        <div class="card__title">
                                            <h5><?= get_field("card6_name"); ?></h5>
                                            <p><?= get_field("card6_name_f"); ?></p>
                                        </div>
                                        <div class="card__options">
                                            <p><?= get_field("card6_bio"); ?></p>
                                            <p><?= get_field("card6_res"); ?></p>
                                        </div>
                                        <div class="card__divider"></div>
                                        <div class="card__service">
                                            <a class="" href="#" data-toggle="modal" data-target="#callbackModal">Скачать</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="under-cards" style="max-width: 1000px"><?= get_field("mcad"); ?></p>
                    </div>

                    <div class="service__item">
                        <div class="row revealator-slideup revealator-once">
                            <div class="col-md-3 d-flex align-items-center justify-content-center">
                                <div class="servie-item__circle-img">
                                    <img src="<?php bloginfo('template_directory') ?>/img/service-4.svg" alt="service-icon">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h5>Электрокардиогра́фия (ЭКГ)</h5>
                                <p>Ультразвуковая диагностика (УЗИ) — это малоинвазивный метод исследования внутренних
                                    органов, в основе которого лежит способность звуковых волн отражаться от различных
                                    структур организма. Этот способ исследования является основным в современной медицинской
                                    практике.</p>
                                <button class="btn" data-toggle="modal" data-target="#callbackModal">Заказать</button>
                            </div>
                        </div>
                        <p class="revealator-slideup revealator-once">ЭКГ – наиболее простой и, вместе с тем, крайне
                            информативный метод обследования. ЭКГ представляет
                            собой запись на пленке (или мониторе) электрической активности сердца. Пациенту необходимо лечь
                            на спину, на его руки, ноги и грудь накладываются электроды, предварительно обработав
                            соответствующие участки тела гелем.</p>
                        <h5 class="revealator-slideup revealator-once">ЭКГ позволяет диагностировать различные виды
                            патологии сердца. По ЭКГ возможно:</h5>
                        <ul class="revealator-slideup revealator-once">
                            <li>определение водителя ритма сердца (синусовый, узловой и пр.);</li>
                            <li>определения частоты сердечных сокращений (ЧСС);</li>
                            <li>выявление нарушений внутрисердечной проводимости – синоатриальные (СА)-блокады,
                                атриовентрикулярные (АВ)-блокады, блокады ножек пучка Гиса;
                            </li>
                            <li>выявление нарушений ритма – внеочередных сердечных сокращений (экстрасистол), фибрилляции
                                предсердий (или мерцательной аритмии), трепетания предсердий, узловой тахикардии (АВУРТ),
                                синдрома WPW и пр.;
                            </li>
                            <li>диагностировать ишемическую болезнь сердца (ИБС), острое или хроническое повреждение
                                миокарда;
                            </li>
                            <li>получить информацию о внесердечной патологии (тромбоэмболия легочной артерии и пр.)</li>
                        </ul>

                        <hr>
                        <h5>Прайс лист анализа на короновирусную инфекцию</h5>
                        <div class="service__cards">
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <div class="service__card revealator-slideup revealator-once">
                                        <div class="card__number">
                                            <span>01</span>
                                        </div>
                                        <div class="card__title">
                                            <h5><?= get_field("covid1"); ?></h5>
                                            <p><?= get_field("covid_d1"); ?></p>
                                        </div>
                                        <div class="card__options">
                                        </div>
                                        <div class="card__divider"></div>
                                        <div class="card__service">
                                            <p>Цена: <span> <?= get_field("covid_price1"); ?></span></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="service__card revealator-slideup revealator-delay1 revealator-once">
                                        <div class="card__number">
                                            <span>02</span>
                                        </div>
                                        <div class="card__title">
                                            <h5><?= get_field("covid2"); ?></h5>
                                            <p><?= get_field("covid_d2"); ?></p>
                                        </div>
                                        <div class="card__options">
                                        </div>
                                        <div class="card__divider"></div>
                                        <div class="card__service">
                                            <p>Цена: <span> <?= get_field("covid_price2"); ?></span></p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <p class="under-cards" style="max-width: 1000px"><?= get_field("mcad"); ?></p>
                    </div>

                    <div class="service__item">
                        <div class="row revealator-slideup revealator-once">
                            <div class="col-md-3 d-flex align-items-center justify-content-center">
                                <div class="servie-item__circle-img">
                                    <img src="<?php bloginfo('template_directory') ?>/img/service-2.svg" alt="service-icon">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h5>Медицинские манипуляции</h5>
                                <p>Постановка капельниц с соблюдением медицинских стандартов. Введение препарата капельным
                                    способом осуществляется с использованием стерильных инструментов.</p>
                                <button class="btn" data-toggle="modal" data-target="#callbackModal">Заказать</button>
                            </div>
                        </div>

                        <hr>
                        <h5>Прайс лист анализа на короновирусную инфекцию</h5>
                        <div class="service__cards">
                            <div class="row">

                                <div class="col-xl-4 col-md-6">
                                    <div class="service__card revealator-slideup revealator-once">
                                        <div class="card__number">
                                            <span>01</span>
                                        </div>
                                        <div class="card__title">
                                            <h5><?= get_field("covid21"); ?></h5>
                                            <p style="min-height: 72px"><?= get_field("covid_d21"); ?></p>
                                        </div>
                                        <div class="card__divider"></div>
                                        <div class="card__service">
                                            <p>Цена от: <span> <?= get_field("covid_price21"); ?></span></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="service__card revealator-slideup revealator-delay1 revealator-once">
                                        <div class="card__number">
                                            <span>02</span>
                                        </div>
                                        <div class="card__title">
                                            <h5><?= get_field("covid22"); ?></h5>
                                            <p style="min-height: 72px"><?= get_field("covid_d22"); ?></p>
                                        </div>
                                        <div class="card__divider"></div>
                                        <div class="card__service">
                                            <p>Цена от: <span> <?= get_field("covid_price22"); ?></span></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="service__card revealator-slideup revealator-delay2 revealator-once">
                                        <div class="card__number">
                                            <span>03</span>
                                        </div>
                                        <div class="card__title">
                                            <h5><?= get_field("covid23"); ?></h5>
                                            <p style="min-height: 72px"><?= get_field("covid_d23"); ?></p>
                                        </div>
                                        <div class="card__divider"></div>
                                        <div class="card__service">
                                            <p>Цена от: <span> <?= get_field("covid_price23"); ?></span></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="service__card revealator-slideup revealator-once">
                                        <div class="card__number">
                                            <span>04</span>
                                        </div>
                                        <div class="card__title">
                                            <h5><?= get_field("covid24"); ?></h5>
                                            <p style="min-height: 72px"><?= get_field("covid_d24"); ?></p>
                                        </div>
                                        <div class="card__divider"></div>
                                        <div class="card__service">
                                            <p>Цена от: <span> <?= get_field("covid_price24"); ?></span></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="service__card revealator-slideup revealator-delay1 revealator-once">
                                        <div class="card__number">
                                            <span>05</span>
                                        </div>
                                        <div class="card__title">
                                            <h5><?= get_field("covid25"); ?></h5>
                                            <p style="min-height: 72px"><?= get_field("covid_d25"); ?></p>
                                        </div>
                                        <div class="card__divider"></div>
                                        <div class="card__service">
                                            <p>Цена от: <span> <?= get_field("covid_price25"); ?></span></p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <p class="under-cards" style="max-width: 1000px"><?= get_field("mcad"); ?></p>
                    </div>

                    <div class="service__item">
                        <div class="row revealator-slideup revealator-once">
                            <div class="col-md-3 d-flex align-items-center justify-content-center">
                                <div class="servie-item__circle-img">
                                    <img src="<?php bloginfo('template_directory') ?>/img/service-3.svg" alt="service-icon">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h5>Ультразвуковая диагностика (УЗИ)</h5>
                                <p>Ультразвуковая диагностика (УЗИ) — это малоинвазивный метод исследования внутренних
                                    органов, в основе которого лежит способность звуковых волн отражаться от различных
                                    структур организма. Этот способ исследования является основным в современной медицинской
                                    практике.</p>
                                <button class="btn" data-toggle="modal" data-target="#callbackModal">Заказать</button>
                                <button class="btn blue-btn" data-toggle="modal" data-target="#callbackModal">Скачать прайс-лист</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="diagnostic__action">
        <div class="index__diagnostic-gb1">
            <div class="index__diagnostic-gb2">
                <div class="index__diagnostic-gb3">
                    <div class="index__diagnostic-gb4">
                        <div class="container">
                            <div class="diagnostic__title">
                                <div class="diagnostic__title-before">
                                    <div class="title-before__line"></div>
                                    <span>Как мы работаем</span>
                                </div>
                                <h3>Порядок действий</h3>
                                <div class="diagnostic-action__items">
                                    <div class="row border-b">
                                        <div class="col-lg-4 pt-5">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="action__circle-img bg-white">
                                                        <img src="<?php bloginfo('template_directory') ?>/img/d-action-1.png" alt="diagnostic-action">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <h6>Оставьте заявку</h6>
                                                    <p>Оставьте заявку, укажите данные для подтверждения заказа</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 pt-5 border-l">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="action__circle-img bg-blue">
                                                        <img src="<?php bloginfo('template_directory') ?>/img/d-action-2.png" alt="diagnostic-action">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <h6>Дождитесь звонка оператора</h6>
                                                    <p>Выберите удобные дату и время, узнайте о рекомендациях по подготовке
                                                        к приезду мед. работника</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 pt-5 border-l">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="action__circle-img bg-white">
                                                        <img src="<?php bloginfo('template_directory') ?>/img/d-action-3.png" alt="diagnostic-action">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <h6>Получите медицинскую помощь</h6>
                                                    <p>Встретьте сотрудника лаборатории Диамед для проведения обследования
                                                        или сбора биологического материала</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 py-5">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="action__circle-img bg-blue">
                                                        <img src="<?php bloginfo('template_directory') ?>/img/d-action-4.png" alt="diagnostic-action">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <h6>Оплатите услугу</h6>
                                                    <p>Есть возможность использовать наличный и безналичный расчет</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 pt-5 border-l">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="action__circle-img bg-white">
                                                        <img src="<?php bloginfo('template_directory') ?>/img/d-action-5.png" alt="diagnostic-action">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <h6>Получите результаты</h6>
                                                    <p>Заключение и рекомендации будут доступны сразу после обработки
                                                        данных, всю информацию можно получить по почте</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="diagnostic__license">
        <div class="diagnostic__license-bg1">
            <div class="diagnostic__license-bg2">
                <div class="container">
                    <div class="license__title">
                        <div class="license__title-before">
                            <div class="title-before__line"></div>
                            <span>Лицензии на нашу работу</span>
                        </div>
                        <h3>Лицензии</h3>
                    </div>
                    <div class="license__items">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="license__item">
                                    <img src="<?php bloginfo('template_directory') ?>/img/license-1.png" alt="license" data-toggle="modal" data-target="#license1">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="license__item">
                                    <img src="<?php bloginfo('template_directory') ?>/img/license-2.png" alt="license" data-toggle="modal" data-target="#license2">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <div class="modal fade" id="license1" tabindex="-1" aria-labelledby="license1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <img src="<?php bloginfo('template_directory') ?>/img/license-1.png" alt="license" class="w-100">
            </div>
        </div>
    </div>


    <div class="modal fade" id="license2" tabindex="-1" aria-labelledby="license2Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <img src="<?php bloginfo('template_directory') ?>/img/license-2.png" alt="license" class="w-100">
            </div>
        </div>
    </div>

<?php get_footer(); ?>