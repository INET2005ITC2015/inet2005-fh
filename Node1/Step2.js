var args = process.argv.slice(2);

var sum = args.reduce(function(acc, curr){
    return +acc + +curr
});
console.log(sum);