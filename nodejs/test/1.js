const http = require('http'); //노드 객체 가져오기

const hostname = '127.0.0.1'; //내 컴퓨터 주소
const port = 2000;

http.createServer((req, res) => { // 요청이 들어오면 응답해줘
  res.writeHead(200, { 'Content-Type': 'text/plain' }); //html의 헤드값을 넣어준다.
  res.end('Hello World\n'); //마지막 응답에 할 행닝
//체이닝(아래)
}).listen(port, hostname, () => { 
  console.log(`Server running at http://${hostname}:${port}/`);
});