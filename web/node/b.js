var total = 0;

for(var x = 2; x < process.argv.length; x++){
    total = total + Number(process.argv[x]);
};

console.log(total);