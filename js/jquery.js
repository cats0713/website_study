window.onload = () => {
  let Num1 = $("#Num1");
  Num1.css("color", "red");
  $(Num2).css("font-size", "100px");
  $(Num3).html("hello");

  //$("div p").html("hello").css("color","red");

  let tag1 = $("#tag1");
  console.log(tag1.prop("href"));
  console.log(tag1.attr('href'));

  let tag2 = $(".tag2");
  console.log(tag2.attr("checked"));
  console.log(tag2.prop("checked"));

  //$( "p", "div").css("color","blue");
  // 자식 부모
  // $( "div p").css("color","blue");
  //css 표기

  $("#Num1").find('.red').css("color","red");








}