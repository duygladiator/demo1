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
        <button onclick="drop()" class="dropbtn">
          <img src="../resource/lang-icon.png" alt="" />
          Language
          <img src="../resource/down-white.png" alt="" />
        </button>
        <div class="drop-content" id="drop-content">
          <a href="">Tiếng Việt</a>
          <a href="">English</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="sticky">
  <div class="header__nav row">
    <div class="header__nav-burger">
      <button id="showSideBar">
        <i class="fa-solid fa-bars"></i>
      </button>
    </div>
    <div class="header__nav-logo">
      <img src="../resource/logo-saas.png" alt="home" />
    </div>

    <div class="header__nav-navbar" id="header__nav">
      <a href="../index.php">
        <img src="../resource/home-icon.png" alt="" href="" />
      </a>
      <div class="drop" id="menuShow">
        <div class="drop-ele">
          <a href="/">ABOUT US</a>
          <img src="../resource/down-black.png" alt="" />
          <ul class="drop-ele-content">
            <li><a href="">ABOUT US1</a></li>
            <li><a href="">ABOUT US2</a></li>
            <li><a href="">ABOUT US3</a></li>
            <li><a href="">ABOUT US4</a></li>
          </ul>
        </div>

        <div class="dropdown">
          <div class="drop-ele">
            <a href="/">SERVICES</a>
            <img src="../resource/down-black.png" alt="" />
            <ul class="drop-ele-content">
              <li><a href="">SERVICE 1</a></li>
              <li><a href="">SERVICE 2</a></li>
              <li><a href="">SERVICE 3</a></li>
              <li><a href="">SERVICE 4</a></li>
            </ul>
          </div>
          <div class="drop-ele">
            <a href="/">NEWS</a>
            <img src="../resource/down-black.png" alt="" />
            <ul class="drop-ele-content">
              <li><a href="">NEWS 1</a></li>
              <li><a href="">NEWS 2</a></li>
              <li><a href="">NEWS 3</a></li>
              <li><a href="">NEWS 4</a></li>
            </ul>
          </div>
          <div class="drop-ele">
            <a href="/">SUPPORT</a>
            <img src="../resource/down-black.png" alt="" />
            <ul class="drop-ele-content">
              <li><a href="">SUPPORT 1</a></li>
              <li><a href="">SUPPORT 2</a></li>
              <li><a href="">SUPPORT 3</a></li>
              <li><a href="">SUPPORT 4</a></li>
            </ul>
          </div>
          <div>
            <a href="/">CONTACT</a>
          </div>
          <div>
            <a href="/">TRACKING</a>
          </div>
          <div>
            <a href="/">ENQUIRY</a>
          </div>
        </div>
      </div>
    </div>

    <!-- mod header nav -->
    <nav id="sideBar" class="menu">
      <ul>
        <li>
          <a href="../index.php">HOME</a>
        </li>
        <li>
          <a href="">ABOUT US</a>
          <ul class="">
            <li><a href="">ABOUT US1</a></li>
            <li><a href="">ABOUT US2</a></li>
            <li><a href="">ABOUT US3</a></li>
            <li><a href="">ABOUT US4</a></li>
          </ul>
        </li>
        <li>
          <a href="">SERVICES</a>
          <ul class="">
            <li><a href="">SERVICE 1</a></li>
            <li><a href="">SERVICE 2</a></li>
            <li><a href="">SERVICE 3</a></li>
            <li><a href="">SERVICE 4</a></li>
          </ul>
        </li>
        <li>
          <a href="">NEWS</a>
          <ul class="">
            <li><a href="">NEWS 1</a></li>
            <li><a href="">NEWS 2</a></li>
            <li><a href="">NEWS 3</a></li>
            <li><a href="">NEWS 4</a></li>
          </ul>
        </li>
        <li>
          <a href="">SUPPORT</a>
          <ul class="">
            <li><a href="">SUPPORT 1</a></li>
            <li><a href="">SUPPORT 2</a></li>
            <li><a href="">SUPPORT 3</a></li>
            <li><a href="">SUPPORT 4</a></li>
          </ul>
        </li>
        <li>
          <a href="">CONTACT</a>
        </li>
        <li>
          <a href="">TRACKING</a>
        </li>
        <li>
          <a href="">ENQUIRY</a>
        </li>
      </ul>
    </nav>
    <!-- mod header nav -->

    <div class="header__nav-user">
      <div class="head-nav_user-search" id="toggle-search">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="search" name="search" id="searchBar" class="searchBar" placeholder="Search for...">
      </div>
      <div class="head-nav_user-user">
        <i class="fa-regular fa-user"></i>
      </div>
    </div>
  </div>
</div>

<script>
// sticky-top navbar
window.addEventListener('scroll', function() {
  var headerNav = document.querySelector('.sticky');
  var scrollPosition = window.pageYOffset;

  if (scrollPosition > 0) {
    headerNav.classList.add('scroll');
  } else {
    headerNav.classList.remove('scroll');
  }
});
// end sticky-top navbar

// for language selection
// click toggle
function drop() {
  document.getElementById("drop-content").classList.toggle("show");
}

// close when click outside btn
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("drop-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
// end lang selection

// click toggle menu show nav bar
var showSide = document.getElementById("showSideBar");
var sideBar = document.getElementById("sideBar");

showSide.addEventListener('click', function() {
  sideBar.classList.toggle('show');
})
// end click toggle menu show nav bar

// toggle-searchBar
$(document).ready(function() {
  $('#toggle-search').on('click', function(e) {
    if (!$(e.target).is('#searchBar')) {
      $('#searchBar').toggle();
    }
  });
});

$(document).on('click', function(e) {
  if (!$(e.target).closest('#toggle-search').length && !$(e.target).is('#searchBar')) {
    $('#searchBar').hide();
  }
});

$('#searchBar').on('keydown', function(e) {
  if (e.keyCode === 13) { // Enter key code
    e.preventDefault(); // Prevent form submission (if inside a form)
    performSearch();
  }
});

function performSearch() {
  var searchTerm = $('#searchBar').val();
  // Perform search logic using the searchTerm value
  console.log('Searching for:', searchTerm);
}
// end toggle-searchBar
</script>