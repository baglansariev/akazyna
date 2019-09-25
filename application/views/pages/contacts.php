<?php echo $header; ?>
    <main>
        <?php echo $page_title; ?>
        <section class="contact-us">
            <div class="container">
                <h3 class="row-title title-center">г. Шымкент</h3>
                <p class="row-subtitle subtitle-to-top">Аль Фарабийский р-он, ул.Байтурсынова 9, 2 этаж, офис 6, (рядом с редакцией «Айғақ»)</p>
                <div class="row">
                    <div class="employee col-lg-4 col-md-6 col-xs-12">
                        <div class="employee-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="employee-content">
                            <p class="employee-name">Айтмамбетов Еркин Мирамханович</p>
                            <p class="employee-status">Председатель</p>
                            <div class="employee-phone">
                                <p class="phone">
                                    <i class="fas fa-mobile-alt"></i>
                                    <span>8 778 238 6161</span>
                                </p>
                                <p class="phone">
                                    <i class="fas fa-mobile-alt"></i>
                                    <span>8 705 285 0505</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="employee col-lg-4 col-md-6 col-xs-12">
                        <div class="employee-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="employee-content">
                            <p class="employee-name">Төкенова Фарида Қалдыбайқызы</p>
                            <p class="employee-status">Менеджер</p>
                            <div class="employee-phone">
                                <p class="phone">
                                    <i class="fas fa-mobile-alt"></i>
                                    <span>+7 702 937 56 55</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="employee col-lg-4 col-md-6 col-xs-12">
                        <div class="employee-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="employee-content">
                            <p class="employee-name">Бертай Асия Бақытқызы</p>
                            <p class="employee-status">Менеджер</p>
                            <div class="employee-phone">
                                <p class="phone">
                                    <i class="fas fa-mobile-alt"></i>
                                    <span>8-775-764-58-88</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <h3 class="row-title title-center">г. Уральск</h3>
                <p class="row-subtitle subtitle-to-top">ул.Кердерi 108, бизнес центр «Камал», 1 этаж, 13 кабинет</p>
                <div class="row">
                    <div class="employee col-lg-4 col-md-6 col-xs-12">
                        <div class="employee-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="employee-content">
                            <p class="employee-name">Калиев Оралбек Кайырбекович</p>
                            <p class="employee-status">Региональный Представитель</p>
                            <div class="employee-phone">
                                <p class="phone">
                                    <i class="fas fa-mobile-alt"></i>
                                    <span>8-702-616-64-90</span>
                                </p>
                                <p class="phone">
                                    <i class="fas fa-mobile-alt"></i>
                                    <span>8-776-616-6490</span>
                                </p>
                                <p class="phone">
                                    <i class="fas fa-mobile-alt"></i>
                                    <span>8-700-616-64-90</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="employee col-lg-4 col-md-6 col-xs-12">
                        <div class="employee-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="employee-content">
                            <p class="employee-name">Бексегуров Атапкел Жанболатович</p>
                            <p class="employee-status">Менеджер</p>
                            <div class="employee-phone">
                                <p class="phone">
                                    <i class="fas fa-mobile-alt"></i>
                                    <span>8-777-565-31-57</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <h3 class="row-title title-center">г. Атырау</h3>
                <p class="row-subtitle subtitle-to-top">Привокзальный Мкр 3 дом 12Б, здание «Султан Би», 3 этаж, 308 офис</p>
                <div class="row">
                    <div class="employee col-lg-4 col-md-6 col-xs-12">
                        <div class="employee-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="employee-content">
                            <p class="employee-name">Кабиев Шынарбек Мугалимович</p>
                            <p class="employee-status">Региональный Представитель</p>
                            <div class="employee-phone">
                                <p class="phone">
                                    <i class="fas fa-mobile-alt"></i>
                                    <span>8-701-514-87-31</span>
                                </p>
                                <p class="phone">
                                    <i class="fas fa-mobile-alt"></i>
                                    <span>8-707-514-87-31</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="feedback contact-us-feedback col-lg-6 col-md-12">
                        <h3 class="row-title">Напишите нам</h3>
                        <form method="post" class="contact-form">
                            <div class="client-data">
                                <input type="text" name="client_name" placeholder="Ф.И.О." required>
                                <input type="text" name="client_number" placeholder="Телефон" class="phone_mask" required>
                            </div>
                            <div class="client-data">
                                <input type="text" name="client_email" placeholder="E-mail" required>
                                <input type="text" name="client_captcha" placeholder="3 x 3 = ?" required>
                            </div>
                            <div class="client-data">
                                <textarea name="client_text" placeholder="Сообщение"></textarea>
                            </div>
                            <input id="contact_send" type="submit" value="Отправить">
                        </form>
                    </div>
                    <div class="adress-map col-lg-6 col-md-12">
                        <h3 class="row-title">Мы на карте</h3>
                        <iframe src="https://yandex.ua/map-widget/v1/?um=constructor%3A9b3157cb562c61c92cacc7ba84539e46928514e2e9036a240526bc3439515d0a&amp;source=constructor" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php echo $footer; ?>