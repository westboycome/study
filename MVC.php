MVC M(mode、模型)，V(view、视图)，C(controller、控制器)
单一入口

smarty
	Smarty.class 主文件
	SmartyBC.class 版本兼容文件
	
变量调节器
	1，首字母大写capitalize
	2，字符串连接 cat
	3，日期格式化 date_format
	4， 为赋值或为空的变量知道默认值default
	5, escape 转码
	6 lower 小写 upper大写
	7，nl2br 转义
	
	eq(==) neq(!=) gt(>) lt(<)
循环	
	{section name=article loop=$articlelist}
		{$articlelist[article].title} 
	{/section}
	{foreach item=article from=$articlelist}  用 $articlelist as article 也可以
		{$article.title}
		{foreachelse}
	{/foreach}
	
文件引用
	{include file=""	sitename="" }
	
对象的赋值
注册自定义函数

registerPulgin('function', 方法名，函数名)	

Smarty插件类型
	functions 函数插件
	modifiers 修饰插件
	block functions 区块函数插件	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	