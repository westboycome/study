package com.imooc.toast;

import android.app.Activity;
import android.os.Bundle;
import android.os.Handler;
import android.view.Gravity;
import android.view.LayoutInflater;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.Toast;

public class MainActivity extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		initEvent();
	}
	/**
	 * ��ʼ������¼�
	 */
	private void initEvent(){
		findViewById(R.id.toast_btn1).setOnClickListener(new OnClickListener() {	
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				showToast1();
			}
		});
		findViewById(R.id.toast_btn2).setOnClickListener(new OnClickListener() {	
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				showToast2();
			}
		});
		findViewById(R.id.toast_btn3).setOnClickListener(new OnClickListener() {	
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				showToast3();
			}
		});
		findViewById(R.id.toast_btn4).setOnClickListener(new OnClickListener() {	
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				showToast4();
			}
		});
	}
	/**
	 * ��ʾĬ��toast
	 */
	private void showToast1(){
		//Toast toast = Toast.makeText(this,"����һ��Ĭ�ϵ�Toast!",Toast.LENGTH_SHORT);
		Toast toast = Toast.makeText(this,R.string.app_name,Toast.LENGTH_LONG);
		toast.show();
	}
	/**
	 * ��ʾ�Զ���λ�õ�Toast
	 */
	private void showToast2(){
		Toast toast = Toast.makeText(this,"�ı�λ�õ�Toast!",Toast.LENGTH_SHORT);
		toast.setGravity(Gravity.CENTER, 0, 0);
		toast.show();
	}
	/**
	 * ����ͼƬ��toast��
	 */
	private void showToast3(){
		Toast toast = Toast.makeText(this,"����ͼƬ��Toast��",Toast.LENGTH_LONG);
		LinearLayout toast_layout = (LinearLayout)toast.getView();
		ImageView iv = new ImageView(this);
		iv.setImageResource(R.drawable.topimg);
		toast_layout.addView(iv,0);
		toast.show();
	}
	/**
	 * ��ȫ�Զ����Toast
	 */
	private void showToast4(){
		LayoutInflater inflater = LayoutInflater.from(this);
		View toast_view = inflater.inflate(R.layout.toast_layout, null);
		Toast toast = new Toast(this);
		toast.setView(toast_view);
		toast.show();
	}
}
