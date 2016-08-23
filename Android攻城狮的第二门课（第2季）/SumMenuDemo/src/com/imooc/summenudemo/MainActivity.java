package com.imooc.summenudemo;

import android.os.Bundle;
import android.app.Activity;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;
import android.view.SubMenu;
import android.widget.Toast;

public class MainActivity extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		// getMenuInflater().inflate(R.menu.main, menu);
		MenuInflater inflater = getMenuInflater();
		inflater.inflate(R.menu.main, menu);
//		SubMenu file = menu.addSubMenu("文件");
//		SubMenu edit = menu.addSubMenu("编辑");
//		file.add(1, 1, 1, "新建");
//		file.add(1, 2, 1, "打开");
//		file.add(1, 3, 1, "保存");
//		file.setHeaderTitle("文件操作");//子菜单标题
//		file.setHeaderIcon(R.drawable.ic_launcher);//子菜单图标
//		edit.add(2, 1, 1, "复制");
//		edit.add(2, 2, 1, "粘贴");
//		edit.add(2, 3, 1, "剪切");
//		edit.setHeaderTitle("编辑操作");
//		edit.setHeaderIcon(R.drawable.ic_launcher);
		return true;
	}

	@Override
	public boolean onOptionsItemSelected(MenuItem item) {
		// TODO Auto-generated method stub
		switch (item.getItemId()) {
		case R.id.new_file:
			Toast.makeText(this, "点击了新建",Toast.LENGTH_SHORT).show();
			break;
		case R.id.open_file:
			Toast.makeText(this, "点击了打开",Toast.LENGTH_SHORT).show();
			break;
		case R.id.save_file:
			Toast.makeText(this, "点击了保存",Toast.LENGTH_SHORT).show();
			break;
		case R.id.c_edit:
			Toast.makeText(this, "点击了复制",Toast.LENGTH_SHORT).show();
			break;
		case R.id.v_edit:
			Toast.makeText(this, "点击了粘贴",Toast.LENGTH_SHORT).show();
			break;
		case R.id.x_edit:
			Toast.makeText(this, "点击了剪切",Toast.LENGTH_SHORT).show();
			break;
		}
		return super.onOptionsItemSelected(item);
	}
}
