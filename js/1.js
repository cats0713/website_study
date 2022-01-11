this.onclick = function(e){
  console.log(e.terget);}

function func(){
  console.log("gg");
}
//this.func();

function userFunc(){
  if(window === this){
    console.log("ok");
  }
}
//userFunc();

let userO = {
  func: function(){
    if(userO === this){
      console.log("o === this");
    }
  }
}
//userO.func();

let funcThis = null;
function Func(){
  funcThis = this;
}
let userO1 = Func(); //null => undifind

if(funcThis === window){
  console.log("window");
}

let userO2 = new Func();
if(funcThis === userO2){
  console.log("userO2");
}

