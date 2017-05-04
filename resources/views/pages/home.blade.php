@extends('main')

@section('title', 'Главная')

@section('content')

    {{--YA WordStat--}}
    {{--1) 1с казань--}}
    {{--2) обучение 1с казань--}}
    {{--3) купить 1с казань--}}
    {{--4) программист 1с казань--}}
    {{--5) 1с бухгалтерия казань--}}
    {{--6) казань 1с программы--}}
    {{--7) 1с торговля казань--}}
    {{--8) 1с 8 казань--}}
    {{--оператор 1с казань--}}

    <header>
        <div class="container">

            <div class="row">
                <div class="header__left col-md-6">
                    <div class="city__name">Казань</div>
                    <h1>1С Предприятие</h1>
                    <a href="/center" class="button"><span>[ системный подход к автоматизации ]</span><i class="arrow-right"></i></a>
                </div>

                <div class="header__right col-md-6">
                    <div>
                        Помощь <b>в выборе программы </b>1С
                    </div>
                    <div>
                        <b>Обновление </b>1С
                    </div>
                    <div>
                        <b>Настройка</b> 1С
                    </div>
                    <div>
                        <b>Обучение</b> 1С
                    </div>
                    <div>
                        <b>Техническая</b> поддержка
                    </div>
                </div>
            </div>

        </div>
    </header>

    <!--Купить 1С--->
    <section class="buy1c">
        <div class="container">
            <div class="row">
                <div class="sec-title centered">
                    <h2>Купить 1С в Казани</h2>
                    <div class="desc-text">Мы поможем вам выбрать наиболее продходящую систему для вашего бизнеса.
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="config1c">
                        <div class="configTitle underlineyellow">
                            <h3>1С Бухгалтерия</h3>
                        </div>
                        <div class="configDecr">
                            <p><img src="images/configurations/bookipers8_3_conf.jpg" alt="1С Бухгалтерия" style="float: right; margin: 0px 7px 7px 0;">
                                Программа предназначена для автоматизации бухгалтерского и налогового учета, включая подготовку обязательной (регламентированной)
                                отчетности в коммерческой организации, применяющей план счетов  бухгалтерского учета,
                                соответствующий Приказу Минфина РФ «Об утверждении плана счетов бухгалтерского учета финансово-хозяйственной деятельности
                                организаций и инструкции по его применению» от 31.10.2000 № 94н.
                                Бухгалтерский и налоговый учет ведется в соответствии с действующим законодательством Российской Федерации.</p>
                            <p>Система обеспечивает решение всех задач бухгалтерской службы предприятия, если бухгалтерская служба полностью отвечает
                                за учет на предприятии, включая, например, выписку первичных документов, учет продаж и т. д.
                                Данное прикладное решение также можно использовать только для ведения бухгалтерского и налогового учета.</p>

                            <p>Состав счетов, организация аналитического, валютного, количественного учета на счетах соответствуют требованиям
                                законодательства по ведению бухгалтерского учета и отражению данных в отчетности.
                                При необходимости пользователи могут самостоятельно создавать дополнительные субсчета и разрезы аналитического учета.</p>

                        </div>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="config1c">
                        <div class="configTitle underlineyellow">
                            <h3>1С Управление торговлей</h3>
                        </div>
                        <div class="configDecr">
                            <p><img src="images/configurations/ut11_conf.png" alt="1С Управление торговлей" style="float: right; margin: 0px 7px 7px 0;">
                                Программа позволяет в комплексе автоматизировать задачи оперативного и управленческого учета,
                                анализа и планирования торговых операций, обеспечивая тем самым эффективное управление современным торговым предприятием.</p>
                            <p>"1С:Управление торговлей 8" автоматизирует оформление практически всех первичных документов торгового и складского учета,
                                а также документов движения денежных средств.
                                "1С:Управление торговлей 8" рассчитана на любые виды торговых операций.
                                Реализованы функции учета – от ведения справочников и ввода первичных документов до получения различных аналитических отчетов.</p>
                            <p>Функционал решения может быть гибко адаптирован путем включения/отключения различных функциональных опций.
                                Например, таким образом программу можно значительно упростить для небольшой организации,
                                отключив множество возможностей необходимых только крупным компаниям (отключенный функционал скрывается из интерфейса
                                и не мешает работе пользователей).</p>

                        </div>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="config1c">
                        <div class="configTitle underlineyellow">
                            <h3>1С Зарплата и управление персоналом</h3>
                        </div>
                        <div class="configDecr">
                            <p><img src="images/configurations/zup_conf.jpg" alt="1C Зарплата и управление персоналом" style="float: right; margin: 0px 7px 7px 0;">
                                Программа массового назначения, позволяющая в комплексе автоматизировать задачи, связанные с расчетом заработной платы
                                персонала и реализацией кадровой политики, с учетом требований законодательства и реальной практики работы предприятий.
                                Она может успешно применяться в службах управления персоналом и бухгалтериях предприятий, а также в других подразделениях,
                                заинтересованных в эффективной организации работы сотрудников, для управления человеческими ресурсами коммерческих предприятий
                                различного масштаба.</p>
                            <p>В «1С:Зарплате и управлении персоналом 8» поддерживаются все основные процессы управления персоналом,
                                а также процессы кадрового учета, расчета зарплаты, исчисления налогов, формирования отчетов и справок в государственные органы
                                и социальные фонды, планирования расходов на оплату труда. Учтены требования законодательства,
                                реальная практика работы предприятий и перспективные мировые тенденции развития подходов к управлению персоналом.</p>
                            <p>Удобные и гибкие механизмы настройки отчетов позволяют получать полную и достоверную информацию в самых разных аналитических разрезах,
                                для различных категорий пользователей: руководства, службы управления персоналом, кадровой службы и других.</p>

                        </div>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="config1c">
                        <div class="configTitle underlineyellow">
                            <h3>1С:ERP Управление предприятием</h3>
                        </div>
                        <div class="configDecr">
                            <p><img src="images/configurations/erp_conf.jpg" alt="1С:ERP Управление предприятием" style="float: right; margin: 0px 7px 7px 30px;">
                                «1С:ERP Управление предприятием 2» – инновационное решение для построения комплексных информационных систем управления
                                деятельностью многопрофильных предприятий с учетом лучших мировых и отечественных практик автоматизации крупного
                                и среднего бизнеса.</p>
                            <p>Решение «1С:ERP Управление предприятием 2» разработано на новой современной версии 8.3 платформы «1С:Предприятие»
                                проектной командой специалистов фирмы «1С» при участии специально созданного экспертного совета,
                                в который вошли специалисты ведущих партнеров «1С» (Центры ERP, Центры разработки «1С») и руководители
                                профильных подразделений крупных промышленных предприятий. До выпуска финальной версии более года производилось
                                изучение и тестирование данного продукта сотнями партнеров и десятками клиентов на пилотных внедрениях.</p>
                            <p>Особое внимание при разработке было уделено реализации функциональных возможностей, востребованных крупными предприятиями
                                различных направлений деятельности, в том числе с технически сложным многопередельным производством.
                                Такой подход позволил существенно расширить возможности и область применения нового ERP-решения по сравнению
                                с «1С:Управление производственным предприятием» редакция 1.3.
                            </p>

                        </div>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="config1c">
                        <div class="configTitle underlineyellow">
                            <h3>Отраслевые и специализированные решения 1С</h3>
                        </div>
                        <div class="configDecr">
                            <img src="images/configurations/all_conf.jpg" alt="Отраслевые и специализированные решения 1С" style="margin: 0px 7px 7px 7px;">
                            <p>На Ваш выбор доступно множество <a href="http://v8.1c.ru/solutions/applied_solutions.htm">других решений</a> от фирмы 1С. </p>

                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--About Us--->
    <section class="about-us">
        <div class="auto-container">
            {{--2222--}}
            <!--Title-->
            {{--<div class="sec-title centered">--}}
                {{--<h1>Автоматизация на платформе 1с</h1>--}}
                {{--<div class="desc-text">--}}

                {{--</div>--}}
            {{--</div>--}}




            <div class="row clearfix">
                <!--Info BLock-->
                <div class="info-block-one col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms"><span
                                    class="flaticon-headphones"></span></div>
                        <h3>Внедрение 1с</h3>
                        <div class="text">
                            Предпроектное обследование, разработка технического задания, адаптация, ввод в опытную эксплуатацию,
                            обучение 1с сотрудников, ввод в промышленную эксплуатацию. Все этапы внедрения под руководством команды наших опытных специалистов.
                        </div>
                        <a href="services-single.html" class="read-more">Подробнее <span
                                    class="fa fa-angle-right"></span></a>
                    </div>
                </div>
                <!--Info BLock-->
                <div class="info-block-one col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box wow zoomInStable" data-wow-delay="300ms" data-wow-duration="2000ms"><span
                                    class="flaticon-database"></span></div>
                        <h3>Настройка 1с</h3>
                        <div class="text">
                            Оказываем помощь при закрытии месяца в программе 1С Предприятие. на вашем предприятии сложный расчет зарплаты,
                            директор просит предоставить отчет,которого нет в программе, устали вручную исправлять печатные формы приказов или вести отчеты в экселе
                            - мы поможем вам настроить или доработать конфигурацию 1с под ваши нужды.
                        </div>
                        <a href="services-single.html" class="read-more">Подробнее <span
                                    class="fa fa-angle-right"></span></a>
                    </div>
                </div>
                <!--Info BLock-->
                <div class="info-block-one col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box wow zoomInStable" data-wow-delay="600ms" data-wow-duration="2000ms"><span
                                    class="flaticon-thumb-up"></span></div>
                        <h3>Обучение 1с</h3>
                        <div class="text">Перешли на новую версию программы и не можете разобраться, установили программу 1С "с нуля"
                            обращайтесь и мы поможем Вам в этом.
                        </div>
                        <a href="services-single.html" class="read-more">Подробнее <span
                                    class="fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--FUn Facts Section-->
    <section class="fun-facts-section extended" style="background-image:url(images/background/image-1.jpg);">
        <div class="auto-container">
            <!--Title-->
            <div class="sec-title light centered">
                <h2>Настраиваем <span class="theme_color">бизнес-процессы</span> в прикладных решениях 1с Предприятие</h2>
                <div class="desc-text">Бизнес-процессы и грамотное управление задачами в организации ведет к снижению издержек и достижению поставленных целей в срок.
                </div>
            </div>

            <div class="row clearfix">
                <!--Column-->
                <div class="column count-box col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="inner">
                        <div class="icon-box"><span class="flaticon-target-2"></span></div>
                        <div class="content">
                            <div class="count-outer">
                                <span class="count-text" data-speed="1000" data-stop="157">0</span>
                            </div>
                            <div class="counter-title">Проектов выполнено</div>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column count-box col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="inner">
                        <div class="icon-box"><span class="flaticon-briefcase-3"></span></div>
                        <div class="content">
                            <div class="count-outer">
                                <span class="count-text" data-speed="1000" data-stop="118">0</span>
                            </div>
                            <div class="counter-title">Баз обновлено</div>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column count-box col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="inner">
                        <div class="icon-box"><span class="flaticon-cup-2"></span></div>
                        <div class="content">
                            <div class="count-outer">
                                <span class="count-text" data-speed="500" data-stop="86">0</span>
                            </div>
                            <div class="counter-title">Обучено пользователей</div>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column count-box col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="inner">
                        <div class="icon-box"><span class="flaticon-thumb-up"></span></div>
                        <div class="content">
                            <div class="count-outer">
                                <span class="count-text" data-speed="500" data-stop="57">0</span>
                            </div>
                            <div class="counter-title">Довольных заказчиков</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!--Default Section-->
    <section class="default-section">
        <div class="auto-container">
            <div class="services-outer wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="clearfix">
                    <!--Service Block-->
                    <div class="default-service-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box"><span class="flaticon-line-chart"></span></div>
                            <h3>Адаптация конфигураций под процессы заказчика</h3>
                            <div class="text">Внедрение системы 1с Предприятие в поставленные сроки. Внесение новых алгоритмов в систему, изменение существующих конфигураций.
                            </div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="default-service-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box"><span class="flaticon-bar-chart-1"></span></div>
                            <h3>Своевременное обновление</h3>
                            <div class="text">Будьте уверены в том, что ваша система предоставляет актуальные формы отчетности и форматы выгрузки в налоговые органы
                            </div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="default-service-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box"><span class="flaticon-users"></span></div>
                            <h3>Техническая поддержка</h3>
                            <div class="text">Клиенты всегда уверены в оперативной поддержке и грамотной консультации наших специалистов.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Gallery Section-->
    <section class="gallery-section">
        <div class="auto-container">
            <!--Title-->
            <div class="sec-title centered">
                <h2>Наши выполненные работы</h2>
                <div class="desc-text">Focus freemium business model canvas alpha termsheet business plan crowdfunding
                    ownership advisor holy grail testing innovator.
                </div>
            </div>

            <div class="row clearfix">
                <!--Default Portfolio Item-->
                <div class="default-portfolio-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/gallery/1.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4><a href="project-single.html">Financial Service</a></h4>
                                    <div class="text">Ownership advisor grail testing innovator.</div>
                                    <a href="images/gallery/1.jpg" class="lightbox-image option-btn"
                                       title="Image Caption Here" data-fancybox-group="example-gallery"><span
                                                class="flaticon-cross"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Default Portfolio Item-->
                <div class="default-portfolio-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/gallery/2.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4><a href="project-single.html">Financial Service</a></h4>
                                    <div class="text">Ownership advisor grail testing innovator.</div>
                                    <a href="images/gallery/2.jpg" class="lightbox-image option-btn"
                                       title="Image Caption Here" data-fancybox-group="example-gallery"><span
                                                class="flaticon-cross"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Default Portfolio Item-->
                <div class="default-portfolio-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/gallery/3.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4><a href="project-single.html">Financial Service</a></h4>
                                    <div class="text">Ownership advisor grail testing innovator.</div>
                                    <a href="images/gallery/3.jpg" class="lightbox-image option-btn"
                                       title="Image Caption Here" data-fancybox-group="example-gallery"><span
                                                class="flaticon-cross"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Default Portfolio Item-->
                <div class="default-portfolio-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/gallery/4.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4><a href="project-single.html">Financial Service</a></h4>
                                    <div class="text">Ownership advisor grail testing innovator.</div>
                                    <a href="images/gallery/4.jpg" class="lightbox-image option-btn"
                                       title="Image Caption Here" data-fancybox-group="example-gallery"><span
                                                class="flaticon-cross"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Default Portfolio Item-->
                <div class="default-portfolio-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/gallery/5.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4><a href="project-single.html">Financial Service</a></h4>
                                    <div class="text">Ownership advisor grail testing innovator.</div>
                                    <a href="images/gallery/5.jpg" class="lightbox-image option-btn"
                                       title="Image Caption Here" data-fancybox-group="example-gallery"><span
                                                class="flaticon-cross"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Default Portfolio Item-->
                <div class="default-portfolio-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/gallery/6.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4><a href="project-single.html">Financial Service</a></h4>
                                    <div class="text">Ownership advisor grail testing innovator.</div>
                                    <a href="images/gallery/6.jpg" class="lightbox-image option-btn"
                                       title="Image Caption Here" data-fancybox-group="example-gallery"><span
                                                class="flaticon-cross"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!--Sponsors Section-->
    <section class="sponsors-style-one" style="background-image:url(images/background/image-3.jpg);">
        <div class="auto-container">

            <div class="row clearfix">
                <!--Content Column-->
                <div class="content-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner">
                        <h2>We Support Your Financial <span class="theme_color">Interest!</span></h2>
                        <div class="text">We’ll help you rollover your old retirement plan so you can enjoy our wide
                            variety of investment options and roll your old one-on-one guidance retirement plan.
                        </div>
                        <a href="index.html#" class="theme-btn btn-style-three">Start today</a>
                    </div>
                </div>

                <!--Carousel Column-->
                <div class="carousel-column col-md-8 col-sm-12 col-xs-12">
                    <div class="carousel-outer">
                        <ul class="sponsors-carousel-one owl-theme owl-carousel">
                            <li><a href="index.html#"><img src="images/sponsors/1.png" alt=""></a></li>
                            <li><a href="index.html#"><img src="images/sponsors/2.png" alt=""></a></li>
                            <li><a href="index.html#"><img src="images/sponsors/3.png" alt=""></a></li>
                            <li><a href="index.html#"><img src="images/sponsors/1.png" alt=""></a></li>
                            <li><a href="index.html#"><img src="images/sponsors/2.png" alt=""></a></li>
                            <li><a href="index.html#"><img src="images/sponsors/3.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>





    <!--Testimonial Style One Section-->
    <section class="testimonial-style-one" style="background-image:url(images/background/image-4.jpg);">
        <div class="auto-container">

            <!--Title-->
            <div class="sec-title light">
                <h2>Отзывы </h2>
            </div>
            <!--Testimonial Carousel One-->
            <div class="testimonial-carousel-one">
                <!--Testimonials Content-->
                <div class="carousel-content owl-theme owl-carousel">
                    <!--Slide-->
                    <div class="slide">
                        <div class="icon-box"><span class="flaticon-left-quote"></span></div>
                        <div class="text">These men promptly escaped from a maximum security stockade to the Los geles
                            the and his skipper first mate These men promptly escaped from a maximum security stockade
                            to the Los geles the and his skipper first mate These men promptly escaped from a maximum
                            security stockade to the Los geles the and his skipper first mate These men promptly escaped
                            from a maximum security.
                        </div>
                    </div>
                    <!--Slide-->
                    <div class="slide">
                        <div class="icon-box"><span class="flaticon-left-quote"></span></div>
                        <div class="text">These men promptly escaped from a maximum security stockade to the Los geles
                            the and his skipper first mate These men promptly escaped from a maximum security stockade
                            to the Los geles the and his skipper first mate These men promptly escaped from a maximum
                            security stockade to the Los geles the and his skipper first mate These men promptly escaped
                            from a maximum security.
                        </div>
                    </div>
                    <!--Slide-->
                    <div class="slide">
                        <div class="icon-box"><span class="flaticon-left-quote"></span></div>
                        <div class="text">These men promptly escaped from a maximum security stockade to the Los geles
                            the and his skipper first mate These men promptly escaped from a maximum security stockade
                            to the Los geles the and his skipper first mate These men promptly escaped from a maximum
                            security stockade to the Los geles the and his skipper first mate These men promptly escaped
                            from a maximum security.
                        </div>
                    </div>
                    <!--Slide-->
                    <div class="slide">
                        <div class="icon-box"><span class="flaticon-left-quote"></span></div>
                        <div class="text">These men promptly escaped from a maximum security stockade to the Los geles
                            the and his skipper first mate These men promptly escaped from a maximum security stockade
                            to the Los geles the and his skipper first mate These men promptly escaped from a maximum
                            security stockade to the Los geles the and his skipper first mate These men promptly escaped
                            from a maximum security.
                        </div>
                    </div>
                    <!--Slide-->
                    <div class="slide">
                        <div class="icon-box"><span class="flaticon-left-quote"></span></div>
                        <div class="text">These men promptly escaped from a maximum security stockade to the Los geles
                            the and his skipper first mate These men promptly escaped from a maximum security stockade
                            to the Los geles the and his skipper first mate These men promptly escaped from a maximum
                            security stockade to the Los geles the and his skipper first mate These men promptly escaped
                            from a maximum security.
                        </div>
                    </div>
                    <!--Slide-->
                    <div class="slide">
                        <div class="icon-box"><span class="flaticon-left-quote"></span></div>
                        <div class="text">These men promptly escaped from a maximum security stockade to the Los geles
                            the and his skipper first mate These men promptly escaped from a maximum security stockade
                            to the Los geles the and his skipper first mate These men promptly escaped from a maximum
                            security stockade to the Los geles the and his skipper first mate These men promptly escaped
                            from a maximum security.
                        </div>
                    </div>
                </div><!--End Testimonials Content-->

                <!--Testimonials Pager-->
                <div class="carousel-pager owl-theme owl-carousel">
                    <!--Pager-->
                    <div class="pager">
                        <div class="inner">
                            <figure class="author-thumb img-circle"><img class="img-circle"
                                                                         src="images/resource/author-thumb-1.jpg"
                                                                         alt=""></figure>
                            <h4>Michael Jose Reo</h4>
                            <div class="designation">Co founder</div>
                        </div>
                    </div>
                    <!--Pager-->
                    <div class="pager">
                        <div class="inner">
                            <figure class="author-thumb img-circle"><img class="img-circle"
                                                                         src="images/resource/author-thumb-2.jpg"
                                                                         alt=""></figure>
                            <h4>Daniel Jameson</h4>
                            <div class="designation">Founder & CEO</div>
                        </div>
                    </div>
                    <!--Pager-->
                    <div class="pager">
                        <div class="inner">
                            <figure class="author-thumb img-circle"><img class="img-circle"
                                                                         src="images/resource/author-thumb-3.jpg"
                                                                         alt=""></figure>
                            <h4>Max Turner</h4>
                            <div class="designation">Marketing Officer</div>
                        </div>
                    </div>
                    <!--Pager-->
                    <div class="pager">
                        <div class="inner">
                            <figure class="author-thumb img-circle"><img class="img-circle"
                                                                         src="images/resource/author-thumb-1.jpg"
                                                                         alt=""></figure>
                            <h4>Michael Jose Reo</h4>
                            <div class="designation">Co founder</div>
                        </div>
                    </div>
                    <!--Pager-->
                    <div class="pager">
                        <div class="inner">
                            <figure class="author-thumb img-circle"><img class="img-circle"
                                                                         src="images/resource/author-thumb-2.jpg"
                                                                         alt=""></figure>
                            <h4>Daniel Jameson</h4>
                            <div class="designation">Founder & CEO</div>
                        </div>
                    </div>
                    <!--Pager-->
                    <div class="pager">
                        <div class="inner">
                            <figure class="author-thumb img-circle"><img class="img-circle"
                                                                         src="images/resource/author-thumb-3.jpg"
                                                                         alt=""></figure>
                            <h4>Max Turner</h4>
                            <div class="designation">Marketing Officer</div>
                        </div>
                    </div>
                </div><!--End Testimonials Pager-->
            </div>

        </div>
    </section>


    <!--News Section-->
    <section class="news-section">
        <div class="auto-container">
            <!--Title-->
            <div class="sec-title centered">
                <h2>Наши последние новости</h2>
                <div class="desc-text">These men promptly escaped from a maximum security stockade to the Los geles the
                    and his skipper first mate.
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <!--News Style One-->
                    <div class="news-style-one">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="clearfix">
                                <!--Image Column-->
                                <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                    <figure class="image-box"><a href="blog-single.html"><img
                                                    src="images/resource/blog-image-1.jpg" alt=""></a></figure>
                                </div>
                                <!--Content Column-->
                                <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="content-box">
                                        <div class="post-cat"><a href="index.html#">Accounts</a></div>
                                        <h3><a href="blog-single.html">Make your teams more productive, deliver
                                                lightning-fast, and more.</a></h3>
                                        <div class="post-meta">
                                            <ul class="clearfix">
                                                <li><a href="index.html#"><span class="fa fa-calendar"></span> Dec 30,
                                                        2016</a></li>
                                                <li><a href="index.html#"><span class="fa fa-commenting-o"></span> 2
                                                        Comments</a></li>
                                            </ul>
                                        </div>
                                        <div class="text">Etiam eu molestie eros, commodo hendrerit sapien. Maecenas
                                            tempus leo ac nisi iaculis porta...
                                        </div>
                                        <a class="read-more" href="blog-single.html">Read More <span
                                                    class="fa fa-angle-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News Style One-->
                    <div class="news-style-one">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="clearfix">
                                <!--Image Column-->
                                <div class="image-column pull-right col-md-6 col-sm-6 col-xs-12">
                                    <figure class="image-box"><a href="blog-single.html"><img
                                                    src="images/resource/blog-image-2.jpg" alt=""></a></figure>
                                </div>
                                <!--Content Column-->
                                <div class="content-column pull-left col-md-6 col-sm-6 col-xs-12">
                                    <div class="content-box">
                                        <div class="post-cat"><a href="index.html#">Business</a></div>
                                        <h3><a href="blog-single.html">Our Expertise is earned through our
                                                experience.</a></h3>
                                        <div class="post-meta">
                                            <ul class="clearfix">
                                                <li><a href="index.html#"><span class="fa fa-calendar"></span> Dec 15,
                                                        2016</a></li>
                                                <li><a href="index.html#"><span class="fa fa-commenting-o"></span> 15
                                                        Comments</a></li>
                                            </ul>
                                        </div>
                                        <div class="text">Etiam eu molestie eros, commodo hendrerit sapien. Maecenas
                                            tempus leo ac nisi iaculis porta...
                                        </div>
                                        <a class="read-more" href="blog-single.html">Read More <span
                                                    class="fa fa-angle-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <!--News Style One-->
                    <div class="news-style-one">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <figure class="image-box"><a href="blog-single.html"><img
                                            src="images/resource/blog-image-3.jpg" alt=""></a></figure>
                            <div class="content-box">
                                <div class="post-cat"><a href="index.html#">Money</a></div>
                                <h3><a href="blog-single.html">We Are help you to Grow your Business Of company.</a>
                                </h3>
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><a href="index.html#"><span class="fa fa-calendar"></span> Dec 05, 2016</a>
                                        </li>
                                        <li><a href="index.html#"><span class="fa fa-commenting-o"></span> 23
                                                Comments</a></li>
                                    </ul>
                                </div>
                                <div class="text">Etiam eu molestie eros, commodo hendrerit sapien. Maecenas tempus leo
                                    ac nisi iaculis porta...
                                </div>
                                <a class="read-more" href="blog-single.html">Read More <span
                                            class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!--View More Btn-->
            <div class="view-more text-center"><a href="blog.html" class="theme-btn btn-style-three">View More</a></div>

        </div>
    </section>


    <!--Get Quote Section-->
    <section class="get-quote-section" style="background-image:url(images/background/image-5.jpg);">
        <div class="auto-container">

            <!--Quote Form-->
            <div class="default-form quote-form wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="small-title"><h3>Обратный звонок </h3></div>

                <form method="post" action="contact.html">
                    <div class="row clearfix">

                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="fname" value="" placeholder="Имя " required>
                        </div>

                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="lname" value="" placeholder="Фамилия " required>
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <input type="email" name="email" value="" placeholder="Email" required>
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <input type="text" name="email" value="" placeholder="Телефон" required>
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea name="message" placeholder="Discuss with financial expert" required></textarea>
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="theme-btn btn-style-three">Отправить</button>
                        </div>

                    </div>
                </form>
            </div><!--End Quote Form-->

        </div>
    </section>


@endsection

@section('scripts')
    <script src="js/jquery-ui.js"></script>
    <script src="js/revolution.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/script.js"></script>
@endsection