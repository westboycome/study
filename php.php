		在php中字符串连接符是用点（.）来表示的
		WAMP
		wamp
		W就是windows
		A就是apache
		M就是mysql
		P就是php

		www.wampserver.com
		localhost ---本地主机；
		phpMyAdmin --- 数据库管理工具（可视化管理数据库，导入导出数据）；
		www目录 --- 网站根目录；
		Apache --- 版本信息；启动，停止，安装，卸载；开关Apache模块；查看http配置（httpd.conf）；
		PHP --- 版本信息；开关PHP服务（扩展和设置）；PHP配置（php.ini）；
		MySQL --- 版本信息；启动，停止，安装，卸载；MySQL控制台（密码为空；查看有多少数据库:show database）;MySQL配置（my.ini）；
		webGrind --- 网站性能分析；
		WAMP在线状态：局域网可以访问；
		WAMP离线状态：本机可以访问；

		新版本的应该是把httpd-vhosts.conf的配置打开，要同时修改httpd-vhosts.conf 下的项目路径，
		修改如下：打开wamp安装目录下对的\bin\apache\apache2.4.18\conf\extra\httpd-vhosts.conf文件：修改DocumentRoot 和Directory 的文件路径

	wamp下的wampmanager.ini和wampmanager.tpl
	

WAMPserver多站点配置方法（管理运行多个网站和项目）：<br>
		1、添加站点<br>
		在wamp/bin/apache/Apache2.5/conf/extra中找到并打开httpd-vhosts.conf文件，打开，添加多个站点，复制粘贴两下。
		SeverAdmin--设置管理员的邮箱地址；DocumentRoot--文件目录，指向网站代码指向的目录；ServerName--主机名；
		ErrorLog--错误日志；CustomLog--日常日志。只用到documentname和servername，其他可删掉。documentroot改成E:/Demo/test01，servername改为test01.com。<br>
		2、引入httpd-hosts文件<br>
		打开Apache->httpd.conf文件，找到virtual hosts<br>
		#Include conf/extra/httpd-vhosts.conf 将Include前的'#'去掉。<br>
		3、允许站点访问服务器资源<br>
		打开Apache->httpd.conf文件，找到onlineoffline tag,修改其后面的Deny from all为Allow from all，
		同时将Allow from 127.0.0.1修改为注释（前面加‘#’），在2.5版本中，无需进行此操作，默认为Require all granted。<br>
		4、为站点添加资源:Demo里创建test01、test02文件夹，文件夹下分别创建index.php文件<br>
		5、设置本机访问这些站点时从本机获取资源<br>
		打开c:/windows/system32/drivers/etc/hosts<br>
		在最后添加两行：127.0.0.1 test01.com和
		test02.com

var_dump()方法是判断一个变量的类型与长度,并输出变量的数值,
如果变量输入的是变量的值并回返数据类型.

		<?php 
		//首先采用“fopen”函数打开文件，得到返回值的就是资源类型。
		$file_handle = fopen("/data/webroot/resource/php/f.txt","r");
		if ($file_handle){
		    //接着采用while循环（后面语言结构语句中的循环结构会详细介绍）一行行地读取文件，然后输出每行的文字
		    while (!feof($file_handle)) { //判断是否到最后一行
		        $line = fgets($file_handle); //读取一行文本
		        echo $line; //输出一行文本
		        echo "<br />"; //换行
		    }
		}
		fclose($file_handle);//关闭文件
		?>

使用Emmet插件快速开发前端代码：
		table>tr*3>th*1+td*3
		h1{hello}即<h1>hello</h1>
		a[href="xx.xxx.xxx(网址)"]{百度（超链接名称）}即<a href="www.baidu.com">百度</a>
		ul>li.item${haha $$}*4 即<ul><li class="item1-4">haha 01</li></ul>
		(select>.wrap>h1>p>a{immoc}) + (select>.haha>p+p)
		>：表示上下层级
		+：表示同级
		*：表示数量
		.：表示属性class
		[]:其内填写tag的属性、属性值
		{}：其内填写tag内的文本
		$：在循环多个属性或者值情况下，$为其加上序号
		()：优先解析该符号中的内容
		输入完毕后，按TAB键即可生成。
		
<<<<<<< HEAD
mysql_affected_rows($resource);返回最近操作影响的行数。注意一下问题：
		1、如果本次mysql语句未对数据库进行修改，则返回为0.
		2、该函数只能检测离其最近的一条mysql语句对数据库的修改，其他的修改则无法判别。
		
MySQLi扩展库
	Mysqlli扩展相对于MySQL扩展的优势：
		1、基于面向过程和面向对象的使用
		2、支持预处理语句
		3、支持事物
		
		修改php.ini文件
		php_mysqli.dll 去掉前面的.
		extension_dir	
		
		phpinfo();
		affected_rows返回值有3种：
		1.返回受影响的记录条数。
		2.返回-1，表示SQL语句有问题。
		3.返回0，表示没有受影响的条数。
		
		多条sql语句的执行（$sql="执行语句1；执行语句2；执行语句3"）：
		1、$mysqli->multi-query($sql); 只有在第一条语句执行成功的情况，返回true。
		2、use_result()或store_result()得到查询的结果集。
		3、more_result()检测是否有更多的结果集。
		4、next_result()将结果集指针向下移动一位。
		
		sql注入 or 1=1 #
		$mysqli->autocommit(true/false);
		$mysqli->commit();
		$mysqli->rollback();
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
=======
<<<<<<< HEAD
		使用mysqli_connect('localhost','root','user')更安全
		
		通过mysql_select_db函数来选择数据库。
		mysql_query("set names 'utf8'");
		$res = mysql_query('select * from user limit 1');
		对于查询类的语句会返回一个资源句柄（resource），可以通过该资源获取查询结果集中的数据。
		$row = mysql_fetch_array($res);
		var_dump($row);
		在mysql中，执行插入语句以后，可以得到自增的主键id,通过PHP的mysql_insert_id函数可以获取该id。
		$uid = mysql_insert_id();
		
		mysql_fetch_row每执行一次，都从资源也就是结果集里依次取一条数据，
		以数组的形式返回出来，当前一次已经取到最后一条数据的时候，这一次返回空结果。
		返回的数组是一个一维索引数组，每一个下标与数据库里字段的排序相对应。
		
		mysql_fetch_assoc($resouce);
		等同于
		mysql_fetch_array($resouce,MYSQL_ASSOC);
		用来取多条数据
		mysql_fetch_object($query)返回的是对象
		注：$query是使用 mysql_query 执行sql命令后返回的结果集标识符。
		 mysql_num_rows是计算结果集的条数，所以参数必须是结果集标识符。
=======
		可以
>>>>>>> d28bca0e97084aa45337e0655bd9c7d9c39bb478
>>>>>>> 962e40521927056499b29596f9e0f3bf8316d11f
