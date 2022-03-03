const expressU = require("express");
const app = expressU();

app.use(expressU.static('myfiles'));
app.get('/',(req,res)=>{
  res.send("hello cat");
});
app.get('/di',(req,res)=>{
  let lis = '';
  for(let i=0;i<5;i++){
    lis += '<li>아름다운 코딩</li>'
  }
  let time = Date();
  let output = `<!DOCTYPE html>
  <html lang="ko">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>img1</title>
  </head>
  <body>
    <ul>
      ${lis}
    </ul>
    <p>${time}</p>
  </body>
  </html>`;
  res.send(output);
});
app.get('/img1',(req,res)=>{
  res.sendFile(__dirname + '/html/1.html');
});
app.get('/img2',(req,res)=>{
  res.sendFile(__dirname + '/html/2.html');
});
app.get('/desc',(req,res)=>{
  res.sendFile(__dirname + '/html/desc.html');
});
app.listen(2000,()=>{
  console.log("2000 open");
});