package com.imooc.filedemo1;

import java.io.File;
import java.io.IOException;

import android.os.Bundle;
import android.app.Activity;
import android.util.Log;
import android.view.Menu;
import android.widget.Toast;

public class MainActivity extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
//		File file = new File("/mnt/sdcard/test");
//		if (!file.exists()) {
//			try {
//				file.createNewFile();
//			} catch (IOException e) {
//				// TODO Auto-generated catch block
//				e.printStackTrace();
//			}
//		}else {
//			Toast.makeText(MainActivity.this, "�ļ��Ѿ�����", 1000);
//		}
//		file.delete();
		
//			File file = this.getFilesDir();//���Ŀ¼�ǵ�ǰӦ�ó���Ĭ�ϵ����ݴ洢Ŀ¼
//			Log.i("info", file.toString());
//		File file = this.getCacheDir();//���Ŀ¼�ǵ�ǰӦ�ó���Ĭ�ϵĻ����ļ��Ĵ��λ��
//		//��һЩ���Ƿǳ���Ҫ���ļ��ڴ˴����� ʹ��
//		//����ֻ����ڴ治���ʱ�� ϵͳ���Զ�ȥɾ��APP��cacheĿ¼������
//		Log.i("info", file.toString());
//		/data/data/<����>/app_imooc
//		File file = this.getDir("imooc", MODE_PRIVATE);
//		Log.i("info", file.toString());
//		this.getExternalFilesDir(type);
		//���Եõ��ⲿ�Ĵ洢λ�� ��λ�õ����ݸ����õ�ʹ����һ����
		//���APPж���� �����������Ҳ���Զ������
		File file = this.getExternalCacheDir();
		Log.i("info", file.toString());
	//���˵�����߲����������Ĺ��� �������ݷ��� data/data/<����>
//			/mnt/sdcard/Android/data/<����>
//		ж��֮�����ݽ������Զ������ ���������ν����������
	}

	

}
