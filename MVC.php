MVC M(mode��ģ��)��V(view����ͼ)��C(controller��������)
��һ���

smarty
	Smarty.class ���ļ�
	SmartyBC.class �汾�����ļ�
	
����������
	1������ĸ��дcapitalize
	2���ַ������� cat
	3�����ڸ�ʽ�� date_format
	4�� Ϊ��ֵ��Ϊ�յı���֪��Ĭ��ֵdefault
	5, escape ת��
	6 lower Сд upper��д
	7��nl2br ת��
	
	eq(==) neq(!=) gt(>) lt(<)
ѭ��	
	{section name=article loop=$articlelist}
		{$articlelist[article].title} 
	{/section}
	{foreach item=article from=$articlelist}  �� $articlelist as article Ҳ����
		{$article.title}
		{foreachelse}
	{/foreach}
	
�ļ�����
	{include file=""	sitename="" }
	
����ĸ�ֵ
ע���Զ��庯��

registerPulgin('function', ��������������)	

Smarty�������
	functions �������
	modifiers ���β��
	block functions ���麯�����	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	