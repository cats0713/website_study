const express = require("express");
const app = express();

app.locals.pretty = true;
app.set('view engine', 'pug');
app.set('views','./pugfile');
app.use(express.static('img'));
app.get('/',(req,res)=>{
  res.sendFile(__dirname+'/html/home.html');
});
app.get('/cat1',(req,res)=>{
  res.render('img',{'tilte': 'cat1' , 'time':'2022-03-03', 'imgSrc' : 'cat3.png'});
});
app.get('/cat2',(req,res)=>{
  res.render('img',{'tilte': 'cat2' , 'time':'2022-05-13', 'imgSrc' : 'cat4.jpg'});
});
app.listen(2000,()=>{
  console.log("2000 open");
});

