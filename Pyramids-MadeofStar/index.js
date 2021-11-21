let i = 9;
let count = 1;
for(let a = i;a >0;a--) {
    console.log(spaceIteration(a));
}

function spaceIteration(a){
    let context="";
    for(let x =1;x<a;x++) {
        context+=" ";
    }
    for(let s = 1;s <= count;s++) {
        context+="⭐️";
    }
    count=count+1;
    return context
}