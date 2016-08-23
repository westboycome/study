package com.imooc.broadcastreceiverdemo;

import android.app.Activity;
import android.content.Intent;
import android.content.IntentFilter;
import android.os.Bundle;
import android.view.View;

public class MainActivity extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
//		IntentFilter intentfilter = new IntentFilter("BC_One");
//		BC2 bc2 = 	new BC2();
//		registerReceiver(bc2, intentfilter);
	}
	public void doClick(View v){
		switch (v.getId()) {
		case R.id.send1://����һ����ͨ�㲥
			Intent intent = new Intent();
			intent.putExtra("msg", "����һ����ͨ�㲥");
			intent.setAction("BC_One");
			sendBroadcast(intent);
			break;

		case R.id.send2://����һ����ͨ�㲥
			Intent intent2 = new Intent();
			intent2.putExtra("msg", "����һ������㲥");
			intent2.setAction("BC_One");
			sendOrderedBroadcast(intent2, null);
			break;
		case R.id.send3://����һ����ͨ�㲥
			Intent intent3 = new Intent();
			intent3.putExtra("msg", "����һ������㲥");
			intent3.setAction("BC_Three");
			sendStickyBroadcast(intent3);
			IntentFilter intentfilter = new IntentFilter("BC_Three");
			BC3 bc3 = 	new BC3();
			registerReceiver(bc3, intentfilter);
			
			break;
		}
	}
	@Override
	protected void onDestroy() {
		// TODO Auto-generated method stub
		super.onDestroy();
//		unregisterReceiver(receiver);
	}
}
