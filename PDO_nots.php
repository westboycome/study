PDO�������ݿ�����ַ�ʽ<br>
		1.ͨ������ $dsn="mysql:host=localhost;dbname=imooc";<br>
		2.ͨ��uri $dsn="uri:file://xx/xx/dsn.txt";<br>
		3.ͨ�������ļ� ��PHP.ini�м���һ��pdo.dsn.����Դ���ƣ��Զ��壩 = "mysql:host=localhost;dbname=imooc"��
		������������Ȼ����php��$dsn='��php�����ļ��ж��������Դ'

pdo����ķ���
		exec()  ִ��sql ����Ӱ�������--- ��ɾ��
		query()  ִ��sql ����PDOStatement����--��ѯ
		preoare()  Ԥ����
		execute���� ִ��Ԥ����
		quote()  ����һ��������ŵ��ַ���
		lastInsertId �������id
		setAttribute() �������ݿ���������
		getAttribute()
		errorCode() ��һ�β�����ص�sqlstate
		errorInfo()
		
		rowCount()  ��Ӱ������� �����ڲ�ѯ���ؽ�����е�������������ɾ�Ĳ���������Ӱ�������
			����ʹ��PDOԤ��������ֹע��
		fetch()    �ӽ�����л�ȡһ��
		fetchAll()  ������������е�����
		setFetchMode()  ���û�ȡģʽ
		fetchColumn()  �ӽ�����е���һ�з��ص�����һ��
		fetchObject() ��ȡ��һ��
		bindParam() �󶨲�����ָ���ı�����
		bindValue()  ��ֵ
		
		//prepare($sql) ׼��SQL���<br>
		$stmt = $pdo->prepare($sql);//ֻҪִ��Ԥ�������ͻ��漰һ���µĶ���$stmt,�ö������Լ��ķ�������Ȼ$pdoҲ��һ������<br>
		//execute() ִ��Ԥ�������<br>
		$res = $stmt->execute();//����û�в�����<br>
		//fetch ȡ��һ�������,fetchAll,ȡ�������������������������ʽչ��<br>
		$row = $stmt->fetch(PDO::FETCH_ASSOC);//
		
		����Ĭ�ϻ�ȡ������ʾģʽ��Ĭ������+�������У�
		PDO::FETCH_ASSOCΪ����
		PDO::FETCH_NUMΪ����
		PDO::FETCH_BOTH����
		���÷�ʽ������
		1. ֱ����fetch��fetchAll�����д���
		2. ʹ��stmt�����setFetchMode����
		
		//����PDO����ʱ ͨ�����ĸ�����������PDO��Attribute����
		//options = array(PDO::ATTR_AUTOCOMMIT);
		header('content-type:text/html;charset=utf-8');
		try {
		$dsn = 'mysql:host=localhost;dbname=imooc';
		$username = 'root';
		$password = '1993';
		$options = array(PDO::ATTR_AUTOCOMMIT=>0);
		$pdo = new PDO($dsn,$username,$password,$options);
		echo $pdo->getAttribute(PDO::ATTR_AUTOCOMMIT);
		//�������ݿ������ģʽ

		} catch (PDOException $e) {
		echo $e-getMessage();
		}

		1.PDO::setAttribute��
		bool PDO::setAttribute ( int $attribute , mixed $value )
		���ο���http://php.net/manual/zh/pdo.setattribute.php��
		2.PDO::getAttribute
		mixed PDO::getAttribute ( int $attribute )
		���ο���http://php.net/manual/zh/pdo.getattribute.php��
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

��ֹSQLע��
		ռλ�������ַ�ʽ
		1.ʹ������������ʽ �� 'select * from user where username = :username and password = :password',���ü����ţ���ִ�е�ʱ����һ������ֱ����ռλ����$stmt->execute(array(':username'=>$username,':password'=>$password)),���key��ռλ����Ӧ���������յ�ֵ�ﵽ��ע��Ч��
		2.ʹ�ã���ռλ��
		����ͱȽϼ�ֱ�Ӱ����������ĳ�?�ž��У�ִ�е�ʱ��������������$stmt->execute(array($username,$password))
		
		$sql ="INSERT user(username,password) VALUES(?,?)";<br><br>
		$stmt = $pdo->prepare($sql);<br><br>
		//��Ӧ���ʺŵ��������󶨣���1��ʼ<br><br>
		$stmt->bindParam(1,$username);<br><br>
		$stmt->bindParam(2,$password);<br><br>
		//���� ���ò���<br><br>
		$username ="imooc";$password = "imooc";<br><br>
		$stmt -> execute();<br><br>
		<br><br>
		2.<br>
		$sql="INSERT user(username,password,email) VALUES(:username,:password,:email)";<br>
		$stmt=$pdo->prepare($sql);	<br>
		$stmt->bindParam(":username",$username,PDO::PARAM_STR);//������������ʾ����ı���$username�ĸ�ʽΪ�ַ�����Ĭ��ΪPDO::PARAM_STR<br>
		$stmt->bindParam(":password",$password,PDO::PARAM_STR);<br>
		$stmt->bindParam(":email",$email);<br>
		$username='imooc1';<br>
		$password='imooc1';<br>
		$email='imooc1@imooc.com';<br>
		<br>
		3.�󶨲�����execute�����Ͳ���Ҫ���������<br>
		4.rowCount��ɾ�Ĳ���ʱ����ֵΪ��Ӱ����������ѯ����ʱ���ز�ѯ����������� exec()ִ�еķ���ֵҲ����Ӱ�������

bindParam��bindValue����
		bindParam�ڶ������������Ǳ����������ǹ̶�ֵ
		bindValue�ڶ��������������߹̶������ԣ����ĳ��ֵ�̶����������ʹ�ù̶���ʽ���ڶ���ִ�п��Բ�����ӣ��൱�ڸ����ֶ�ֵ�����˳���
		$stmt->bindParam(":username",$username);
		$stmt->bindParam(":username",'test');
		$stmt->bindParam(1,$username);
		$stmt->bindParam(1,'test');

		$sql='SELECT username,password,email FROM user';
		$stmt=$pdo->prepare($sql);
		$stmt->execute();
		echo '������е�����һ���У�'.$stmt->columnCount();
		echo '<hr/>';
		print_r($stmt->getColumnMeta(0));//����һЩ���ݿ��е������Ϣ
		echo '<hr/>';
		$stmt->bindColumn(1, $username);
		$stmt->bindColumn(2,$password);
		$stmt->bindColumn(3, $email);//����
		while($stmt->fetch(PDO::FETCH_BOUND)){
		echo '�û�����'.$username.'-���룺'.$password.'-���䣺'.$email.'<hr/>';
		}
		
PDO���ִ�����ģʽ
		1.��Ĭģʽ PDO::ERRMODE_SLIENT
		2.����ģʽ PDO::ERRMODE_WARNING
		3.�쳣ģʽ PDO::ERRMODE_EXCEPTION ���Ƽ���
		����ͨ��$pdo->setAttribute(PDO::ATTR_ERRMODE,��Ӧ��ģʽ�����������֣�)

//PDO����˼·<br>
		1.���ݿ�����ΪINNODB<br>
		2.�ر� ���ݿ���Զ��ύ���� $options=array(PDO::ATTR_AUTOCOMMIT,0);
		3.����һ������
		4.����Ҫôȫ����ȷ��Ҫôȫ��ʧ�ܣ�ʧ��Ҫ�ع�����
		5.�ύ������

		header('content-type:text/html;charset=utf-8');
		try{
		$dsn='mysql:host=localhost;dbname=imooc';
		$username='root';
		$passwd='root';
		$options=array(PDO::ATTR_AUTOCOMMIT,0);
		$pdo=new PDO($dsn, $username, $passwd, $options);
		var_dump($pdo->inTransaction());
		//��������
		$pdo->beginTransaction();
		var_dump($pdo->inTransaction());
		//$sql='UPDATE userAccount SET money=money-2000 WHERE username="imooc"';
		$sql='UPDATE userAccount SET money=money-2000 WHERE username="imooc"';

		$res1=$pdo->exec($sql);
		if($res1==0){
		throw new PDOException('imooc ת��ʧ��');
		}
		$res2=$pdo->exec('UPDATE userAccount SET money=money+2000 WHERE username="king1"');
		if($res2==0){
		throw new PDOException('king ����ʧ��');
		}
		//�ύ����
		$pdo->commit();
		}catch(PDOException $e){
		//�ع�����
		$pdo->rollBack();
		echo $e->getMessage();
		}














