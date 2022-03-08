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
  myString = "Value :" + req.query.q + "/" + req.query.name +"<br>"; 
  res.send(myString);
});

app.listen(2000, function(){
  console.log('2000 open');
});
