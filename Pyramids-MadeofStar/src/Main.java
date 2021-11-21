
public class Main {

	public static void main(String[] args) {
		// TODO 自動生成されたメソッド・スタブ
//		Qestion ９段の星（⭐：この星を利用してください️）で出来たピラミッドを作成しましょう。
		int i = 9;
		int count = 1;
		for(int a = i;a >0;a--) {
			for(int x =1;x<a;x++) {
				System.out.print(" ");
			}
			for(int s = 1;s <= count;s++) {
				System.out.print("⭐️");
			}
			count=count+1;
			System.out.println();
		}
	}

}
