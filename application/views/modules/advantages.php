<div class="advantages container">
    <div class="row">
        <?php foreach($advantages as $advantage): ?>
            <div class="advantage-col col-lg-4 col-md-6 col-sm-12">
                <div class="advantage">
                    <div class="advantage-image" style="background-image: url('<?php echo $advantage['image'] ?>')"></div>
                    <div class="advantage-content">
                        <p class="advantage-title">
                            <?php echo $advantage['title'] ?>
                        </p>
                        <p class="advantage-text">
                            <?php echo $advantage['text'] ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>