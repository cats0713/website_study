window.onload = function () {

  function CaptObj(color,canvasID) { //캡챠 객체 만들기
    this.fontColor = color;
    this.canvasID = canvasID;
    this.randomNumber = '';
    this.generateRandom = function () {
      this.randomNumber = Math.floor(Math.random() * 9000) + 1000;
      return this.randomNumber;
    }
    this.insertHTML = function (idValue) {
      let idVal = document.querySelector(idValue);
      idVal.innerHTML = `<canvas width="100" height="40" id="${canvasID}"></canvas>`;

      let captValue = document.querySelector(`#${canvasID}`);
      let myPen = captValue.getContext("2d");

      // 캡쳐 출력
      myPen.font = "20px D2Coding";
      myPen.fillStyle = this.fontColor;
      myPen.textAlign = "center";
      myPen.fillText(this.randomNumber, captValue.width / 2, captValue.height / 2 + 7);
    }
  }

  let myCap1 = new CaptObj('black',"userCanvas");
  let randomCapt = myCap1.generateRandom();
  myCap1.insertHTML("#textBox");
  //console.log(myCap1.generateRandom(), myCap1.fontColor);
  let myCap2 = new CaptObj('black',"userCanvas2");
  let randomCapt2 = myCap2.generateRandom();
  myCap2.insertHTML("#textBox2");



  let userBtn = document.querySelector("#userBtn");
  let userInfo = {
    'id': 'q',
    'pass': 'q123'
  };

  userBtn.addEventListener("click", function () {
    //console.log("a");
    let userID = document.querySelector("#userID").value;
    let userPass = document.querySelector("#userPass").value;
    let userCC = document.querySelector("#userCC").value;
    let loginStaus = "ok";


    (userInfo.id == userID) || (loginStaus = "err_ID");
    (userInfo.pass == userPass) || (loginStaus = "err_PASS");
    (randomCapt == userCC) || (loginStaus = "err_CC");

    switch (loginStaus) {
      case "err_ID":
        alert("ID를 확인하세요");
        break;
      case "err_PASS":
        alert("PASS를 확인하세요");
        break;
      case "err_CC":
        alert("CC를 확인하세요");
        break;
      case "ok":
        location.href = "https://naver.com";
        break;

    }


  });



};