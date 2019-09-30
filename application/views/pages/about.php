<?php echo $header; ?>
<main>
    <?php echo $page_title; ?>
    <section class="about-cooperative">
        <div class="container">
            <h3 class="row-title"><?php echo $local_about_cooperative_title; ?></h3>
            <div class="about-cooperative-content row">
                <div class="about-cooperative-text col-lg-12">
                    <p><?php echo $local_about_cooperative_text; ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="whats-cooperative">
        <div class="container">
            <h3 class="row-title title-center"><?php echo $local_whats_cooperative_title; ?></h3>
            <div class="row">
                <div class="whats-cooperative-text col-lg-6 col-md-12"><?php echo $local_whats_cooperative_text; ?></div>
                <div class="col-lg-6 col-md-12">
                    <div class="whats-cooperative-image">
                        <img src="/public/images/cooperative.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cooperative-goal">
        <div class="container">
            <h3 class="row-title"><?php echo $local_cooperative_goal_title; ?></h3>
            <p class="cooperative-goal-text"><?php echo $local_cooperative_goal_text; ?></p>
        </div>
    </section>
    <section class="cooperative-pros">
        <div class="container">
            <h3 class="row-title"><?php echo $local_cooperative_pros_title; ?></h3>
            <div class="row">
                <div class="pros-text col-lg-6 col-md-12">
                    <ul>
                        <?php foreach($local_cooperative_pros_list as $cooperative_pros): ?>
                            <li><?php echo $cooperative_pros; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <p><?php echo $local_cooperative_pros_text; ?></p>
                </div>
                <div class="pros-img col-lg-6 col-md-12">
                    <div class="image">
                        <img src="/public/images/pros.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cooperative-move">
        <div class="container">
            <h3 class="row-title title-center"><?php echo $local_cooperative_move_title; ?></h3>
            <div class="row">
                <div class="cooperative-move-text col-lg-6 col-md-12"><?php echo $local_cooperative_move_text; ?></div>
                <div class="col-lg-6 col-md-12">
                    <div class="cooperative-move-image">
                        <img src="/public/images/cooperative2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php echo $footer; ?>