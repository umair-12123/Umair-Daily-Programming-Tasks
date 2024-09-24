const $names = ['umair','haroon'];
$names.push('zubair');
console.log($names);
$names.unshift('zubair','ali', 'raza');
console.log($names);
$names.pop();
console.log($names);
$names.shift();
console.log($names);
$names.splice(1, 0, 'zubair');// 1 means new value save in this idex start 0 for delet like as if i want to dele any thing than i replace with 0 and last is addedd new;
console.log($names);
//search specific index and update or delete it
const monthidex = $names.indexOf('ali');
if(monthidex!=-1){
    const update = $names.splice(monthidex,1);
    console.log($names);
    console.log(update);
}else{
    console.log("data not found");
}
if(monthidex!=-1){
    const update = $names.splice(monthidex,Infinity);
    console.log($names);
    console.log(update);
}else{
    console.log("data not found");
}
