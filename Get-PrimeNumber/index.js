let array = [3,7,45,1,6,75,85,24,11,87,43];
		// TODO 自動生成されたメソッド・スタブ
//		Question 素数を抽出するプログラムを作成しましょう。パラメータはint型の配列で入力されます。
//		要素数は入力者の任意です。
for(let i = 0;i<array.length;i++) {
    if(!judgePrime(i)) {
        console.log(array[i]);
    }
}

function judgePrime(i) {
    for(let a = 2;a<=array[i]/2;a++) {
        if(array[i]%a==0) {
            return true;
        }
    }
    return false;
}