window.onload=()=>{
  $("input").on("click",function(e){
    
    let $this = $(e.target);
    switch($this.attr('id')){
      case 'fadeout':
        $("#target").fadeOut('slow');
        break;
      case 'fadein':
        $("#target").fadeIn("fast");
        break;
      case 'hide':
        $("#target").hide();
        break;
      case 'show':
        $("#target").show();
        break;
      case 'slidedown':
        $("#target").hide().slideDown("slow");
        break;
      case 'slideup':
        $("#target").slideUp("slow");
        break;
    }
  });




}