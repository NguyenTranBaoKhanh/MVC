<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&family=Poppins:wght@100;200;300;400&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/reset.css" />
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/base.css" />
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/header.css" />
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/home.css" />
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/footer.css" />

    <!-- <link rel="stylesheet" href="http://localhost:81/MVC/public/css/normalize.css"> -->
</head>

<body>

    <?php require_once(VIEW . '/share/header.php'); ?>



    <div class="container-fluid banner">
        <img src="<?= IMAGES_URL ?>/banner.png" alt="banner" />
    </div>



    <p style="text-align: center; margin: 15px;">Search for: <b><?= $data['search'] ?></b> </p>
    <div class="wrapper">
        <section class="container sweeties">
            <h3 class="title">Sweeties</h3>
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
                            <button class="btn btn--secondary">Add to cart +</button>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Không tìm thấy</p>

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


    <?php require_once(VIEW . '/share/footer.php'); ?>


    <div class="container-fluid footer__copyright">
        <p>Copyright © 2021 NGUYEN TRAN BAO KHANH</p>
    </div>

    <script src="<?= PUBLIC_URL ?>/js/app.js"></script>
    <script src="<?= PUBLIC_URL ?>/js/slider.js"></script>

</body>

</html>