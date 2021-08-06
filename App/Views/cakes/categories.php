<div class="container-fluid banner">
        <img src="<?= IMAGES_URL ?>/banner.png" alt="banner" />
    </div>


    <div class="wrapper">
        <section class="container sweeties">
            <h3 class="title"><?= $data['type'] ?></h3>
            <div class="sweeties__items">
                <?php if (!empty($data['cakeOfType'])) : ?>
                    <?php foreach ($data['cakeOfType'] as $index => $cakeOfType) : ?>
                        <div class="sweeties__item">
                            <img src="<?= IMAGES_URL ?>/cakes/<?= $cakeOfType['image'] ?>" alt="cake" class="sweeties__item-image" />
                            <a href="#/*" class="sweeties__item-name line-clamp-2"><?= $cakeOfType['name'] ?></a>
                            <div class="sweeties__item-prices">
                                <div class="sweeties__item-price"><?= $cakeOfType['price'] ?>đ</div>
                                <div class="sweeties__item-original-price"><?= $cakeOfType['price'] ?>đ</div>
                            </div>
                            <button class="btn btn--secondary">Add to cart +</button>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>

                    <p style="transform: translateX(190%);">Hêt hàng</p>

                <?php endif; ?>

            </div>

            <div class="paging-numbers noselect">
                <a <?= $data['page'] <= 1 ? 'onclick="event.preventDefault()"' : '' ?> href="<?= DOCUMENT_ROOT . "/cakes/categories?id=" . $data['id'] . "&type=" . $data['type'] . "&page=" . ($data['page'] - 1)  ?>">
                    <img class="paging__left-arrow <?= $data['page'] <= 1 ? "paging__disable" : "" ?>" src="http://localhost:81/MVC/public/icon/left-arrow.svg" alt="left-arrow" />
                </a>
                <!-- <div class="paging-number">1</div>
                <div class="paging-number paging-number-active">2</div>
                <div class="paging-number">3</div>
                <div class="paging-number">4</div>
                <div class="paging-number">5</div> -->
                <?php $num = ceil($data["cakeOfPage"] / 8); ?>
                <?php for ($i = 1; $i <= $num; $i++) : ?>
                    <a href="<?= DOCUMENT_ROOT . "/cakes/categories?id=" . $data['id'] . "&type=" . $data['type'] . "&page=" . $i ?>">
                        <li class="paging-number <?= $i == $data['page'] ? "paging-number-active" : ""  ?>"><?= $i ?></li>
                    </a>
                <?php endfor; ?>
                <a <?= $data['page'] >= $num ? 'onclick="event.preventDefault()"' : '' ?> href="<?= DOCUMENT_ROOT . "/cakes/categories?id=" . $data['id'] . "&type=" . $data['type'] . "&page=" . ($data['page'] + 1) ?>">
                    <img class="paging__right-arrow <?= $data['page'] >= $num ? "paging__disable" : "" ?>" src="http://localhost:81/MVC/public/icon/right-arrow.svg" alt="right-arrow" />
                </a>
            </div>
        </section>
    </div>