package com.example.android_fragment;

import android.app.Fragment;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

public class MyFragment2 extends Fragment{
	
	@Override
	public View onCreateView(LayoutInflater inflater, ViewGroup container,
			Bundle savedInstanceState) {
		// TODO Auto-generated method stub
		//layout�����ļ�ת����View����
		
		/**
		 * resource:Fragment��Ҫ���صĲ����ļ�
		 * root������layout�ĸ�ViewGroup
		 * attactToRoot��false�������ظ�ViewGroup
		 */
		View view = inflater.inflate(R.layout.fragment, container, false);
		TextView text=(TextView) view.findViewById(R.id.text);
		text.setText("��̬����Fragment");
		return view;
	
	}

}
