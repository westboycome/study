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

WAMPserver��վ�����÷������������ж����վ����Ŀ����<br>
		1�����վ��<br>
		��wamp/bin/apache/Apache2.5/conf/extra���ҵ�����httpd-vhosts.conf�ļ����򿪣���Ӷ��վ�㣬����ճ�����¡�SeverAdmin--���ù���Ա�������ַ��DocumentRoot--�ļ�Ŀ¼��ָ����վ����ָ���Ŀ¼��ServerName--��������ErrorLog--������־��CustomLog--�ճ���־��ֻ�õ�documentname��servername��������ɾ����documentroot�ĳ�E:/Demo/test01��servername��Ϊtest01.com��<br>
		2������httpd-hosts�ļ�<br>
		��Apache->httpd.conf�ļ����ҵ�virtual hosts<br>
		#Include conf/extra/httpd-vhosts.conf ��Includeǰ��'#'ȥ����<br>
		3������վ����ʷ�������Դ<br>
		��Apache->httpd.conf�ļ����ҵ�onlineoffline tag,�޸�������Deny from allΪAllow from all��
		ͬʱ��Allow from 127.0.0.1�޸�Ϊע�ͣ�ǰ��ӡ�#��������2.5�汾�У�������д˲�����Ĭ��ΪRequire all granted��<br>
		4��Ϊվ�������Դ:Demo�ﴴ��test01��test02�ļ��У��ļ����·ֱ𴴽�index.php�ļ�<br>
		5�����ñ���������Щվ��ʱ�ӱ�����ȡ��Դ<br>
		��c:/windows/system32/drivers/etc/hosts<br>
		�����������У�127.0.0.1 test01.com��
		test02.com

var_dump()�������ж�һ�������������볤��,�������������ֵ,�������������Ǳ�����ֵ���ط���������.

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
		
<<<<<<< HEAD
		ʹ��mysqli_connect('localhost','root','user')����ȫ
		
		ͨ��mysql_select_db������ѡ�����ݿ⡣
		mysql_query("set names 'utf8'");
		$res = mysql_query('select * from user limit 1');
		���ڲ�ѯ������᷵��һ����Դ�����resource��������ͨ������Դ��ȡ��ѯ������е����ݡ�
		$row = mysql_fetch_array($res);
		var_dump($row);
		��mysql�У�ִ�в�������Ժ󣬿��Եõ�����������id,ͨ��PHP��mysql_insert_id�������Ի�ȡ��id��
		$uid = mysql_insert_id();
		
		mysql_fetch_rowÿִ��һ�Σ�������ԴҲ���ǽ����������ȡһ�����ݣ�
		���������ʽ���س�������ǰһ���Ѿ�ȡ�����һ�����ݵ�ʱ����һ�η��ؿս����
		���ص�������һ��һά�������飬ÿһ���±������ݿ����ֶε��������Ӧ��
		
		mysql_fetch_assoc($resouce);
		��ͬ��
		mysql_fetch_array($resouce,MYSQL_ASSOC);
		����ȡ��������
		mysql_fetch_object($query)���ص��Ƕ���
		ע��$query��ʹ�� mysql_query ִ��sql����󷵻صĽ������ʶ����
		 mysql_num_rows�Ǽ������������������Բ��������ǽ������ʶ����
=======
		����
>>>>>>> d28bca0e97084aa45337e0655bd9c7d9c39bb478
