PDO连接数据库的三种方式<br>
		1.通过参数 $dsn="mysql:host=localhost;dbname=imooc";<br>
		2.通过uri $dsn="uri:file://xx/xx/dsn.txt";<br>
		3.通过配置文件 在PHP.ini中加入一行pdo.dsn.数据源名称（自定义） = "mysql:host=localhost;dbname=imooc"，
		重启服务器，然后在php中$dsn='在php配置文件中定义的数据源'

pdo对象的方法
		exec()  执行sql 返受影响的行数--- 增删改
		query()  执行sql 返回PDOStatement对象--查询
		preoare()  预处理
		execute（） 执行预处理
		quote()  返回一个添加引号的字符串
		lastInsertId 最后插入的id
		setAttribute() 设置数据库连接属性
		getAttribute()
		errorCode() 上一次操作相关的sqlstate
		errorInfo()
		
		rowCount()  受影响的行数 ，对于查询返回结果集中的条数，对于增删改操作返回受影响的行数
			建议使用PDO预处理来防止注入
		fetch()    从结果集中获取一行
		fetchAll()  结果集中所有行的数组
		setFetchMode()  设置获取模式
		fetchColumn()  从结果集中的下一行返回单独的一列
		fetchObject() 获取下一行
		bindParam() 绑定参数到指定的变量名
		bindValue()  绑定值
		
		//prepare($sql) 准备SQL语句<br>
		$stmt = $pdo->prepare($sql);//只要执行预处理语句就会涉及一个新的对象$stmt,该对象有自己的方法，当然$pdo也是一个对象<br>
		//execute() 执行预处理语句<br>
		$res = $stmt->execute();//这里没有参数的<br>
		//fetch 取出一条结果集,fetchAll,取出多条结果集，都是以数组形式展现<br>
		$row = $stmt->fetch(PDO::FETCH_ASSOC);//
		
		设置默认获取语句的显示模式，默认索引+关联都有，
		PDO::FETCH_ASSOC为关联
		PDO::FETCH_NUM为索引
		PDO::FETCH_BOTH都有
		设置方式有两种
		1. 直接在fetch或fetchAll方法中传参
		2. 使用stmt对象的setFetchMode方法
		
		//创建PDO对象时 通过第四个参数来设置PDO的Attribute属性
		//options = array(PDO::ATTR_AUTOCOMMIT);
		header('content-type:text/html;charset=utf-8');
		try {
		$dsn = 'mysql:host=localhost;dbname=imooc';
		$username = 'root';
		$password = '1993';
		$options = array(PDO::ATTR_AUTOCOMMIT=>0);
		$pdo = new PDO($dsn,$username,$password,$options);
		echo $pdo->getAttribute(PDO::ATTR_AUTOCOMMIT);
		//设置数据库的连接模式

		} catch (PDOException $e) {
		echo $e-getMessage();
		}

		1.PDO::setAttribute：
		bool PDO::setAttribute ( int $attribute , mixed $value )
		『参考：http://php.net/manual/zh/pdo.setattribute.php』
		2.PDO::getAttribute
		mixed PDO::getAttribute ( int $attribute )
		『参考：http://php.net/manual/zh/pdo.getattribute.php』
		PDO::ATTR_AUTOCOMMIT
		PDO::ATTR_CASE
		PDO::ATTR_CLIENT_VERSION
		PDO::ATTR_CONNECTION_STATUS
		PDO::ATTR_DRIVER_NAME
		PDO::ATTR_ERRMODE
		PDO::ATTR_ORACLE_NULLS
		PDO::ATTR_PERSISTENT
		PDO::ATTR_PREFETCH
		PDO::ATTR_SERVER_INFO
		PDO::ATTR_SERVER_VERSION
		PDO::ATTR_TIMEOUT

防止SQL注入
		占位符的两种方式
		1.使用命名参数形式 如 'select * from user where username = :username and password = :password',不用加引号，在执行的时候传入一个数组分别代表占位符如$stmt->execute(array(':username'=>$username,':password'=>$password)),会把key和占位符对应并附上最终的值达到防注入效果
		2.使用？号占位符
		这个就比较简单直接吧命名参数改成?号就行，执行的时候数组是这样的$stmt->execute(array($username,$password))
		
		$sql ="INSERT user(username,password) VALUES(?,?)";<br><br>
		$stmt = $pdo->prepare($sql);<br><br>
		//对应着问号的序数来绑定，从1开始<br><br>
		$stmt->bindParam(1,$username);<br><br>
		$stmt->bindParam(2,$password);<br><br>
		//绑定完 设置参数<br><br>
		$username ="imooc";$password = "imooc";<br><br>
		$stmt -> execute();<br><br>
		<br><br>
		2.<br>
		$sql="INSERT user(username,password,email) VALUES(:username,:password,:email)";<br>
		$stmt=$pdo->prepare($sql);	<br>
		$stmt->bindParam(":username",$username,PDO::PARAM_STR);//第三个参数表示传入的变量$username的格式为字符串，默认为PDO::PARAM_STR<br>
		$stmt->bindParam(":password",$password,PDO::PARAM_STR);<br>
		$stmt->bindParam(":email",$email);<br>
		$username='imooc1';<br>
		$password='imooc1';<br>
		$email='imooc1@imooc.com';<br>
		<br>
		3.绑定参数后execute函数就不需要传入参数了<br>
		4.rowCount增删改操作时返回值为受影响行数，查询操作时返回查询结果集的行数 exec()执行的返回值也是受影响的行数

bindParam和bindValue区别
		bindParam第二个参数必须是变量，不能是固定值
		bindValue第二个参数变量或者固定都可以，如果某个值固定不变则可以使用固定方式，第二次执行可以不用添加，相当于给此字段值设置了常量
		$stmt->bindParam(":username",$username);
		$stmt->bindParam(":username",'test');
		$stmt->bindParam(1,$username);
		$stmt->bindParam(1,'test');

		$sql='SELECT username,password,email FROM user';
		$stmt=$pdo->prepare($sql);
		$stmt->execute();
		echo '结果集中的列数一共有：'.$stmt->columnCount();
		echo '<hr/>';
		print_r($stmt->getColumnMeta(0));//返回一些数据库列的相关信息
		echo '<hr/>';
		$stmt->bindColumn(1, $username);
		$stmt->bindColumn(2,$password);
		$stmt->bindColumn(3, $email);//绑定列
		while($stmt->fetch(PDO::FETCH_BOUND)){
		echo '用户名：'.$username.'-密码：'.$password.'-邮箱：'.$email.'<hr/>';
		}
		
PDO三种错误处理模式
		1.静默模式 PDO::ERRMODE_SLIENT
		2.警告模式 PDO::ERRMODE_WARNING
		3.异常模式 PDO::ERRMODE_EXCEPTION （推荐）
		可以通过$pdo->setAttribute(PDO::ATTR_ERRMODE,相应的模式（可以是数字）)

//PDO事务思路<br>
		1.数据库引擎为INNODB<br>
		2.关闭 数据库的自动提交功能 $options=array(PDO::ATTR_AUTOCOMMIT,0);
		3.开启一个事务
		4.操作要么全部正确，要么全部失败，失败要回滚事务
		5.提交事务处理

		header('content-type:text/html;charset=utf-8');
		try{
		$dsn='mysql:host=localhost;dbname=imooc';
		$username='root';
		$passwd='root';
		$options=array(PDO::ATTR_AUTOCOMMIT,0);
		$pdo=new PDO($dsn, $username, $passwd, $options);
		var_dump($pdo->inTransaction());
		//开启事务
		$pdo->beginTransaction();
		var_dump($pdo->inTransaction());
		//$sql='UPDATE userAccount SET money=money-2000 WHERE username="imooc"';
		$sql='UPDATE userAccount SET money=money-2000 WHERE username="imooc"';

		$res1=$pdo->exec($sql);
		if($res1==0){
		throw new PDOException('imooc 转账失败');
		}
		$res2=$pdo->exec('UPDATE userAccount SET money=money+2000 WHERE username="king1"');
		if($res2==0){
		throw new PDOException('king 接收失败');
		}
		//提交事务
		$pdo->commit();
		}catch(PDOException $e){
		//回滚事务
		$pdo->rollBack();
		echo $e->getMessage();
		}














