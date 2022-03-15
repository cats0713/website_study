const { text } = require('express');
const url = require('url'); //url
let http = require('http'); //http
let fs = require('fs'); // file 관리
let dt = require('./myDateTime'); //내가만든 모듈 불러오기

http.createServer(function (req, res) {
  // res.writeHead(200, { 'Content-Type': 'text/html', 'charset': 'utf-8' });
  // res.write("date : " + dt.myDateTime() + "<br>");
  // res.write(req.url);

  // let q = url.parse(req.url, true).query;
  // let text = `size : ${q.size} color : ${q.color}`;
  // res.end(text);

  // fs.readFile('main.html', function (err, data) {
  //   let myData = data;
  //   res.write(myData);
  //   res.end();
  // });

  // fs.appendFile('file.txt','Hello content!',function(err){
  //   if(err) throw err;
  //   console.log('save');
  // });
  
  // fs.rename('file.txt','test.txt',function(err){
  //   if (err) throw err;
  //   console.log("rename");
  // });

  // fs.unlink('test.txt', function(err){
  //   if (err) throw err;
  //   console.log('File deleted!');
  // });

  let q = url.parse(req.url, true);
  let fileName = `.${q.pathname}`;
  fs.readFile(fileName,function(err,data){
    if(err){
      res.writeHead(404, {'Content-Type': 'text/html'});
      res.write("404 err");
    }
    res.writeHead(404, {'Content-Type': 'text/html'});
    res.write(data);
    return res.end();
  });
}).listen(2000, function () {
  console.log("2000 open");
});
