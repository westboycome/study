package com.example.spinner;

import java.util.ArrayList;
import java.util.List;

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
import android.widget.Spinner;
import android.widget.TextView;
import android.os.Build;

public class MainActivity extends Activity  {

	private List<String> list = new ArrayList<String>();
	private TextView myTextView;
	private Spinner mySpinner;
	private ArrayAdapter<String> adapter;
	private Animation myAnimation;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.main);
		// ��һ�������һ�������б����list��������ӵ�����������б�Ĳ˵���
		list.add("����");
		list.add("�Ϻ�");
		list.add("����");
		list.add("����");
		myTextView = (TextView) findViewById(R.id.textView);
		mySpinner = (Spinner) findViewById(R.id.spinner);
		// �ڶ�����Ϊ�����б���һ����������������õ���ǰ�涨���list��
		adapter = new ArrayAdapter<String>(this,
				android.R.layout.simple_spinner_item, list);
		// ��������Ϊ���������������б�����ʱ�Ĳ˵���ʽ��
		adapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
		// ���Ĳ�������������ӵ������б���
		mySpinner.setAdapter(adapter);
		// ���岽��Ϊ�����б����ø����¼�����Ӧ���������Ӧ�˵���ѡ��
		mySpinner.setOnItemSelectedListener(new Spinner.OnItemSelectedListener() {
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



}
