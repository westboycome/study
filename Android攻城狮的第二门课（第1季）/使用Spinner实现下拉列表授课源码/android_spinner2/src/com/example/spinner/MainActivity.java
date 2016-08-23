package com.example.spinner;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import android.app.Activity;
import android.app.ActionBar;
import android.app.Fragment;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.ViewGroup;
import android.view.animation.Animation;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemSelectedListener;
import android.widget.ArrayAdapter;
import android.widget.SimpleAdapter;
import android.widget.Spinner;
import android.widget.TextView;
import android.os.Build;

public class MainActivity extends Activity {

	private TextView myTextView;
	private Spinner mySpinner;
	private SimpleAdapter adapter;
	private List<Map<String, Object>> dataList;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.main);
		// ��һ�������һ�������б����list��������ӵ�����������б�Ĳ˵���
		dataList = new ArrayList<Map<String, Object>>();
		getData();
		myTextView = (TextView) findViewById(R.id.textView);
		mySpinner = (Spinner) findViewById(R.id.spinner);
		// �ڶ�����Ϊ�����б���һ����������������õ���ǰ�涨���list��
		adapter=new SimpleAdapter(this, dataList, R.layout.item, new String[]{"image","text"}, new int[]{R.id.image,R.id.text});
		
		// ��������Ϊ���������������б�����ʱ�Ĳ˵���ʽ��
		adapter.setDropDownViewResource(R.layout.item);
		// ���Ĳ�������������ӵ������б���
		mySpinner.setAdapter(adapter);
		// ���岽��Ϊ�����б����ø����¼�����Ӧ���������Ӧ�˵���ѡ��

		mySpinner
				.setOnItemSelectedListener(new Spinner.OnItemSelectedListener() {
					public void onItemSelected(AdapterView<?> arg0, View arg1,
							int arg2, long arg3) {
						// TODO Auto-generated method stub
						/* ����ѡmySpinner ��ֵ����myTextView �� */
						myTextView.setText("��ѡ����ǣ�" + adapter.getItem(arg2));
					}

					public void onNothingSelected(AdapterView<?> arg0) {
						// TODO Auto-generated method stub
						myTextView.setText("NONE");
					}
				});

	}

	private void getData() {
		// TODO Auto-generated method stub
		Map<String, Object> map = new HashMap<String, Object>();
		map.put("image", R.drawable.ic_launcher);
		map.put("text", "����");
		Map<String, Object> map2 = new HashMap<String, Object>();
		map2.put("image", R.drawable.ic_launcher);
		map2.put("text", "�Ϻ�");
		Map<String, Object> map3 = new HashMap<String, Object>();
		map3.put("image", R.drawable.ic_launcher);
		map3.put("text", "����");
		Map<String, Object> map4 = new HashMap<String, Object>();
		map4.put("image", R.drawable.ic_launcher);
		map4.put("text", "����");
		dataList.add(map);
		dataList.add(map2);
		dataList.add(map3);
		dataList.add(map4);
	}

}
