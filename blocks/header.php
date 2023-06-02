<div class="header">

  <div class="header__contact">
    <div class="header__contact-container container-fluid row">
      <div class="header__contact-container-left">
        <div class="left__phone" id="head__contact">
          <a href="tell:+842873001439">
            <img src="../resource/contact-phone.png" alt="">
          </a>
          <a href="tell:+842873001439">028 7300 1439</a>
        </div>
        <div class="left__mail" id="head__contact">
          <a href="mailto:docs@saasvn.com">
            <img src="../resource/contact-mail.png" alt="" />
          </a>
          <a href="mailto:docs@saasvn.com">docs@saasvn.com</a>
        </div>
      </div>

      <div class="header__contact-container-social">
        <div class="head-contact_social-twitter">
          <a href="">
            <img src="../resource/twitter-icon.png" alt="" />
          </a>
        </div>
        <div class="head-contact_social-fb">
          <a href="">
            <img src="../resource/fb-icon.png" alt="" />
          </a>
        </div>
        <div class="head-contact_social-linkedin">
          <a href="">
            <img src="../resource/linkedin-icon.png" alt="" />
          </a>
        </div>
        <div class="head-contact_social-ggplus">
          <a href="">
            <img src="../resource/ggplus-icon.png" alt="" />
          </a>
        </div>
      </div>

      <div class="header__contact-container-lang">
        <img src="../resource/lang-icon.png" alt="" />
        <span>Language</span>
        <img src="../resource/down-white.png" alt="" />
      </div>
    </div>
  </div>
</div>

<div class="sticky">
  <div class="header__nav row">
    <div class="header__nav-burger">
      <img src="../resource/burger-menu.png" alt="">
    </div>
    <div class="header__nav-logo">
      <img src="../resource/logo-saas.png" alt="" />
    </div>

    <div class="header__nav-navbar" id="header__nav">
      <div class="drop">
        <img src="../resource/home-icon.png" alt="" />
        <a href="/"><strong>ABOUT US</strong></a>
        <img src="../resource/down-black.png" alt="" />

        <div class="dropdown">
          <div>
            <a href="/"><strong>SERVICES</strong></a>
            <img src="../resource/down-black.png" alt="" />
          </div>
          <div>
            <a href="/"><strong>NEWS</strong></a>
            <img src="../resource/down-black.png" alt="" />
          </div>
          <div>
            <a href="/"><strong>SUPPORT</strong></a>
            <img src="../resource/down-black.png" alt="" />
          </div>
          <div>
            <a href="/"><strong>CONTACT</strong></a>
          </div>
          <div>
            <a href="/"><strong>TRACKING</strong></a>
          </div>
          <div>
            <a href="/"><strong>ENQUIRY</strong></a>
          </div>
        </div>
      </div>
    </div>

    <?php
    $menuItem = [
      ['label' => 'ABOUT US', 'url' => '/'],
    ];
    ?>

    <div class="header__nav-user">
      <div class="head-nav_user-search">
        <img class="b" src="../resource/search.png" alt="" />
      </div>
      <div class="head-nav_user-user px-3">
        <img class="b" src="../resource/user.png" alt="" />
      </div>
    </div>
  </div>
</div>

<script>
  window.addEventListener('scroll', function() {
    var headerNav = document.querySelector('.sticky');
    var scrollPosition = window.pageYOffset;

    if (scrollPosition > 0) {
      headerNav.classList.add('scroll');
    } else {
      headerNav.classList.remove('scroll');
    }
  });
</script>