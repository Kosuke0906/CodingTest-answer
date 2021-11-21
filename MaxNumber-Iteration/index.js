let A=68;
for(let i = 1;i<=A;i++) {
    if(i%2==0){
        let num=i;
        let count = 0;
        while(num%2==0) {
            num=num/2;
            count++;
        }
        console.log(i+"は2で"+count+"回割れます");
    }
}