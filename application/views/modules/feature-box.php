<section class="feature-boxes">
    <div class="container">
        <?php if(isset($featureboxes)): ?>
            <h3 class="row-title title-center">Как получить недвижимость в рассрочку?</h3>
            <div class="row">
                <?php foreach($featureboxes as $featurebox): ?>
                    <div class="feature-box col-lg-4 col-md-6 col-sm-12">
                        <div class="box-image">
                            <img src="<?php echo $featurebox['image']; ?>" alt="">
                        </div>
                        <div class="box-content">
                            <div class="box-title">
                                <?php echo $featurebox['title']; ?>
                            </div>
                            <div class="box-text">
                                <?php echo $featurebox['text']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
