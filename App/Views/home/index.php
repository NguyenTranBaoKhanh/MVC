
<div class="container-fluid banner">
  <img src="<?= IMAGES_URL ?>/banner.png" alt="banner" />
</div>

<div class="wrapper">
  <section class="container category">
    <h3 class="category__title title">Experience Flavours</h3>
    <ul class="category__items">
      <?php foreach ($data['caketypes'] as $index => $caketype) : ?>
        <a href="<?= DOCUMENT_ROOT . "/cakes/categories?id=" . ($index + 1) . "&type=" . $caketype['name'] ?>">
          <li class="category__item ">
            <img class="category__item-image" src="<?= IMAGES_CATEGORY_URL ?>/<?= strtolower(str_replace(' ', '', $caketype['name'])) ?>.jfif" alt="cake" />
            <div class="category__item-name"><?= $caketype['name'] ?></div>
            <div class="category__item-description">
              <?= $caketype['description'] ?>
            </div>
          </li>
        </a>
      <?php endforeach; ?>
      <!-- 
        <a href="#/*">
          <li class="category__item">
            <img class="category__item-image" src="<?= IMAGES_CATEGORY_URL ?>/blackforest.jfif" alt="cake" />
            <div class="category__item-name">BlackForest</div>
            <div class="category__item-description">
              The all time Favourite
            </div>
          </li>
        </a>
        <a href="#/*">
          <li class="category__item">
            <img class="category__item-image" src="<?= IMAGES_CATEGORY_URL ?>/blackforest.jfif" alt="cake" />
            <div class="category__item-name">BlackForest</div>
            <div class="category__item-description">
              The all time Favourite
            </div>
          </li>
        </a>
        <a href="#/*">
          <li class="category__item">
            <img class="category__item-image" src="<?= IMAGES_CATEGORY_URL ?>/blackforest.jfif" alt="cake" />
            <div class="category__item-name">BlackForest</div>
            <div class="category__item-description">
              The all time Favourite
            </div>
          </li>
        </a>
        <a href="#/*">
          <li class="category__item">
            <img class="category__item-image" src="<?= IMAGES_CATEGORY_URL ?>/blackforest.jfif" alt="cake" />
            <div class="category__item-name">BlackForest</div>
            <div class="category__item-description">
              The all time Favourite
            </div>
          </li>
        </a>
        <a href="#/*">
          <li class="category__item">
            <img class="category__item-image" src="<?= IMAGES_CATEGORY_URL ?>/blackforest.jfif" alt="cake" />
            <div class="category__item-name">BlackForest</div>
            <div class="category__item-description">
              The all time Favourite
            </div>
          </li>
        </a>
        <a href="#/*">
          <li class="category__item">
            <img class="category__item-image" src="<?= IMAGES_CATEGORY_URL ?>/blackforest.jfif" alt="cake" />
            <div class="category__item-name">BlackForest</div>
            <div class="category__item-description">
              The all time Favourite
            </div>
          </li>
        </a>
        <a href="#/*">
          <li class="category__item">
            <img class="category__item-image" src="<?= IMAGES_CATEGORY_URL ?>/blackforest.jfif" alt="cake" />
            <div class="category__item-name">BlackForest</div>
            <div class="category__item-description">
              The all time Favourite
            </div>
          </li>
        </a> -->
    </ul>
  </section>
</div>



<section class="container-fluid best-seller-background">
  <div class="wrapper">
    <section class="container best-seller">
      <img class="best-seller__left-arrow" src="http://localhost:81/MVC/public/icon/left-arrow.svg" alt="left-arrow" />
      <img class="best-seller__right-arrow" src="http://localhost:81/MVC/public/icon/right-arrow.svg" alt="right-arrow" />
      <h3 class="title">Best Seller</h3>

      <div class="">

        <div class="best-seller__item slider_item">
          <div class="best-seller__item-image ">
            <img src="<?= IMAGES_URL ?>/cakes/8.3.jpg" alt="cake" />
          </div>
          <div class="best-seller__item-info">
            <div>
              <h6 class="best-seller__item-info__name">
                Snicker Fuse Chocolate Cake
              </h6>
              <p class="best-seller__item-info__description">
                Award yourself with this rich chocolate cake wonderfully crammed with Cadbury Fuse and white chocolate
                chunks and draped lusciously with molten chocolate. This perfect work of art hides in every bite of
                chocolate that is a little nutty and a lot of tasty!
              </p>
            </div>
            <div>
              <div class="best-seller__item-info__price">350000đ</div>
              <div class="best-seller__item-info__original-price">
                400000đ
              </div>
            </div>
            <button class="btn btn--primary">Add to cart +</button>
          </div>
        </div>

      </div>



      <ul class="paging">
        <li class="paging-item"></li>
        <li class="paging-item paging-item-active"></li>
        <li class="paging-item"></li>
        <li class="paging-item"></li>
      </ul>
    </section>
  </div>
</section>



<div class="wrapper">
  <section class="container sweeties">
    <h3 class="title">Sweeties</h3>
    <div class="sweeties__items">

      <?php foreach ($data['cakeOnPage'] as $index => $cake) : ?>
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

    </div>

    <div class="paging-numbers noselect">
      <a <?= $data['page'] <= 1 ? 'onclick="event.preventDefault()"' : '' ?> href="<?= DOCUMENT_ROOT . "/home?page=" . ($data['page'] - 1) ?>">
        <img class="paging__left-arrow <?= $data['page'] <= 1 ? "paging__disable" : "" ?>" src="http://localhost:81/MVC/public/icon/left-arrow.svg" alt="left-arrow" />
      </a>
      <!-- <div class="paging-number">1</div>
        <div class="paging-number paging-number-active">2</div>
        <div class="paging-number">3</div>
        <div class="paging-number">4</div>
        <div class="paging-number">5</div> -->
      <?php $num = ceil($data["numCake"] / 8); ?>
      <?php for ($i = 1; $i <= $num; $i++) : ?>
        <a <?= $i == $data['page'] ? 'onclick="event.preventDefault()"' : '' ?> href="<?= DOCUMENT_ROOT . "/home?page=$i"  ?>">
          <li class="paging-number <?= $i == $data['page'] ? "paging-number-active" : ""  ?>"><?= $i ?></li>
        </a>
      <?php endfor; ?>
      <a <?= $data['page'] == $num ? 'onclick="event.preventDefault()"' : '' ?> href="<?= DOCUMENT_ROOT . "/home?page=" . ($data['page'] + 1) ?>">
        <img class="paging__right-arrow <?= $data['page'] == $num ? "paging__disable" : "" ?>" src="http://localhost:81/MVC/public/icon/right-arrow.svg" alt="right-arrow" />
      </a>
    </div>
  </section>

</div>