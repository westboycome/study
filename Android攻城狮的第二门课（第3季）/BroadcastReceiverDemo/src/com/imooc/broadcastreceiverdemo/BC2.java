package com.imooc.broadcastreceiverdemo;

import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.Intent;
import android.os.Bundle;

public class BC2 extends BroadcastReceiver{

	@Override
	public void onReceive(Context context, Intent intent) {
		String s = intent.getStringExtra("msg");
		System.out.println("reveiver2�յ���Ϣ��"+s);
//		abortBroadcast();
		Bundle bundle = getResultExtras(true);
		String s2 = bundle.getString("test");
		System.out.println("�õ��Ĵ������ǣ�"+s2);
	}

}
