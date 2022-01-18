
function DivClass(divWidth = 0, divHeight = 0, divBackgroundColor = 'red', className = 'arrA'){
  this.divWidth = divWidth;
  this.divHeight = divHeight;
  this.divBackgroundColor = divBackgroundColor;
  this.classNeme = className;
  this.divDisplay = function(){ //메소드
    let userDiv = document.querySelector("#userDiv");
    userDiv.innerHTML = `<div id="${this.classNeme}" class="${this.classNeme}">asada</div>`;
  }
  this.divDeco = function(){
    this.classNeme = document.querySelector(`#${this.classNeme}`);
    this.classNeme.style.width = "800px";
    //this.classNeme.style.height = ;
    this.classNeme.style.color = this.divBackgroundColor;
    this.classNeme.style.backgroundColor = 'red';
  }
}

let myDiv = new DivClass(4,2,'pink','arrA');
myDiv.divDisplay();
myDiv.divDeco();
console.log(myDiv.divWidth);

let num = -1;

let kind = num ? (num > 0 ? '양수' : '음수') : '영';
console.log(kind);