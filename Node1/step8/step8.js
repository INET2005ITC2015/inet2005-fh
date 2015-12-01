http = require("http");

concat = require("concat-stream");

http.get(process.argv[2], function(response) {
    response.setEncoding('utf8');
    response.on('error', function (err) {
        return console.error(err);
    });

 var concatBuffer = concat(function(textBuffer) {
     console.log(textBuffer.length);
     console.log(textBuffer);
 });

response.pipe(concatBuffer);

 });