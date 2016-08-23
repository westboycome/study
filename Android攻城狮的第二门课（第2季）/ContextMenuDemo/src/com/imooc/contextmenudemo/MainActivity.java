package com.imooc.contextmenudemo;

import java.util.ArrayList;
import java.util.zip.Inflater;

import android.app.Activity;
import android.os.Bundle;
import android.view.ContextMenu;
import android.view.MenuInflater;
import android.view.MenuItem;
import android.view.View;
import android.view.ContextMenu.ContextMenuInfo;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.Toast;

public class MainActivity extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		showListView();
	}

	/**
	 * 设置listview的显示内容
	 */
	private void showListView() {
		ListView listview = (ListView) findViewById(R.id.listview);
		ArrayAdapter<String> adapter = new ArrayAdapter<String>(this,
				android.R.layout.simple_list_item_1, getData());
		listview.setAdapter(adapter);
		this.registerForContextMenu(listview);
	}
	@Override
	public void onCreateContextMenu(ContextMenu menu, View v,
			ContextMenuInfo menuInfo) {
		// TODO Auto-generated method stub
		super.onCreateContextMenu(menu, v, menuInfo);
		//设置Menu显示内容
		menu.setHeaderTitle("文件操作");
		menu.setHeaderIcon(R.drawable.ic_launcher);
//		menu.add(1, 1, 1, "复制");
//		menu.add(1, 2, 1, "粘贴");
//		menu.add(1, 3, 1, "剪切");
//		menu.add(1, 4, 1, "重命名");
		MenuInflater inflater = getMenuInflater();
		inflater.inflate(R.menu.main, menu);
	}
	
	@Override
	public boolean onContextItemSelected(MenuItem item) {
		// TODO Auto-generated method stub
		switch (item.getItemId()) {
		case R.id.context_menu_item1:
			Toast.makeText(MainActivity.this, "点击复制",Toast.LENGTH_SHORT).show();
			break;

		case R.id.context_menu_item2:
			Toast.makeText(MainActivity.this, "点击粘贴",Toast.LENGTH_SHORT).show();
			break;

		case R.id.context_menu_item3:
			Toast.makeText(MainActivity.this, "点击剪切",Toast.LENGTH_SHORT).show();
			break;

		case R.id.context_menu_item4:
			Toast.makeText(MainActivity.this, "点击重命名",Toast.LENGTH_SHORT).show();
			break;
		}
		
		return super.onContextItemSelected(item);
	
	}
	
	/**
	 * 构造listview显示的数据
	 * 
	 * @return
	 */
	private ArrayList<String> getData() {
		ArrayList<String> list = new ArrayList<String>();
		for (int i = 0; i < 5; i++) {
			list.add("文件" + (i + 1));
		}
		return list;
	}
}
