window.onload = () => {
  $(".navMenuBox>li").hover(function () {
    $(".lnb").stop().slideDown();
  }, function () {
    $(".lnb").stop().slideUp();
  });

  let currentImg = 0;
  let imgSlide = () => {
    // console.log(currentImg);
    setTimeout(() => {
      switch (currentImg) {
        case 0:
          $(".img2").fadeOut();
          $(".img3").fadeOut();
          currentImg++;
          break;
        case 1:
          $(".img2").fadeIn();
          $(".img3").fadeOut();
          currentImg++;
          break;
        case 2:
          $(".img3").fadeIn();
          $(".img2").fadeOut();
          currentImg = 0;
          break;
      }

      imgSlide();
    }, 1000);
  };
  imgSlide();


  $("#gongBtn").on("click", () => {
    $("#gongBtn").addClass("clicked");
    $("#potoBtn").removeClass("clicked");
    $(".noticeList").css("visibility", "visible");
    $(".potoList").css("visibility", "hidden");

  });
  $("#potoBtn").on("click", () => {
    $("#gongBtn").removeClass("clicked");
    $("#potoBtn").addClass("clicked");
    $(".noticeList").css("visibility", "hidden");
    $(".potoList").css("visibility", "visible");
  });


}