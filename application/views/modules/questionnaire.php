<?php if(isset($questions)): ?>
    <section class="questionnaire">
        <div class="container">
            <h3 class="row-title">Часто задаваемые вопросы</h3>
            <div class="row">
                <div class="accordion">
                    <?php foreach($questions as $question): ?>
                        <div class="acc">
                            <div class="accordion-head">
                        <span class="acc-plus">
                            <i class="fas fa-plus"></i>
                        </span>
                                <span class="acc-minus">
                            <i class="fas fa-minus"></i>
                        </span>
                                <p class="accordion-title"><?php echo $question['client_text']; ?></p>
                            </div>
                            <div class="accordion-body">
                                <p class="accordion-text">
                                    <?php if(isset($question['question_date'])): ?>

                                    <?php endif; ?>
                                    <span class="accordion-date"><?php echo $question['question_date']; ?></span>
                                    <?php echo $question['answer']; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>