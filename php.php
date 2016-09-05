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
		打开Apache->httpd.conf文件，找到onlineoffline tag,修改其后面的Deny from all为Allow from all，同时将Allow from 127.0.0.1修改为注释（前面加‘#’），在2.5版本中，无需进行此操作，默认为Require all granted。<br>
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
		
	mb_strlen()函数获取字符串中中文长度。
	$len = strlen($str);
	$str='i love you';
	//截取love这几个字母
	echo substr($str, 2, 4);//为什么开始位置是2呢，因为substr函数计算字符串位置是从0开始的，
	也就是0的位置是i,1的位置是空格，l的位置是2。从位置2开始取4个字符，就是love。
	中文字符串的截取函数mb_substr()
	
	$str = 'I want to study at imooc';
	$pos = strpos($str, 'imooc');
	echo $pos;//结果显示19，表示从位置0开始，imooc在第19个位置开始出现
	
	$str = 'I want to learn js';
	$replace = str_replace('js', 'php', $str);
	
	php字符串合并函数implode()
	php字符串分隔函数explode()
	preg_match用于执行一个正则匹配，常用来判断一类字符模式是否存在。
	
	\ 一般用于转义字符
	^ 断言目标的开始位置(或在多行模式下是行首)
	$ 断言目标的结束位置(或在多行模式下是行尾)
	. 匹配除换行符外的任何字符(默认)
	[ 开始字符类定义
	] 结束字符类定义
	| 开始一个可选分支
	( 子组的开始标记
	) 子组的结束标记
	? 作为量词，表示 0 次或 1 次匹配。位于量词后面用于改变量词的贪婪特性。 (查阅量词)
	* 量词，0 次或多次匹配
	+ 量词，1 次或多次匹配
	{ 自定义量词开始标记
	} 自定义量词结束标记
	
	preg_match用来执行一个匹配，
	
PHP设置Cookie最常用的方法就是使用setcookie函数，setcookie具有7个可选参数，我们常用到的为前5个：
	name（ Cookie名）可以通过$_COOKIE['name'] 进行访问
	value（Cookie的值）
	expire（过期时间）Unix时间戳格式，默认为0，表示浏览器关闭即失效
	path（有效路径）如果路径设置为'/'，则整个网站都有效
	domain（有效域）默认整个域名都有效，如果设置了'www.imooc.com',则只在www子域中有效
	
	//* 将用户数据保存到cookie中的一个简单方法 */
	$secureKey = 'imooc'; //加密密钥
	$str = serialize($userinfo); //将用户信息序列化
	//用户信息加密前
	$str = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($secureKey), $str, MCRYPT_MODE_ECB));
	//用户信息加密后
	//将加密后的用户数据存储到cookie中
	setcookie('userinfo', $str);

	//当需要使用时进行解密
	$str = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($secureKey), base64_decode($str), MCRYPT_MODE_ECB);
	$uinfo = unserialize($str);
	echo "解密后的用户信息：<br>";	
	
	file_get_contents，可以将整个文件全部读取到一个字符串中。
	判断文件存在的函数有两个is_file与file_exists.
	is_readable与is_writeable在文件是否存在的基础上，判断文件是否可读与可写。
	
	fileowner：获得文件的所有者
	filectime：获取文件的创建时间
	filemtime：获取文件的修改时间
	fileatime：获取文件的访问时间
	filesize();获取文件的大小
	strtotime（）；
	
GD
	header("content-type: image/png");
	//创建
	$img=imagecreatetruecolor(100, 100);
	//确定画笔的颜色：
	$red=imagecolorallocate($img, 0xFF, 0x00, 0x00);
	//绘制线段函数
	imageline($img, 0, 0, 100, 100, $red);
	//可以通过$font来设置字体的大小，x,y设置文字显示的位置，$s是要绘制的文字,$col是文字的颜色。
	magestring ( resource $image , int $font , int $x , int $y , string $s , int $col )，
	//绘制点来实现噪点干扰
	imagesetpixel($im, rand(0, 100) , rand(0, 100) , $black); 
	imagefill($img, 0, 0, $red);
	//图像的输出。保存
	imagepng($img);
	//直接从图片文件创建图像。
	imagecreatefromjpeg($filename);
	//给图片添加水印
	imagecopy($im, $logo, 15, 15, 0, 0, $width, $height);
	imagejpeg($im, $filename);
	
Exception具有几个基本属性与方法，其中包括了：
	message 异常消息内容
	code 异常代码
	file 抛出异常的文件名
	line 抛出异常在该文件的行数

	getTrace 获取异常追踪信息
	getTraceAsString 获取异常追踪信息的字符串
	getMessage 获取出错信息
	
	
	
	
	
	
	
	
	
	imagedestroy($img);	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		