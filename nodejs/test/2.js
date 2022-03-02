let ws = require("express");
let app = ws(); //무조건 실행하고 받아서 쓴다.
app.get('/',(req,res)=>{
  res.send(`hello ${app}`);
});
app.listen(2000,function(){
  console.log("open server");
});
