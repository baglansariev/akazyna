<?php echo $header; ?>
<?php echo $main_slide; ?>
<?php echo $featureboxes; ?>
<section class="about-intro">
    <div class="container">
        <h3 class="row-title"><?php echo $local_about_intro_row_title; ?></h3>
        <div class="row">
            <div class="about-intro-content col-lg-6 col-sm-12">
                <p class="about-intro-text">
                    <?php echo $local_about_intro_text; ?>
                </p>
                <a href="/about" class="about-intro-button gen-btn main-btn"><?php echo $local_about_intro_button; ?></a>
            </div>
            <div class="about-intro-video col-lg-6 col-sm-12">
                <div>
                    <iframe src="https://www.youtube.com/embed/X95cd7EpLzU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo $call_to_action; ?>
<?php echo $questionnaire; ?>
<?php echo $latest_news; ?>
<?php echo $payers_video; ?>
<?php echo $payers_counter; ?>
<?php echo $footer; ?>