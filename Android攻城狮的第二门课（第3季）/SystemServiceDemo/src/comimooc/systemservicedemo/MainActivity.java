package comimooc.systemservicedemo;

import android.app.Activity;
import android.app.ActivityManager;
import android.content.Context;
import android.media.AudioManager;
import android.net.ConnectivityManager;
import android.net.NetworkInfo;
import android.net.wifi.WifiManager;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.widget.Toast;

public class MainActivity extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		LayoutInflater inflater = (LayoutInflater) MainActivity.this
				.getSystemService(LAYOUT_INFLATER_SERVICE);
		View view = inflater.inflate(R.layout.activity_main, null);
		setContentView(view);
	}

	public void doClick(View v) {
		switch (v.getId()) {
		case R.id.network:
			if (isNetWorkConnected(MainActivity.this)==true) {
				Toast.makeText(MainActivity.this, "�����Ѿ���", Toast.LENGTH_SHORT).show();
			}else {
				Toast.makeText(MainActivity.this, "����δ����", Toast.LENGTH_SHORT).show();
			}
			break;
		case R.id.enableOrDisable_WIFI:
		WifiManager wifiManager =	(WifiManager) MainActivity.this.getSystemService(WIFI_SERVICE);
			if (wifiManager.isWifiEnabled()) {
				wifiManager.setWifiEnabled(false);
				Toast.makeText(MainActivity.this, "WIFI�Ѿ��ر�", Toast.LENGTH_SHORT).show();
			}else {
				wifiManager.setWifiEnabled(true);
				Toast.makeText(MainActivity.this, "WIFI�Ѿ���", Toast.LENGTH_SHORT).show();
			}
			
		break;
		case R.id.getvoice:
			 AudioManager mAudioManager= (AudioManager) MainActivity.this.getSystemService(AUDIO_SERVICE);
			 int max = mAudioManager.getStreamMaxVolume(AudioManager.STREAM_SYSTEM);
			 int current = mAudioManager.getStreamVolume(AudioManager.STREAM_RING);
			 Toast.makeText(MainActivity.this, "ϵͳ���������Ϊ��"+max+",��ǰ�����ǣ�"+current, Toast.LENGTH_SHORT).show();
			 break;
		case R.id.getPackagename:
			ActivityManager activityManager = (ActivityManager) MainActivity.this.getSystemService(ACTIVITY_SERVICE);
			String packageName = activityManager.getRunningTasks(1).get(0).topActivity.getPackageName();
			Toast.makeText(MainActivity.this, "��ǰ���е�Activity������"+packageName, Toast.LENGTH_SHORT).show();
			break;
		}
	}

	public boolean isNetWorkConnected(Context context) {
		if (context != null) {
			ConnectivityManager mConnectivityManager = (ConnectivityManager) context
					.getSystemService(CONNECTIVITY_SERVICE);
			NetworkInfo mNetWorkInfo = mConnectivityManager
					.getActiveNetworkInfo();
			if (mNetWorkInfo != null) {
				return mNetWorkInfo.isAvailable();
			}
		}
		return false;
	}
}
