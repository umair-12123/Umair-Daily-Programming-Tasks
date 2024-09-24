var alphates = ['a', 'b', 'c', 123 ];
var alphates = ['a', 'b', 'c', 123 ];

console.log(alphates[0]);
//find length of array
console.log(alphates[alphates.length-1])
for(var i=0; i<alphates.length; i++){
    console.log(alphates[i]);
}
//fo in loop
for(var elements in alphates){
    console.log(alphates[elements]);
    console.log(alphates);//return just index number
}
//for in loop
for(var elements of alphates){
    //console.log(alphates[elements]); nno need for print
    console.log(elements);// provide elements name;
}
//for earch

alphates.forEach(function(elements, index, array){
    console.log(elements );
    // console.log(elements + "index" + index);
});
// fat arrow 
