let myExpress = require("express");
const path = require("path/posix");
let userApp = myExpress();

userApp.use(myExpress.static('myFiles')); //루트의 위치를 설정 한다.
userApp.get('/',(req,res) => {
  //res.send('hello home');
  // res.send('hello'); //res.send는 두번 못쓴다
  res.sendFile(path.join(__dirname,'myFiles','/1.html')); 
});

userApp.get('/imges',(req,res)=>{
  res.send(`imge, <img src="1.jpg">`);
});
userApp.get('/login',(req,res)=>{
  res.send(`<h1>로그인 페이지</h1><img src="/login/1.jpg">`);
});
userApp.listen(2000,()=>{
  console.log("open");
});