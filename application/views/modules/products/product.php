<section class="product-info">
    <div class="container">
        <?php if(isset($product_main_info)): ?>
            <?php foreach ($product_main_info as $product):?>
                <div class="row">
                    <div class="product-info-image col-lg-6 col-md-12">
                        <img src="<?php echo $product['image'];?>" alt="">
                    </div>
                    <div class="product-specifies col-lg-6 col-md-12">
                        <h1 class="product-info-title">
                            <?php echo $product['name'];?>
                        </h1>
                        <p class="product-info-type">
                            <?php echo $product['type'];?>
                        </p>
                        <?php if(isset($product_options)): ?>
                            <div class="product-option-block">
                                <?php foreach($product_options as $option): ?>
                                    <p class="product-option">
                                        <span class="option-title">
                                            <?php echo $option['name'] ?>:
                                        </span>
                                        <span class="option-value">
                                            <?php echo $option['value'] ?>
                                        </span>
                                    </p>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if(isset($product_packages)): ?>
                            <div class="product-package-block">
                                <?php foreach($product_packages as $package): ?>
                                    <p class="product-package">
                                        <span class="package-title">
                                            <?php echo $package['name'] ?>:
                                        </span>
                                        <span class="package-value">
                                            <?php foreach($package['values'] as $value): ?>
                                                <i>
                                                    <?php echo $value['package_value'] ?>
                                                </i>
                                            <?php endforeach; ?>
                                        </span>
                                    </p>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="product-full-desc col-lg-12">
                        <p class="full-desc-title">
                            Описание продукта
                        </p>
                        <p class="full-desc-text">
                            <?php echo $product['desc'] ?>
                        </p>
                    </div>
                </div>
            <?php endforeach;?>
        <?php endif; ?>
    </div>
</section>