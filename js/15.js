window.onload=()=>{
  const arr = [
    {tilte:'다음', url : 'http://daum.net'},
    {title: '네이버',url: 'http://naver.com'}
  ];
  
  $.each(arr,function(i,v){
    let result = '';
    result += i +' : ' + v.title + ', ' + v.url; 
    console.log(result); 
  });

  const obj = {daum: 'http://daum.net', naver:'http://naver.com'};

  $.each(obj,function(i,v){
    let result = '';
    result += `${i} : ${v}`
    console.log(result);
  });


  $('.list li').each(function(i,v){
    $(v).addClass(`li_0${i}`);
  });



}
