const express = require("express");
const app = express();

app.locals.pretty = true;
app.set('view engine', 'pug');
app.set('views','./pugfiles');

app.use(express.static('IMG'));

app.get('/time', function(req,res) {
  res.render('temp', {time:Date(), title: 'Jade'});
});
app.get('/option',function(req,res){
  //이름은 내맘대로 정할수있나봐
  // myString = "Value :" + req.query.q + "/" + req.query.name +"<br>"; 
  myString = req.query.shoe; 
  res.send(myString);
});

app.get('/test1',function(req,res){
  let nameList = ['one','two','three'];
  let string = `${nameList[req.query.select]} ${req.query.id}`;
  res.send(string);
});

app.get('/product',function(req,res){
  let productInfo = ['상품설명1','상품설명2','상품설명3','상품설명4'];
  let head = `<a href="/product?pro=0">상품1</a> <a href="/product?pro=1">상품2</a> 
  <a href="/product?pro=2">상품3</a> <a href="/product?pro=3">상품4</a>`;
  let myString = `${head} <br> ${productInfo[req.query.pro]}`
  res.send(myString);
});

app.get('/product2',function(req,res){
  let productInfo = ['상품설명1','상품설명2','상품설명3','상품설명4'];
  let productImg = ['cat1.jpg','cat2.jpg','cat3.png','cat4.jpg'];
  let mySting = `<!DOCTYPE html>
  <html lang="ko">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상품 소개</title>
    <link rel="stylesheet" href="product.css"> 
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="/product2?pro=0">상품1</a></li>
        <li><a href="/product2?pro=1">상품2</a></li>
        <li><a href="/product2?pro=2">상품3</a></li>
        <li><a href="/product2?pro=3">상품4</a></li>
      </ul>
    </nav>
    
    <main>
      <section>
      <h1>${productInfo[req.query.pro]}</h1>
      <img src="/product/${productImg[req.query.pro]}" alt="고양이">
    </section>
  </main>
</body>
</html>`;
  res.send(mySting); 
});

app.listen(2000, function(){
  console.log('2000 open');
});
