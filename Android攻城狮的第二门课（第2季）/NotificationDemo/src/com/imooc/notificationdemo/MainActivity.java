package com.imooc.notificationdemo;

import android.app.Activity;
import android.app.Notification;
import android.app.Notification.Builder;
import android.app.NotificationManager;
import android.app.PendingIntent;
import android.content.Context;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;

public class MainActivity extends Activity implements OnClickListener{
	NotificationManager manager;//֪ͨ������
	int notification_ID;
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		manager = (NotificationManager) getSystemService(Context.NOTIFICATION_SERVICE);
		findViewById(R.id.btn_send).setOnClickListener(this);
		findViewById(R.id.btn_cancle).setOnClickListener(this);
		
	}
	
	@Override
	public void onClick(View v) {
		// TODO Auto-generated method stub
		switch (v.getId()) {
		case R.id.btn_send:
			sendNotification();
			break;
		case R.id.btn_cancle:
			manager.cancel(notification_ID);
			break;
		}
	}
	/**
	 * ����notification�����͵�֪ͨ��
	 */
	private void sendNotification(){
		Intent intent = new Intent(this,MainActivity.class);
		PendingIntent pintent = PendingIntent.getActivity(this, 0, intent, 0);
		Builder builder = new Notification.Builder(this);
		builder.setSmallIcon(R.drawable.ic_launcher);//����ͼ��
		builder.setTicker("hello");//�ֻ�״̬������ʾ��
		builder.setWhen(System.currentTimeMillis());//����ʱ��
		builder.setContentTitle("֪ͨ��֪ͨ");//���ñ���
		builder.setContentText("������NotificationDemo");//����֪ͨ����
		builder.setContentIntent(pintent);//��������ͼ
//		builder.setDefaults(Notification.DEFAULT_SOUND);//������ʾ����
//		builder.setDefaults(Notification.DEFAULT_LIGHTS);//����ָʾ��
//		builder.setDefaults(Notification.DEFAULT_VIBRATE);//������
		builder.setDefaults(Notification.DEFAULT_ALL);//������
		Notification notification = builder.build();//4.1����
		//builder.getNotification();
		manager.notify(notification_ID, notification);
	}
}
