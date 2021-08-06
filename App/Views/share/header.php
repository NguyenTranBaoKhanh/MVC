<div class="wrapper">
  <div class="container">
    <header class="header">
      <a href=""><img class="header__logo noselect" src="<?= IMAGES_URL ?>/logo.png" alt="logo" /></a>
      <div class="header__menu">
        <a class="header__menu__item" href="<?= DOCUMENT_ROOT ?>">Home</a>
        <a class="header__menu__item" href="<?= DOCUMENT_ROOT ?>/cakes">Cakes</a>
        <a class="header__menu__item" href="">About</a>
      </div>
      <div class="header__search">
        <button class="header__search__button noselect">
          <img src="http://localhost:81/MVC/public/icon/search.png" alt="search" />
        </button>

        <form action="<?= DOCUMENT_ROOT ?>/cakes/search" method="get">
          <input type="text" placeholder="search..." name="keyword" id="search" />
        </form>

      </div>
      <div class="header__info">
        <div class="header__cart noselect">
          <img src="http://localhost:81/MVC/public/icon/cart.svg" alt="cart" />
          <span class="header__cart__count">10</span>
        </div>

        <?php if (isset($_SESSION['user'])) : ?>

          <div class="header__user">
            <div class="header__user__avatar noselect">
              <img src="<?= PUBLIC_URL . "/uploads/avt/" . $_SESSION['user']['avatar'] ?>" alt="user" />
              <div class="header__user__dropdown">
                <ul>
                  <li><a href="#/">Profile</a></li>
                  <li><a href="#/">Setting</a></li>
                  <li><a href="#/">More</a></li>
                  <li><a href="<?= DOCUMENT_ROOT. "/account/signout" ?>">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>

        <?php else : ?>

          <a href="<?= DOCUMENT_ROOT ?>/account"><button class="btn btn--primary">Login</button></a>

        <?php endif; ?>

        <div class="header__menu-mobile">
          <label for="">
            <img class="header__menu-mobile-icon" src="http://localhost:81/MVC/public/icon/menu-mobile.svg" alt="menu bar" />
          </label>

          <!-- <div class="header__menu-mobile-show">
                            <ul>
                                <li>Home</li>
                                <li>Cakes</li>
                                <li>About</li>
                                <li>Search</li>
                                <li>Profile</li>
    
                                <li>More</li>
                                <li>Logout</li>
                            </ul>
                        </div> -->
        </div>
      </div>
    </header>
  </div>
</div>