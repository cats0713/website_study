

// ctx.beginPath();
// ctx.arc(95,50,40,Math.PI*1.5,2*Math.PI);
// ctx.stroke();

// ctx.font = "100px Dongle";
// ctx.fillStyle = "pink";
// ctx.textAlign = "center";
// ctx.fillText("안녕",canvars.width/2,canvars.height/2);;
// ctx.strokeText("안녕",canvars.width/2,canvars.height/2);

window.onload = function() {
  let canvars = document.querySelector("#canvarsId");
  let ctx = canvars.getContext("2d");
  var img = document.querySelector("#scream");
  ctx.drawImage(img, 10, 10);
};

