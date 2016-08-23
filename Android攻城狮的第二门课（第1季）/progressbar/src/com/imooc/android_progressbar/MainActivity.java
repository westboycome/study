package com.imooc.android_progressbar;

import android.app.Activity;
import android.app.ActionBar;
import android.app.Fragment;
import android.app.ProgressDialog;
import android.content.DialogInterface;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.View.OnClickListener;
import android.view.ViewGroup;
import android.view.Window;
import android.widget.Button;
import android.widget.ProgressBar;
import android.widget.TextView;
import android.widget.Toast;
import android.os.Build;

public class MainActivity extends Activity implements OnClickListener {

	private ProgressBar progress;
	private Button add;
	private Button reduce;
	private Button reset;
	private TextView text;
    private ProgressDialog prodialog;
	private Button show;
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		// ���ô������������ô����ȺͲ������ȵĽ�����
		requestWindowFeature(Window.FEATURE_PROGRESS);
		requestWindowFeature(Window.FEATURE_INDETERMINATE_PROGRESS);
		setContentView(R.layout.main);
		// ��ʾ���ֽ�����
		setProgressBarVisibility(true);
		setProgressBarIndeterminateVisibility(false);
		// Max=10000
		setProgress(9999);
		init();

	}

	private void init() {
		// TODO Auto-generated method stub
		progress = (ProgressBar) findViewById(R.id.horiz);
		add = (Button) findViewById(R.id.add);
		reduce = (Button) findViewById(R.id.reduce);
		reset = (Button) findViewById(R.id.reset);
		text = (TextView) findViewById(R.id.text);
		show=(Button) findViewById(R.id.show);
		show.setOnClickListener(this);
		// ��ȡ��һ�������Ľ���
		int first = progress.getProgress();
		// ��ȡ�ڶ��������Ľ���
		int second = progress.getSecondaryProgress();
		// ��ȡ��������������
		int max = progress.getMax();
		text.setText("��һ���Ȱٷֱȣ�" + (int) (first / (float) max * 100)
				+ "% �ڶ����Ȱٷֱȣ�" + (int) (second / (float) max * 100) + "%");
		add.setOnClickListener(this);
		reduce.setOnClickListener(this);
		reset.setOnClickListener(this);
	}
	@Override
	public void onClick(View v) {
		// TODO Auto-generated method stub
		switch (v.getId()) {
		case R.id.add: {
			// ���ӵ�һ���Ⱥ͵ڶ�����10���̶�
			progress.incrementProgressBy(10);
			progress.incrementSecondaryProgressBy(10);

			break;
		}

		case R.id.reduce: {
			// ���ٵ�һ���Ⱥ͵ڶ�����10���̶�
			progress.incrementProgressBy(-10);
			progress.incrementSecondaryProgressBy(-10);

			break;
		}
		case R.id.reset: {
			progress.setProgress(50);
			progress.setSecondaryProgress(80);
			break;
		}
		
		case R.id.show:
		{
			
			/**
			 * ҳ����ʾ���
			 */
			//�½�ProgressDialog����
			prodialog=new ProgressDialog(MainActivity.this);
			//������ʾ���
			prodialog.setProgressStyle(ProgressDialog.STYLE_HORIZONTAL);
			//���ñ���
			prodialog.setTitle("Ļ����");
			//���öԻ������������Ϣ
			prodialog.setMessage("��ӭ���֧��Ļ����");
			//����ͼ��
			prodialog.setIcon(R.drawable.ic_launcher);
			
			/**
			 * �趨����ProgressBar��һЩ����
			 */
			//�趨������
			prodialog.setMax(100);
			//�趨��ʼ���Ѿ��������Ľ���
			prodialog.incrementProgressBy(50);
			//����������ȷ��ʾ���ȵ�
			prodialog.setIndeterminate(false);
			
			/**
			 * �趨һ��ȷ����ť
			 */
			
			prodialog.setButton(DialogInterface.BUTTON_POSITIVE, "ȷ��", new DialogInterface.OnClickListener() {
				
				@Override
				public void onClick(DialogInterface dialog, int which) {
					// TODO Auto-generated method stub
					Toast.makeText(MainActivity.this, "��ӭ���֧��Ļ����", Toast.LENGTH_SHORT).show();
				}
			});
			
			//�Ƿ����ͨ�����ذ�ť�˳��Ի���
			prodialog.setCancelable(true);
			//��ʾProgressDialog
			prodialog.show();
			
			break;
		}
		
		}
		text.setText("��һ���Ȱٷֱȣ�"+ (int) (progress.getProgress() / (float) progress.getMax() * 100)+ "% �ڶ����Ȱٷֱȣ�"+ (int) (progress.getSecondaryProgress()/ (float) progress.getMax() * 100) + "%");
		
	}

}
