<div class="container-fluid banner">
        <img src="<?= IMAGES_URL ?>/banner.png" alt="banner" />
    </div>



    <p style="text-align: center; margin: 15px;"> </p>
    <div class="wrapper">
        <section class="container sweeties">
            <h3 class="title">Search for: <b><?= $data['search'] ?></b></h3>
            <div class="sweeties__items">
                <?php if (!empty($data['cakes'])) : ?>
                    <?php foreach ($data['cakes'] as $index => $cake) : ?>
                        <div class="sweeties__item">
                            <img src="<?= IMAGES_URL ?>/cakes/<?= $cake['image'] ?>" alt="cake" class="sweeties__item-image" />
                            <a href="#/*" class="sweeties__item-name line-clamp-2"><?= $cake['name'] ?></a>
                            <div class="sweeties__item-prices">
                                <div class="sweeties__item-price"><?= $cake['price'] ?>đ</div>
                                <div class="sweeties__item-original-price"><?= $cake['price'] ?>đ</div>
                            </div>
                            <button onclick="addToCart(<?= isset($_SESSION['user']) ?  $_SESSION['user']['id'] : 0 ?>, <?= $cake['id'] ?>)" class="btn btn--secondary">Add to cart +</button>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p style="transform: translateX(180%);">Không tìm thấy</p>

                <?php endif; ?>

            </div>

            <!-- <div class="paging-numbers noselect">
                <img class="paging__left-arrow" src="http://localhost:81/MVC/public/icon/left-arrow.svg" alt="left-arrow" />
                <div class="paging-number">1</div>
                <div class="paging-number paging-number-active">2</div>
                <div class="paging-number">3</div>
                <div class="paging-number">4</div>
                <div class="paging-number">5</div>
                <img class="paging__right-arrow" src="http://localhost:81/MVC/public/icon/right-arrow.svg" alt="right-arrow" />
            </div> -->
        </section>
    </div>