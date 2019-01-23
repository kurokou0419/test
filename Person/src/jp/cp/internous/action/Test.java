package jp.cp.internous.action;

public class Test {


	public static void main(String[]args){
		Person taro=new Person();
		taro.name="山田太郎";
		taro.age=20;
		taro.phoneNumber="090-0000-0000";
		taro.address="東京";

		System.out.println(taro.name);
		System.out.println(taro.age);
		System.out.println(taro.phoneNumber);
		System.out.println(taro.address);
		taro.talk();
		taro.walk();
		taro.run();

		Person jiro=new Person();
		jiro.name="木村次郎";
		jiro.age=18;
		jiro.phoneNumber="080-0000-0000";
		jiro.address="宮崎";

		System.out.println(jiro.name);
		System.out.println(jiro.age);
		System.out.println(jiro.phoneNumber);
		System.out.println(jiro.address);

		Person hanako=new Person();
		hanako.name="鈴木花子";
		hanako.age=16;
		hanako.phoneNumber="070-0000-0000";
		hanako.address="神奈川";

		System.out.println(hanako.name);
		System.out.println(hanako.age);
		System.out.println(hanako.phoneNumber);
		System.out.println(hanako.address);
		
		
		Robot kikai=new Robot();
		kikai.name="aibo";
		kikai.talk();
		kikai.walk();
		kikai.run();
		
		Robot kikai2=new Robot();
		kikai2.name="asimo";
		kikai2.talk();
		kikai2.run();
		kikai2.walk();
		
		Robot kikai3=new Robot();
		kikai3.name="pepper";
		kikai3.talk();
		kikai3.walk();
		kikai3.run();
		
		
		
		



	}

}
