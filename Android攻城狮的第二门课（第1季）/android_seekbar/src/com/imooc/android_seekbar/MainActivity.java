package com.imooc.android_seekbar;

import android.app.Activity;
import android.app.ActionBar;
import android.app.Fragment;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.ViewGroup;
import android.widget.SeekBar;
import android.widget.SeekBar.OnSeekBarChangeListener;
import android.widget.TextView;
import android.os.Build;

public class MainActivity extends Activity implements OnSeekBarChangeListener{

	private SeekBar seekBar;
	private TextView tv1;
	private TextView tv2;
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.main);
        seekBar=(SeekBar) findViewById(R.id.seekBar);
        tv1=(TextView) findViewById(R.id.tv1);
        tv2=(TextView) findViewById(R.id.tv2);
        seekBar.setOnSeekBarChangeListener(this);
        
	
	}
	
	//��ֵ�ı�
	@Override
	public void onProgressChanged(SeekBar seekBar, int progress,
			boolean fromUser) {
		// TODO Auto-generated method stub
		tv1.setText("�����϶�");
		tv2.setText("��ǰ��ֵ��"+progress);
	}
	
	//��ʼ�϶�
	@Override
	public void onStartTrackingTouch(SeekBar seekBar) {
		// TODO Auto-generated method stub
		tv1.setText("��ʼ�϶�");
	}
	
	//ֹͣ�϶�
	@Override
	public void onStopTrackingTouch(SeekBar seekBar) {
		// TODO Auto-generated method stub
		tv1.setText("ֹͣ�϶�");
	}


}
