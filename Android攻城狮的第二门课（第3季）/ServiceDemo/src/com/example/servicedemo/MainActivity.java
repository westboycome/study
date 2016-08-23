package com.example.servicedemo;

import com.example.servicedemo.MyBindService.MyBinder;

import android.app.Activity;
import android.app.Service;
import android.content.ComponentName;
import android.content.Intent;
import android.content.ServiceConnection;
import android.os.Bundle;
import android.os.IBinder;
import android.view.Menu;
import android.view.View;

public class MainActivity extends Activity {
	Intent intent1;
	Intent intent2;
	MyBindService service;
	ServiceConnection conn = new ServiceConnection() {
		
		@Override//�����������Դ�Ͽ���ʱ�� ���Զ��ص�
		public void onServiceDisconnected(ComponentName name) {
			// TODO Auto-generated method stub
			
		}
		
		@Override//�����������Դ���ӵ�ʱ�� ���Զ��ص�
		public void onServiceConnected(ComponentName name, IBinder binder) {
			// TODO Auto-generated method stub
			service = ((MyBinder)binder).getService();
		}
	};
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.main);
	}
	public void doClick(View v){
		switch (v.getId()) {
		case R.id.start:
			 intent1 = 	new Intent(MainActivity.this, MyStartService.class);
			startService(intent1);
			break;

		case R.id.stop:
			stopService(intent1);
			break;
		case R.id.play:
			service.Play();
			break;
		case R.id.pause:
			service.Pause();
			break;
		case R.id.pervious:
			service.Pervious();
			break;
		case R.id.next:
			service.next();
			break;
		case R.id.bind:
			intent2 = new Intent(MainActivity.this, MyBindService.class);
			startService(intent2);
			bindService(intent2, conn, Service.BIND_AUTO_CREATE);
			break;
		case R.id.unbind:
			unbindService(conn);
			break;
		}
	}
	@Override
	protected void onDestroy() {
		// TODO Auto-generated method stub
		stopService(intent2);
		unbindService(conn);
		super.onDestroy();
	}
	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.main, menu);
		return true;
	}

}
