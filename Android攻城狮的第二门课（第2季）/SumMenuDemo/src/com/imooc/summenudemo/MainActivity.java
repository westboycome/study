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
//		SubMenu file = menu.addSubMenu("�ļ�");
//		SubMenu edit = menu.addSubMenu("�༭");
//		file.add(1, 1, 1, "�½�");
//		file.add(1, 2, 1, "��");
//		file.add(1, 3, 1, "����");
//		file.setHeaderTitle("�ļ�����");//�Ӳ˵�����
//		file.setHeaderIcon(R.drawable.ic_launcher);//�Ӳ˵�ͼ��
//		edit.add(2, 1, 1, "����");
//		edit.add(2, 2, 1, "ճ��");
//		edit.add(2, 3, 1, "����");
//		edit.setHeaderTitle("�༭����");
//		edit.setHeaderIcon(R.drawable.ic_launcher);
		return true;
	}

	@Override
	public boolean onOptionsItemSelected(MenuItem item) {
		// TODO Auto-generated method stub
		switch (item.getItemId()) {
		case R.id.new_file:
			Toast.makeText(this, "������½�",Toast.LENGTH_SHORT).show();
			break;
		case R.id.open_file:
			Toast.makeText(this, "����˴�",Toast.LENGTH_SHORT).show();
			break;
		case R.id.save_file:
			Toast.makeText(this, "����˱���",Toast.LENGTH_SHORT).show();
			break;
		case R.id.c_edit:
			Toast.makeText(this, "����˸���",Toast.LENGTH_SHORT).show();
			break;
		case R.id.v_edit:
			Toast.makeText(this, "�����ճ��",Toast.LENGTH_SHORT).show();
			break;
		case R.id.x_edit:
			Toast.makeText(this, "����˼���",Toast.LENGTH_SHORT).show();
			break;
		}
		return super.onOptionsItemSelected(item);
	}
}
