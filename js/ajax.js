$(document).ready(function () {
  jsonFile = "./data.json";
  $.ajax({
    url: jsonFile,
    dataType: "json",
    success: function (data) {
      var card = $("#card");

      $.each(data.card, function (index, item) {
        var cardTitle = item.cardTitle;
        var cardIcon = item.cardIcon;
        var imgUrl = item.imgUrl;

        var cardHTML = '<div class="col-4">';
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

      var media = $("#media");

      $.each(data.media, function (index, item) {
        var title = item.title;
        var img = item.imgUrl;
        var ico = item.iconUrl;
        var ico1 = item.icon1Url;
        var desc = item.desc;

        var mediaHTML = '<div class="card ">';
        mediaHTML += '<img src="' + img + '" class="card-img-top" alt="..." />';
        mediaHTML += '<div class="card-body">';
        mediaHTML += '<h5 class="card-title"><a href="">' + title + "</a></h5>";
        mediaHTML += "<div><span>";
        mediaHTML += '<img src="' + ico + '" alt="" />';
        mediaHTML += "<strong>Lorem Ipsum - </strong>";
        mediaHTML += '<img src="' + ico1 + '" alt="" />';
        mediaHTML += "<p>12/05/2023</p>";
        mediaHTML += "</span></div>";
        mediaHTML += '<p class="card-text"> ' + desc + " </p>";
        mediaHTML += "</div>";

        media.append(mediaHTML);
      });

      var video = $("#video");

      $.each(data.heroSection, function (index, item) {
        var vid = item.video;

        var videoHTML = '<img src="' + vid + '" alt="" />';

        video.append(videoHTML);
      });

      var heroImg = $("#hero-img");

      $.each(data.heroImg, function (index, item) {
        var img = item.img;

        var heroHTML = '<img src="' + img + '" alt="" />';

        heroImg.append(heroHTML);
      });
    },
    error: function (xhr, status, error) {
      console.log("Error:", error);
    },
  });
});
