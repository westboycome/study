		��php���ַ������ӷ����õ㣨.������ʾ��
		WAMP
		wamp
		W����windows
		A����apache
		M����mysql
		P����php

		www.wampserver.com
		localhost ---����������
		phpMyAdmin --- ���ݿ�����ߣ����ӻ��������ݿ⣬���뵼�����ݣ���
		wwwĿ¼ --- ��վ��Ŀ¼��
		Apache --- �汾��Ϣ��������ֹͣ����װ��ж�أ�����Apacheģ�飻�鿴http���ã�httpd.conf����
		PHP --- �汾��Ϣ������PHP������չ�����ã���PHP���ã�php.ini����
		MySQL --- �汾��Ϣ��������ֹͣ����װ��ж�أ�MySQL����̨������Ϊ�գ��鿴�ж������ݿ�:show database��;MySQL���ã�my.ini����
		webGrind --- ��վ���ܷ�����
		WAMP����״̬�����������Է��ʣ�
		WAMP����״̬���������Է��ʣ�

		�°汾��Ӧ���ǰ�httpd-vhosts.conf�����ô򿪣�Ҫͬʱ�޸�httpd-vhosts.conf �µ���Ŀ·����
		�޸����£���wamp��װĿ¼�¶Ե�\bin\apache\apache2.4.18\conf\extra\httpd-vhosts.conf�ļ����޸�DocumentRoot ��Directory ���ļ�·��

	wamp�µ�wampmanager.ini��wampmanager.tpl
	

WAMPserver��վ�����÷������������ж����վ����Ŀ����<br>
		1�����վ��<br>
		��wamp/bin/apache/Apache2.5/conf/extra���ҵ�����httpd-vhosts.conf�ļ����򿪣���Ӷ��վ�㣬����ճ�����¡�
		SeverAdmin--���ù���Ա�������ַ��DocumentRoot--�ļ�Ŀ¼��ָ����վ����ָ���Ŀ¼��ServerName--��������
		ErrorLog--������־��CustomLog--�ճ���־��ֻ�õ�documentname��servername��������ɾ����documentroot�ĳ�E:/Demo/test01��servername��Ϊtest01.com��<br>
		2������httpd-hosts�ļ�<br>
		��Apache->httpd.conf�ļ����ҵ�virtual hosts<br>
		#Include conf/extra/httpd-vhosts.conf ��Includeǰ��'#'ȥ����<br>
		3������վ����ʷ�������Դ<br>
		��Apache->httpd.conf�ļ����ҵ�onlineoffline tag,�޸�������Deny from allΪAllow from all��ͬʱ��Allow from 127.0.0.1�޸�Ϊע�ͣ�ǰ��ӡ�#��������2.5�汾�У�������д˲�����Ĭ��ΪRequire all granted��<br>
		4��Ϊվ�������Դ:Demo�ﴴ��test01��test02�ļ��У��ļ����·ֱ𴴽�index.php�ļ�<br>
		5�����ñ���������Щվ��ʱ�ӱ�����ȡ��Դ<br>
		��c:/windows/system32/drivers/etc/hosts<br>
		�����������У�127.0.0.1 test01.com��
		test02.com

var_dump()�������ж�һ�������������볤��,�������������ֵ,
�������������Ǳ�����ֵ���ط���������.

		<?php 
		//���Ȳ��á�fopen���������ļ����õ�����ֵ�ľ�����Դ���͡�
		$file_handle = fopen("/data/webroot/resource/php/f.txt","r");
		if ($file_handle){
		    //���Ų���whileѭ�����������Խṹ����е�ѭ���ṹ����ϸ���ܣ�һ���еض�ȡ�ļ���Ȼ�����ÿ�е�����
		    while (!feof($file_handle)) { //�ж��Ƿ����һ��
		        $line = fgets($file_handle); //��ȡһ���ı�
		        echo $line; //���һ���ı�
		        echo "<br />"; //����
		    }
		}
		fclose($file_handle);//�ر��ļ�
		?>

ʹ��Emmet������ٿ���ǰ�˴��룺
		table>tr*3>th*1+td*3
		h1{hello}��<h1>hello</h1>
		a[href="xx.xxx.xxx(��ַ)"]{�ٶȣ����������ƣ�}��<a href="www.baidu.com">�ٶ�</a>
		ul>li.item${haha $$}*4 ��<ul><li class="item1-4">haha 01</li></ul>
		(select>.wrap>h1>p>a{immoc}) + (select>.haha>p+p)
		>����ʾ���²㼶
		+����ʾͬ��
		*����ʾ����
		.����ʾ����class
		[]:������дtag�����ԡ�����ֵ
		{}��������дtag�ڵ��ı�
		$����ѭ��������Ի���ֵ����£�$Ϊ��������
		()�����Ƚ����÷����е�����
		������Ϻ󣬰�TAB���������ɡ�
		
mysql_affected_rows($resource);�����������Ӱ���������ע��һ�����⣺
		1���������mysql���δ�����ݿ�����޸ģ��򷵻�Ϊ0.
		2���ú���ֻ�ܼ�����������һ��mysql�������ݿ���޸ģ��������޸����޷��б�
		
MySQLi��չ��
	Mysqlli��չ�����MySQL��չ�����ƣ�
		1������������̺���������ʹ��
		2��֧��Ԥ�������
		3��֧������
		
		�޸�php.ini�ļ�
		php_mysqli.dll ȥ��ǰ���.
		extension_dir	
		
		phpinfo();
		affected_rows����ֵ��3�֣�
		1.������Ӱ��ļ�¼������
		2.����-1����ʾSQL��������⡣
		3.����0����ʾû����Ӱ���������
		
		����sql����ִ�У�$sql="ִ�����1��ִ�����2��ִ�����3"����
		1��$mysqli->multi-query($sql); ֻ���ڵ�һ�����ִ�гɹ������������true��
		2��use_result()��store_result()�õ���ѯ�Ľ������
		3��more_result()����Ƿ��и���Ľ������
		4��next_result()�������ָ�������ƶ�һλ��
		
		sqlע�� or 1=1 #
		$mysqli->autocommit(true/false);
		$mysqli->commit();
		$mysqli->rollback();
		
	mb_strlen()������ȡ�ַ��������ĳ��ȡ�
	$len = strlen($str);
	$str='i love you';
	//��ȡlove�⼸����ĸ
	echo substr($str, 2, 4);//Ϊʲô��ʼλ����2�أ���Ϊsubstr���������ַ���λ���Ǵ�0��ʼ�ģ�
	Ҳ����0��λ����i,1��λ���ǿո�l��λ����2����λ��2��ʼȡ4���ַ�������love��
	�����ַ����Ľ�ȡ����mb_substr()
	
	$str = 'I want to study at imooc';
	$pos = strpos($str, 'imooc');
	echo $pos;//�����ʾ19����ʾ��λ��0��ʼ��imooc�ڵ�19��λ�ÿ�ʼ����
	
	$str = 'I want to learn js';
	$replace = str_replace('js', 'php', $str);
	
	php�ַ����ϲ�����implode()
	php�ַ����ָ�����explode()
	preg_match����ִ��һ������ƥ�䣬�������ж�һ���ַ�ģʽ�Ƿ���ڡ�
	
	\ һ������ת���ַ�
	^ ����Ŀ��Ŀ�ʼλ��(���ڶ���ģʽ��������)
	$ ����Ŀ��Ľ���λ��(���ڶ���ģʽ������β)
	. ƥ������з�����κ��ַ�(Ĭ��)
	[ ��ʼ�ַ��ඨ��
	] �����ַ��ඨ��
	| ��ʼһ����ѡ��֧
	( ����Ŀ�ʼ���
	) ����Ľ������
	? ��Ϊ���ʣ���ʾ 0 �λ� 1 ��ƥ�䡣λ�����ʺ������ڸı����ʵ�̰�����ԡ� (��������)
	* ���ʣ�0 �λ���ƥ��
	+ ���ʣ�1 �λ���ƥ��
	{ �Զ������ʿ�ʼ���
	} �Զ������ʽ������
	
	preg_match����ִ��һ��ƥ�䣬
	
PHP����Cookie��õķ�������ʹ��setcookie������setcookie����7����ѡ���������ǳ��õ���Ϊǰ5����
	name�� Cookie��������ͨ��$_COOKIE['name'] ���з���
	value��Cookie��ֵ��
	expire������ʱ�䣩Unixʱ�����ʽ��Ĭ��Ϊ0����ʾ������رռ�ʧЧ
	path����Ч·�������·������Ϊ'/'����������վ����Ч
	domain����Ч��Ĭ��������������Ч�����������'www.imooc.com',��ֻ��www��������Ч
	
	//* ���û����ݱ��浽cookie�е�һ���򵥷��� */
	$secureKey = 'imooc'; //������Կ
	$str = serialize($userinfo); //���û���Ϣ���л�
	//�û���Ϣ����ǰ
	$str = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($secureKey), $str, MCRYPT_MODE_ECB));
	//�û���Ϣ���ܺ�
	//�����ܺ���û����ݴ洢��cookie��
	setcookie('userinfo', $str);

	//����Ҫʹ��ʱ���н���
	$str = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($secureKey), base64_decode($str), MCRYPT_MODE_ECB);
	$uinfo = unserialize($str);
	echo "���ܺ���û���Ϣ��<br>";	
	
	file_get_contents�����Խ������ļ�ȫ����ȡ��һ���ַ����С�
	�ж��ļ����ڵĺ���������is_file��file_exists.
	is_readable��is_writeable���ļ��Ƿ���ڵĻ����ϣ��ж��ļ��Ƿ�ɶ����д��
	
	fileowner������ļ���������
	filectime����ȡ�ļ��Ĵ���ʱ��
	filemtime����ȡ�ļ����޸�ʱ��
	fileatime����ȡ�ļ��ķ���ʱ��
	filesize();��ȡ�ļ��Ĵ�С
	strtotime������
	
GD
	header("content-type: image/png");
	//����
	$img=imagecreatetruecolor(100, 100);
	//ȷ�����ʵ���ɫ��
	$red=imagecolorallocate($img, 0xFF, 0x00, 0x00);
	//�����߶κ���
	imageline($img, 0, 0, 100, 100, $red);
	//����ͨ��$font����������Ĵ�С��x,y����������ʾ��λ�ã�$s��Ҫ���Ƶ�����,$col�����ֵ���ɫ��
	magestring ( resource $image , int $font , int $x , int $y , string $s , int $col )��
	//���Ƶ���ʵ��������
	imagesetpixel($im, rand(0, 100) , rand(0, 100) , $black); 
	imagefill($img, 0, 0, $red);
	//ͼ������������
	imagepng($img);
	//ֱ�Ӵ�ͼƬ�ļ�����ͼ��
	imagecreatefromjpeg($filename);
	//��ͼƬ���ˮӡ
	imagecopy($im, $logo, 15, 15, 0, 0, $width, $height);
	imagejpeg($im, $filename);
	
Exception���м������������뷽�������а����ˣ�
	message �쳣��Ϣ����
	code �쳣����
	file �׳��쳣���ļ���
	line �׳��쳣�ڸ��ļ�������

	getTrace ��ȡ�쳣׷����Ϣ
	getTraceAsString ��ȡ�쳣׷����Ϣ���ַ���
	getMessage ��ȡ������Ϣ
	
	
	
	
	
	
	
	
	
	imagedestroy($img);	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		