package com.imooc.optionmenudemo;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.view.Menu;
import android.view.MenuItem;
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
		MenuItem item = menu.add(1, 100, 1, "�˵�һ");
		item.setTitle("aaa");
		item.setIcon(R.drawable.ic_launcher);// api>=11 ����ʾͼ�� ��
		menu.add(1, 101, 1, "�˵���");
		menu.add(1, 102, 1, "�˵���");
		menu.add(1, 103, 1, "�˵���");
		menu.add(1, 104, 1, "�˵���");
		menu.add(1, 105, 1, "�˵���");
		menu.add(1, 106, 1, "�˵���");
		return true;
	}

	@Override
	public boolean onOptionsItemSelected(MenuItem item) {
		// TODO Auto-generated method stub
		switch (item.getItemId()) {
		case 100:
			Intent intent = new Intent(MainActivity.this, SecondActivity.class);
			item.setIntent(intent);
			break;

		case 101:
			Toast.makeText(MainActivity.this, "����˲˵���", Toast.LENGTH_SHORT)
					.show();
			break;
		case 102:
			Toast.makeText(MainActivity.this, "����˲˵���", Toast.LENGTH_SHORT)
					.show();
			break;
		case 103:
			Toast.makeText(MainActivity.this, "����˲˵���", Toast.LENGTH_SHORT)
					.show();
			break;
		case 104:
			Toast.makeText(MainActivity.this, "����˲˵���", Toast.LENGTH_SHORT)
					.show();
			break;
		case 105:
			Toast.makeText(MainActivity.this, "����˲˵���", Toast.LENGTH_SHORT)
					.show();
			break;
		case 106:
			Toast.makeText(MainActivity.this, "����˲˵���", Toast.LENGTH_SHORT)
					.show();
			break;
		}
		return super.onOptionsItemSelected(item);
	}
}
