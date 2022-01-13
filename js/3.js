let userArr = document.querySelectorAll("div>input");
let userResult = document.querySelector("#userResult"); 

console.log(userArr[0].value);

userResult.addEventListener('click',function(){
  //console.log("a");
  userResult.innerHTML = plusCal();
});

function plusCal(){
  return Number(userArr[0].value) + Number(userArr[1].value);
}

function btnListener(e){
  switch(e.target.id){
    case 'userA': console.log('A'); break;
    case 'userB': console.log('B'); break;
  }
}
userArr[0].addEventListener("click", btnListener );
userArr[1].addEventListener("click", btnListener );