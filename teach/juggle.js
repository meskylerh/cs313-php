var http = require("http");
var url1 = process.argv[2];
var url2 = process.argv[3];
var url3 = process.argv[4];

var

http.get(url, function (response) {
  response.on('data', function (chunk) {
    body += chunk
  })
  response.on('end', function () {
    console.log(body.length)
    console.log(body)
  })
})