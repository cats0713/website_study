function DivPrototype(boxWidth, boxHeight, backColor){
  this.boxWidth = boxWidth;
  this.boxHeight = boxHeight;
  this.backColor = backColor;
  this.boxDiv = `<div style="width: "${boxWidth}rem;"></div>`;
  this.boxDivFunc = function(){
  }
  this.changeDisplay = function(inDisplay){
  }
  }

  this.chageShow = function(showUnseen){
    switch(showUnseen){
      case 'show': document.querySelector('#mbox').innerHTML = this.boxDiv; break;
      case 'none':    break;
    }
  }

//let userBox = new DivPrototype(12,123, 'red');
//userBox.changeShow('show');

const userStr = ['A','B','C'];

let pushValue = (a) => { console.log(a); }

pushValue("D");
