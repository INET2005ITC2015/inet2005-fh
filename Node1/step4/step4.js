var fs = require("fs");

var newLineFile = fs.readFile(process.argv[2], function(err, data){
 if (err){
     return console.error(err);
      }
    else {
     console.log(data.toString().match(/\n/g).length);
 }
});


