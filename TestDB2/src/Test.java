
public class Test {

	public static void main(String[] args) {
		TestUserDao dao=new TestUserDao();
		dao.select("taro","123");
		dao.selectAll();
		dao.selectByName("taro");
		dao.selectByPassword("123");
		dao.updateUserNameByUserName("taro","saburo");
		dao.insert(4,"shiro","012");
		dao.delete("shiro");

	}

}
