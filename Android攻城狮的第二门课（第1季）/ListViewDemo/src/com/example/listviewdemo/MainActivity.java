package com.example.listviewdemo;

import java.util.ArrayList;
import java.util.Collection;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import android.os.Bundle;
import android.app.Activity;
import android.util.Log;
import android.view.Menu;
import android.view.View;
import android.widget.AbsListView;
import android.widget.AbsListView.OnScrollListener;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemClickListener;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.SimpleAdapter;
import android.widget.Toast;

public class MainActivity extends Activity implements OnItemClickListener,
		OnScrollListener {

	private ListView listView;
	private SimpleAdapter simple_adapter;
	private List<Map<String, Object>> list;
	private int i=0;
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		// ƥ�䲼���ļ��е�ListView�ؼ�
		listView = (ListView) findViewById(R.id.listView);
		// �����������Ķ���
		String[] data = new String[] { "java", "C++", "JavaScript", "Php",
				"Python" };
		ArrayAdapter<String> adapter = new ArrayAdapter<String>(
				MainActivity.this, android.R.layout.simple_list_item_1, data);
		// ��ListView��������������
		 listView.setAdapter(adapter);
		// ����ListView��Ԫ�ر�ѡ��ʱ���¼����������
		listView.setOnItemClickListener(this);
//		getData();
		// ����SimpleAdapter������
//		simple_adapter = new SimpleAdapter(MainActivity.this,
//				list, R.layout.list_item,
//				new String[] { "image", "text" }, new int[] { R.id.image,
//						R.id.text });
//		listView.setAdapter(simple_adapter);
//		listView.setOnScrollListener(this);
	}

	// ����SimpleAdapter���ݼ�
	private List<Map<String, Object>> getData() {
		list = new ArrayList<Map<String, Object>>();
		Map<String, Object> map = new HashMap<String, Object>();
		map.put("text", "java");
		map.put("image", R.drawable.ic_launcher);
		Map<String, Object> map2 = new HashMap<String, Object>();
		map2.put("text", "C++");
		map2.put("image", R.drawable.ic_launcher);
		Map<String, Object> map3 = new HashMap<String, Object>();
		map3.put("text", "JavaScript");
		map3.put("image", R.drawable.ic_launcher);
		Map<String, Object> map4 = new HashMap<String, Object>();
		map4.put("text", "Php");
		map4.put("image", R.drawable.ic_launcher);
		Map<String, Object> map5 = new HashMap<String, Object>();
		map5.put("text", "Python2");
		map5.put("image", R.drawable.ic_launcher);
		list.add(map);
		list.add(map2);
		list.add(map3);
		list.add(map4);
		list.add(map5);
		Log.i("Main", list.size() + "");
		return list;
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.main, menu);
		return true;
	}

	// (5)�¼��������������
	@Override
	public void onItemClick(AdapterView<?> parent, View view, int position,
			long id) {
		// TODO Auto-generated method stub
		// ��ȡ���ListView item�е�������Ϣ
		String text = listView.getItemAtPosition(position) + "";
		// ����Toast��Ϣ��ʾ���λ�ú�����
		Toast.makeText(MainActivity.this,
				"position=" + position + " content=" + text, 0).show();

	}

	@Override
	public void onScrollStateChanged(AbsListView view, int scrollState) {
		// TODO Auto-generated method stub
		// ��ָ�뿪��Ļǰ����������һ��
		if (scrollState == SCROLL_STATE_FLING) {
			Toast.makeText(MainActivity.this, "������һ��",0).show();
			Map<String, Object> map = new HashMap<String, Object>();
			map.put("text", "������� "+i++);
			map.put("image", R.drawable.ic_launcher);
			list.add(map);
			listView.setAdapter(simple_adapter);
			simple_adapter.notifyDataSetChanged();
		} else
		// ֹͣ����
		if (scrollState == SCROLL_STATE_IDLE) {

		} else
		// ���ڹ���
		if (scrollState == SCROLL_STATE_TOUCH_SCROLL) {

		}
	}

	@Override
	public void onScroll(AbsListView view, int firstVisibleItem,
			int visibleItemCount, int totalItemCount) {
		// TODO Auto-generated method stub

	}

}
