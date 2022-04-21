const request = require("request");

request('http://www.google.com',function(e,r,b) {
  console.log(b);
});

