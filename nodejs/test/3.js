let ws = require("express");
let app = ws();

app.get('/',(req,res)=>{
  res.send("hello world");
});

app.get('/join',(req,res)=>{
  res.send('member only');
});
app.listen(2000, ()=>{
  console.log("open");
});