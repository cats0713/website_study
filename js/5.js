let userCan = document.querySelector("#userCan");
let ctx = userCan.getContext("2d");

//ctx.fillStyle = "#ff0000"; //채우기 색상
//ctx.fillRect(10,10,180,80); // (x,y,x크기,y크기)크기 지정
ctx.moveTo(0,0);
ctx.lineTo(200,100);
ctx.stroke();