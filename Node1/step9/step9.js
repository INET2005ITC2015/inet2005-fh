var http = require('http')

var urls = process.argv.slice(2);
var strs = [];
var counter = 0;
function work(id){
    http.get(urls[id], function(res){
        res.setEncoding('utf8');
        var allData = "";
        counter++;
        res.on('data', function(data){
            allData += data;
        });
        res.on('end', function(){
            counter--;
            strs[id] = allData;
            if(counter === 0)
                print();
        })
    }).on('error', function(e){
        console.log("error:" + e.message);
    })
}
for(var i = 0; i < urls.length; i++){
    work(i)
}

function print(){
    for(var i = 0; i < strs.length; i++)
        console.log(strs[i])
}