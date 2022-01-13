let userBox1 = document.querySelector("#userBox1");
let userBox2 = document.querySelector("#userBox2");
let userBox3 = document.querySelector("#userBox3");
let divBox = document.querySelectorAll("div>div");

window.onclick = function(e){
  switch (e.target){
    case divBox[0]: alert(1); break;
    case divBox[1]: alert(2); break;
    case divBox[2]: alert(3); break;
  }
}

/*userBox1.onclick = function(){
  alert("1번 박스");
}
userBox2.onclick = function(){
  alert("2번 박스");
}
userBox3.onclick = function(){
  alert("3번 박스");
}*/