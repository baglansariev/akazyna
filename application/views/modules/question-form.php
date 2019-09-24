<section class="question-form">
    <div class="container">
        <h3 class="row-title title-center">Задать свой вопрос</h3>
        <div class="row">
            <form>
                <div class="alert alert-success" role="alert">
                    A simple success alert—check it out!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-danger" role="alert">
                    A simple danger alert—check it out!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Ф.И.О.</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Ф.И.О.">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail">E-mail</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="E-mail">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPhone">Телефон</label>
                        <input type="text" class="form-control question-phone" id="inputPhone" placeholder="Телефон">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCaptcha">Задача</label>
                        <input type="number" class="form-control" id="inputCaptcha" placeholder="3 х 3 = ?">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputQuestion">Ваш вопрос</label>
                    <textarea name="question" class="form-control" id="inputQuestion" placeholder="Ваш вопрос"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>
    </div>
</section>