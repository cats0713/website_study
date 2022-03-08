const express = require("express");
const myApp = express();
const mySql = require("mysql");
const dbInfo = require("./inc/db.js");

const dbHandle = mySql.createConnection(dbInfo);

dbHandle.connect();

myApp.get('/', function (req, res) {
  dbHandle.query('select * from Persons', function (err, rows) {
    let myString = 'The solution is:';

	res.send(myString + rows);
  });
});

myApp.listen(2000, function () {
  console.log("2000 open");
});
