const express = require("express");
const app = express();

app.locals.pretty = true; //pug는 줄이 붙여서 나오니까 렌더링 결과를 엔터키 해주기
app.set('view engine','pug'); //pug를 설정해준다
app.set('views','./pugfile');
app.use(express.static('myfiles'));
app.get('/pugtest',(req,res)=>{
  res.render('1',{'time':Date(), 'title':'Jade'});
});

app.get('/',(req,res)=>{
  res.send("hello welcome home");
});
app.listen(2000,()=>{
  console.log("2000 open");
});