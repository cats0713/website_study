window.onload = () => {
  let imgarray = ['https://t1.daumcdn.net/cfile/tistory/9946A4505F5817A60D','https://img1.daumcdn.net/thumb/R1280x0.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/aYgW/image/0XjnP-dFfoNchvBU81_hNDt_eXA.jpg','https://t1.daumcdn.net/cfile/blog/2467034A533391F616'];

  let i = 0;
  let slideImg = () =>{
    setTimeout(function(){
      $("#img1").attr('src',imgarray[i]);

      i++;
      if(i >= 3){
        i=0;
      }
      slideImg();
    },3000);
  }
  slideImg();
}