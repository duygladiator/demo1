$(document).ready(function () {
  jsonFile = "./db.json";
  $.ajax({
    url: jsonFile,
    dataType: "json",
    success: function (data) {
      var card = $("#card");

      $.each(data.card, function (index, item) {
        var cardTitle = item.cardTitle;
        var cardIcon = item.cardIcon;
        var imgUrl = item.imgUrl;

        var cardHTML = '<div class="card-wrap">';
        cardHTML += '<div class="card">';
        cardHTML += '<div class="card-head">';
        cardHTML +=
          '<img src="' + imgUrl + '" class="card-img-top" alt="..." />';
        cardHTML += '<div class="overlay"></div>';
        cardHTML += '<div class="learn-more"><a href="">LEARN MORE</a></div>';
        cardHTML += "</div>";
        cardHTML += '<div class="card-body">';
        cardHTML += '<img src="' + cardIcon + '" alt="" />';
        cardHTML +=
          '<h6 class="card-title"><a href="">' + cardTitle + "</a></h6>";
        cardHTML += "</div></div></div>";

        card.append(cardHTML);
      });

      // media section
      var media = $("#media__card");

      $.each(data.media, function (index, item) {
        var title = item.title;
        var imgUlr = item.imgUrl;
        var icoUlr = item.iconUrl;
        var ico1Ulr = item.icon1Url;
        var desc = item.desc;

        var mediaHTML = '<div class="card-outer"><div class="card">';
        mediaHTML +=
          '<img src="' + imgUlr + '" class="card-img-top" alt="..." />';
        mediaHTML += '<div class="card-body">';
        mediaHTML += '<h5 class="card-title"><a href="">' + title + "</a></h5>";
        mediaHTML += "<div><span>";
        mediaHTML += '<img class="card-ico" src="' + icoUlr + '" alt="" />';
        mediaHTML += "<p>Lorem Ipsum </p>";
        mediaHTML += '<img class="card-ico" src="' + ico1Ulr + '" alt="" />';
        mediaHTML += "<p>12/05/2023</p>";
        mediaHTML += "</span></div>";
        mediaHTML += '<p class="card-text"> ' + desc + " </p>";
        mediaHTML += "</div></div></div>";

        media.append(mediaHTML);
      });
      // media carousel
      $(document).ready(function () {
        $(".media-carousel").owlCarousel({
          loop: true,
          margin: 24,
          nav: true,
          navText: [
            "<i class='fa-solid fa-chevron-left'></i>",
            "<i class='fa-solid fa-chevron-left fa-rotate-180'></i>",
          ],
          autoplay: true,
          autoplayTimeout: 2000,
          autoplayHoverPause: true,
          items: 3,
          responsive: {
            0: {
              items: 1,
            },
            600: {
              items: 2,
            },
            866: {
              items: 3,
            },
            1000: {
              items: 3,
            },
          },
        });
      });
      // end media carousel
      // end media section

      // highlight-section
      var video = $("#video");

      $.each(data.heroSection, function (index, item) {
        var vid = item.video;

        var videoHTML = '<img src="' + vid + '" alt="" />';

        video.append(videoHTML);
      });
      // end highlight-section

      // hero-img
      var heroImg = $(".hero-img");

      $.each(data.heroImg, function (index, item) {
        var img = item.img;

        var heroHTML = '<img src="' + img + '" alt=""/>';

        heroImg.append(heroHTML);
      });
      // loop carousel
      $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
          loop: true,
          margin: 10,
          nav: true,
          dots: false,
          rewind: true,
          autoplay: true,
          autoplayTimeout: 3000,
          smartSpeed: 1500,
          autoplayHoverPause: true,
          responsive: {
            0: {
              items: 1,
            },
            600: {
              items: 1,
            },
            1000: {
              items: 1,
            },
          },
        });
      });
      // end hero-img
      // end highlight-section
    },
    error: function (xhr, status, error) {
      console.log("Error:", error);
    },
  });
});

// mmenu

// $("nav#menu").mmenu();

// end mmenu
