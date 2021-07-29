<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&family=Poppins:wght@100;200;300;400&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="./public/css/reset.css" />
  <link rel="stylesheet" href="./public/css/base.css" />
  <link rel="stylesheet" href="./public/css/header.css" />
  <link rel="stylesheet" href="./public/css/home.css" />
  <link rel="stylesheet" href="./public/css/footer.css" />

  <!-- <link rel="stylesheet" href="./public/css/normalize.css"> -->
</head>

<body>
  <div class="wrapper">
    <div class="container">
      <header class="header">
        <a href=""><img class="header__logo noselect" src="./public/img/logo.png" alt="logo" /></a>
        <div class="header__menu">
          <a class="header__menu__item" href="">Home</a>
          <a class="header__menu__item" href="">Cakes</a>
          <a class="header__menu__item" href="">About</a>
        </div>
        <div class="header__search">
          <button class="header__search__button noselect">
            <img src="./public/icon/search.png" alt="search" />
          </button>
          <input type="text" placeholder="search..." name="search" id="search" />
        </div>
        <div class="header__info">
          <div class="header__cart noselect">
            <img src="./public/icon/cart.svg" alt="cart" />
            <span class="header__cart__count">10</span>
          </div>

          <div class="header__user">
            <div class="header__user__avatar noselect">
              <img src="./public/img/user.jpg" alt="user" />
              <div class="header__user__dropdown">
                <ul>
                  <li><a href="#/">Profile</a></li>
                  <li><a href="#/">Setting</a></li>
                  <li><a href="#/">More</a></li>
                  <li><a href="#/">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="header__menu-mobile">
            <label for="">
              <img class="header__menu-mobile-icon" src="./public/icon/menu-mobile.svg" alt="menu bar" />
            </label>

            <!-- <div class="header__menu-mobile-show">
                            <ul>
                                <li>Home</li>
                                <li>Cakes</li>
                                <li>About</li>
                                <li>Search</li>
                                <li>Profile</li>
                                <li>Setting</li>
                                <li>More</li>
                                <li>Logout</li>
                            </ul>
                        </div> -->
          </div>
        </div>
      </header>
    </div>
  </div>

  <div class="container-fluid banner">
    <img src="./public/img/banner.png" alt="banner" />
  </div>

  <div class="wrapper">
    <section class="container category">
      <h3 class="category__title title">Experience Flavours</h3>
      <ul class="category__items">
        <a href="#/*">
          <li class="category__item">
            <img class="category__item-image" src="./public/img/categories/blackforest.jfif" alt="cake" />
            <div class="category__item-name">BlackForest</div>
            <div class="category__item-description">
              The all time Favourite
            </div>
          </li>
        </a>
        <a href="#/*">
          <li class="category__item">
            <img class="category__item-image" src="./public/img/categories/blackforest.jfif" alt="cake" />
            <div class="category__item-name">BlackForest</div>
            <div class="category__item-description">
              The all time Favourite
            </div>
          </li>
        </a>
        <a href="#/*">
          <li class="category__item">
            <img class="category__item-image" src="./public/img/categories/blackforest.jfif" alt="cake" />
            <div class="category__item-name">BlackForest</div>
            <div class="category__item-description">
              The all time Favourite
            </div>
          </li>
        </a>
        <a href="#/*">
          <li class="category__item">
            <img class="category__item-image" src="./public/img/categories/blackforest.jfif" alt="cake" />
            <div class="category__item-name">BlackForest</div>
            <div class="category__item-description">
              The all time Favourite
            </div>
          </li>
        </a>
        <a href="#/*">
          <li class="category__item">
            <img class="category__item-image" src="./public/img/categories/blackforest.jfif" alt="cake" />
            <div class="category__item-name">BlackForest</div>
            <div class="category__item-description">
              The all time Favourite
            </div>
          </li>
        </a>
        <a href="#/*">
          <li class="category__item">
            <img class="category__item-image" src="./public/img/categories/blackforest.jfif" alt="cake" />
            <div class="category__item-name">BlackForest</div>
            <div class="category__item-description">
              The all time Favourite
            </div>
          </li>
        </a>
        <a href="#/*">
          <li class="category__item">
            <img class="category__item-image" src="./public/img/categories/blackforest.jfif" alt="cake" />
            <div class="category__item-name">BlackForest</div>
            <div class="category__item-description">
              The all time Favourite
            </div>
          </li>
        </a>
        <a href="#/*">
          <li class="category__item">
            <img class="category__item-image" src="./public/img/categories/blackforest.jfif" alt="cake" />
            <div class="category__item-name">BlackForest</div>
            <div class="category__item-description">
              The all time Favourite
            </div>
          </li>
        </a>
      </ul>
    </section>
  </div>

  <section class="container-fluid best-seller-background">
    <div class="wrapper">
      <section class="container best-seller">
        <img class="best-seller__left-arrow" src="./public/icon/left-arrow.svg" alt="left-arrow" />
        <img class="best-seller__right-arrow" src="./public/icon/right-arrow.svg" alt="right-arrow" />
        <h3 class="title">Best Seller</h3>
        <div class="best-seller__item">
          <div class="best-seller__item-image">
            <img src="./public/img/cakes/8.3.jpg" alt="cake" />
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
        <div class="sweeties__item">
          <img src="./public/img/cakes/13.1.jpg" alt="cake" class="sweeties__item-image" />
          <a href="#/*" class="sweeties__item-name line-clamp-2">Heart Cake</a>
          <div class="sweeties__item-prices">
            <div class="sweeties__item-price">250000đ</div>
            <div class="sweeties__item-original-price">300000đ</div>
          </div>
          <button class="btn btn--secondary">Add to cart +</button>
        </div>
        <div class="sweeties__item">
          <img src="./public/img/cakes/13.1.jpg" alt="cake" class="sweeties__item-image" />
          <a href="#/*" class="sweeties__item-name line-clamp-2">Heart Cake</a>
          <div class="sweeties__item-prices">
            <div class="sweeties__item-price">250000đ</div>
            <div class="sweeties__item-original-price">300000đ</div>
          </div>
          <button class="btn btn--secondary">Add to cart +</button>
        </div>
        <div class="sweeties__item">
          <img src="./public/img/cakes/13.1.jpg" alt="cake" class="sweeties__item-image" />
          <a href="#/*" class="sweeties__item-name line-clamp-2">Heart Cake</a>
          <div class="sweeties__item-prices">
            <div class="sweeties__item-price">250000đ</div>
            <div class="sweeties__item-original-price">300000đ</div>
          </div>
          <button class="btn btn--secondary">Add to cart +</button>
        </div>
        <div class="sweeties__item">
          <img src="./public/img/cakes/13.1.jpg" alt="cake" class="sweeties__item-image" />
          <a href="#/*" class="sweeties__item-name line-clamp-2">Heart Cake</a>
          <div class="sweeties__item-prices">
            <div class="sweeties__item-price">250000đ</div>
            <div class="sweeties__item-original-price">300000đ</div>
          </div>
          <button class="btn btn--secondary">Add to cart +</button>
        </div>
        <div class="sweeties__item">
          <img src="./public/img/cakes/13.1.jpg" alt="cake" class="sweeties__item-image" />
          <a href="#/*" class="sweeties__item-name line-clamp-2">Heart Cake</a>
          <div class="sweeties__item-prices">
            <div class="sweeties__item-price">250000đ</div>
            <div class="sweeties__item-original-price">300000đ</div>
          </div>
          <button class="btn btn--secondary">Add to cart +</button>
        </div>
        <div class="sweeties__item">
          <img src="./public/img/cakes/13.1.jpg" alt="cake" class="sweeties__item-image" />
          <a href="#/*" class="sweeties__item-name line-clamp-2">Heart Cake</a>
          <div class="sweeties__item-prices">
            <div class="sweeties__item-price">250000đ</div>
            <div class="sweeties__item-original-price">300000đ</div>
          </div>
          <button class="btn btn--secondary">Add to cart +</button>
        </div>
        <div class="sweeties__item">
          <img src="./public/img/cakes/13.1.jpg" alt="cake" class="sweeties__item-image" />
          <a href="#/*" class="sweeties__item-name line-clamp-2">Heart Cake</a>
          <div class="sweeties__item-prices">
            <div class="sweeties__item-price">250000đ</div>
            <div class="sweeties__item-original-price">300000đ</div>
          </div>
          <button class="btn btn--secondary">Add to cart +</button>
        </div>
        <div class="sweeties__item">
          <img src="./public/img/cakes/13.1.jpg" alt="cake" class="sweeties__item-image" />
          <a href="#/*" class="sweeties__item-name line-clamp-2">Heart Cake</a>
          <div class="sweeties__item-prices">
            <div class="sweeties__item-price">250000đ</div>
            <div class="sweeties__item-original-price">300000đ</div>
          </div>
          <button class="btn btn--secondary">Add to cart +</button>
        </div>
      </div>

      <div class="paging-numbers noselect">
        <img class="paging__left-arrow" src="./public/icon/left-arrow.svg" alt="left-arrow" />
        <div class="paging-number">1</div>
        <div class="paging-number paging-number-active">2</div>
        <div class="paging-number">3</div>
        <div class="paging-number">4</div>
        <div class="paging-number">5</div>
        <img class="paging__right-arrow" src="./public/icon/right-arrow.svg" alt="right-arrow" />
      </div>
    </section>
  </div>

  <footer class="container footer">
    <img src="./public/img/logo.png" alt="logo" class="footer__logo" />
    <div class="footer__lists">
      <ul class="footer__list">
        <h6>Categories</h6>
        <a href="">
          <li>Chocolate</li>
        </a>
        <a href="">
          <li>Fruit</li>
        </a>
        <a href="">
          <li>Exotic</li>
        </a>
        <a href="">
          <li>Strawberry</li>
        </a>
        <a href="">
          <li>Vanilla</li>
        </a>
      </ul>

      <ul class="footer__list">
        <h6>About</h6>
        <a href="">
          <li>Chocolate</li>
        </a>
        <a href="">
          <li>Fruit</li>
        </a>
      </ul>

      <ul class="footer__list">
        <h6>Social</h6>
        <div class="footer__list_social--icon">
          <a href=""><img src="./public/icon/facebook.svg" alt="facebook" /></a>
          <a href=""><img src="./public/icon/github.svg" alt="github" /></a>
          <a href=""><img src="./public/icon/linkedin.svg" alt="link" /></a>
        </div>
      </ul>
    </div>
  </footer>
  <div class="container-fluid footer__copyright">
    <p>Copyright © 2021 NGUYEN TRAN BAO KHANH</p>
  </div>
</body>

</html>