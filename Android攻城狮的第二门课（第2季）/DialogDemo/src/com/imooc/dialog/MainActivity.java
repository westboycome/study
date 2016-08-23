package com.imooc.dialog;

import android.app.Activity;
import android.app.AlertDialog;
import android.app.AlertDialog.Builder;
import android.content.DialogInterface;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Toast;

public class MainActivity extends Activity {
	String [] single_list = {"��","Ů","Ů��ʿ","����Ա"};
	String [] multi_list = {"����","����","����","Ů��"};
	String [] item_list = {"��Ŀ����","�߻�","����","����","����Գ"};
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		initEvent();
	}

	/**
	 * ��ʼ������¼�
	 */
	private void initEvent() {
		findViewById(R.id.dialog_btn1).setOnClickListener(
				new OnClickListener() {
					@Override
					public void onClick(View v) {
						// TODO Auto-generated method stub
						showDialog1();
					}
				});
		findViewById(R.id.dialog_btn2).setOnClickListener(
				new OnClickListener() {
					@Override
					public void onClick(View v) {
						// TODO Auto-generated method stub
						showDialog2();
					}
				});
		findViewById(R.id.dialog_btn3).setOnClickListener(
				new OnClickListener() {
					@Override
					public void onClick(View v) {
						// TODO Auto-generated method stub
						showDialog3();
					}
				});
		findViewById(R.id.dialog_btn4).setOnClickListener(
				new OnClickListener() {
					@Override
					public void onClick(View v) {
						// TODO Auto-generated method stub
						showDialog4();
					}
				});
		findViewById(R.id.dialog_btn5).setOnClickListener(
				new OnClickListener() {
					@Override
					public void onClick(View v) {
						// TODO Auto-generated method stub
						showDialog5();
					}
				});
	}

	/**
	 * ��ʾȷ�϶Ի���
	 */
	private void showDialog1() {
		AlertDialog.Builder builder = new AlertDialog.Builder(this);
		builder.setTitle("ȷ�϶Ի���");//���ñ���
		builder.setIcon(R.drawable.ic_launcher);//����ͼ��
		builder.setMessage("ȷ�϶Ի�����ʾ����");//��������
		builder.setPositiveButton("ȷ��", new DialogInterface.OnClickListener() {
			@Override
			public void onClick(DialogInterface dialog, int which) {
				// TODO Auto-generated method stub
				Toast.makeText(MainActivity.this, "�����ȷ����ť��",
						Toast.LENGTH_SHORT).show();
			}
		});
		builder.setNegativeButton("ȡ��",  new DialogInterface.OnClickListener() {
			@Override
			public void onClick(DialogInterface dialog, int which) {
				// TODO Auto-generated method stub
				Toast.makeText(MainActivity.this, "�����ȡ����ť��",
						Toast.LENGTH_SHORT).show();
			}
		});
		AlertDialog dialog = builder.create();//��ȡdialog
		dialog.show();//��ʾ�Ի���
	}
	/**
	 * ��ʾ��ѡ��ť�Ի���
	 */
	private void showDialog2() {
		AlertDialog.Builder builder = new AlertDialog.Builder(this);
		builder.setTitle("ѡ���Ա�");//���ñ���
		builder.setIcon(R.drawable.ic_launcher);//����ͼ��
		builder.setSingleChoiceItems(single_list, 0, new DialogInterface.OnClickListener() {	
			@Override
			public void onClick(DialogInterface dialog, int which) {
				// TODO Auto-generated method stub
				String str = single_list[which];
				Toast.makeText(MainActivity.this, "�������"+str+"��",
						Toast.LENGTH_SHORT).show();
			}
		});
		AlertDialog dialog = builder.create();//��ȡdialog
		dialog.show();//��ʾ�Ի���
	}
	/**
	 * ��ʾ��ѡ��ť�Ի���
	 */
	private void showDialog3() {
		AlertDialog.Builder builder = new AlertDialog.Builder(this);
		builder.setTitle("����");//���ñ���
		builder.setIcon(R.drawable.ic_launcher);//����ͼ��
		builder.setMultiChoiceItems(multi_list, null, new DialogInterface.OnMultiChoiceClickListener() {
			@Override
			public void onClick(DialogInterface dialog, int which, boolean isChecked) {
				// TODO Auto-generated method stub
				if(isChecked){
					Toast.makeText(MainActivity.this, "��ϲ������"+multi_list[which]+"��",
							Toast.LENGTH_SHORT).show();
				}else{
					Toast.makeText(MainActivity.this, "�Ҳ�ϲ��"+multi_list[which]+"�ˣ�",
							Toast.LENGTH_SHORT).show();
				}
			}
		});
		builder.setNegativeButton("ȡ��", new DialogInterface.OnClickListener() {
			@Override
			public void onClick(DialogInterface dialog, int which) {
				// TODO Auto-generated method stub
				dialog.dismiss();
			}
		});
		AlertDialog dialog = builder.create();//��ȡdialog
		dialog.show();//��ʾ�Ի���
	}
	
	/**
	 * ��ʾ�б�Ի���
	 */
	private void showDialog4() {
		AlertDialog.Builder builder = new AlertDialog.Builder(this);
		builder.setTitle("�����б�");//���ñ���
		builder.setIcon(R.drawable.ic_launcher);//����ͼ��
		builder.setItems(item_list, new DialogInterface.OnClickListener() {			
			@Override
			public void onClick(DialogInterface dialog, int which) {
				// TODO Auto-generated method stub
				Toast.makeText(MainActivity.this, "�Ҷ���"+item_list[which]+"��",
						Toast.LENGTH_SHORT).show();
			}
		});
		AlertDialog dialog = builder.create();//��ȡdialog
		dialog.show();//��ʾ�Ի���
	}
	/**
	 * ��ʾ�Զ���Ի���
	 */
	private void showDialog5() {
		LayoutInflater inflater = LayoutInflater.from(this);
		View view = inflater.inflate(R.layout.dialog_layout, null);
		AlertDialog.Builder builder = new AlertDialog.Builder(this);
		builder.setTitle("�Զ���Ի���");//���ñ���
		builder.setIcon(R.drawable.ic_launcher);//����ͼ��
		builder.setView(view);
		AlertDialog dialog = builder.create();//��ȡdialog
		dialog.show();//��ʾ�Ի���
	}
}
