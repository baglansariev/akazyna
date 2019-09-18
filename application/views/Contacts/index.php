<?php echo $header; ?>
    <main>
        <?php echo $page_title; ?>
        <section class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="contacts col-lg-6 col-md-12">
                        <h3 class="row-title">Наши контакты</h3>
                        <p class="contact-adress">
                            <span>Мы находимся по адресу:</span>
                            <span>160000 РК, г.Шымкент, ул. Капал батыра 123 (5 км)</span>
                        </p>
                        <p class="contact-info">
                            <i class="fas fa-phone-volume"></i>
                            <span>+7 (7252) 43-90-20</span>
                        </p>
                        <p class="contact-info">
                            <i class="fas fa-mobile-alt"></i>
                            <span>+7 (702) 111-44-66</span>
                        </p>
                        <p class="contact-info">
                            <i class="fas fa-envelope"></i>
                            <span>pioner-elit@mail.ru</span>
                        </p>
                    </div>
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
                </div>
                <div class="adress-map">
                    <h3 class="row-title">Мы на карте</h3>
                    <iframe src="https://yandex.ua/map-widget/v1/?um=constructor%3A1f11c8508c91c9967db90dce4a1c466432236ae7b2f801ed6e4435914e5f5f86&amp;source=constructor" frameborder="0"></iframe>
                </div>
            </div>
        </section>
    </main>
<?php echo $footer; ?>