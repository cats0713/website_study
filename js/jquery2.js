window.onload=()=>{
  $('.target').before("<div>before<div>");
  $('.target').after(`<div id="red">after<div>`);
  $('.target').append("<div>a<div>");
  $('.target').prepend("<div>p<div>");

  $(".target").on("click",function(){
    $("#red").empty();
    $("#red").remove();
  });

  $(".AAA").on("click",function(){
    $(".AAA").replaceWith(`<div id="BBB">BBB</div>`);
  });

  $("#navga li").on("click",function(){
    // $("#navga li").removeClass('s');
    // $(this).addClass("s");
    $(this).toggleClass("s");
  });











}
