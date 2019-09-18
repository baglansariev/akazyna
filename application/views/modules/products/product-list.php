<section class="products">
    <div class="container">
        <h3 class="row-title">Наша продукция</h3>
        <div class="products-list">
            <?php if($products): ?>
                <?php foreach ($products as $product): ?>
                    <div class="product">
                        <a href="/products/flour/<?php echo $product['id'] ?>" class="product-image" style="background-image: url('<?php echo $product['image'] ?>')"></a>
                        <div class="product-content">
                            <a href="/products/flour/<?php echo $product['id'] ?>" class="product-title"><?php echo $product['name'] ?></a>
                            <p class="product-text">
                                <?php echo $product['short_desc'] ?>
                            </p>
                            <a href="/products/flour/<?php echo $product['id'] ?>" class="product-type">
                                <span><?php echo $product['type'] ?></span>
                            </a>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php endif ?>
        </div>
    </div>
</section>