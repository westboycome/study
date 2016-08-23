package com.example.android_viewpager;

import java.util.ArrayList;
import java.util.List;

import android.app.Activity;
import android.app.ActionBar;
import android.graphics.Color;
import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentActivity;
import android.support.v4.view.PagerTabStrip;
import android.support.v4.view.ViewPager;
import android.support.v4.view.ViewPager.OnPageChangeListener;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Toast;


public class MainActivity extends FragmentActivity implements OnPageChangeListener{

	private ViewPager pager;
	private List<View>viewList;
	private List<String>titleList;
	private PagerTabStrip tab;
	private List<Fragment>fragList;
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.main);
        			
   
        View view1 = View.inflate(this, R.layout.view1, null);
        View view2 = View.inflate(this, R.layout.view2, null);
        View view3 = View.inflate(this, R.layout.view3, null);
        View view4 = View.inflate(this, R.layout.view4, null);
        
		viewList=new ArrayList<View>();
		viewList.add(view1);
		viewList.add(view2);
		viewList.add(view3);
		viewList.add(view4);
		
		titleList=new ArrayList<String>();
		titleList.add("��һҳ");
		titleList.add("�ڶ�ҳ");
		titleList.add("����ҳ");
		titleList.add("����ҳ");
		
		tab=(PagerTabStrip) findViewById(R.id.tab);
		tab.setBackgroundColor(Color.YELLOW);
		tab.setTabIndicatorColor(Color.BLUE);
		tab.setDrawFullUnderline(false);
		tab.setTextColor(Color.RED);
		
		
		pager=(ViewPager) findViewById(R.id.pager);
		MyViewPagerAdapter adapter=new MyViewPagerAdapter(viewList, titleList);
		pager.setAdapter(adapter);
		
		fragList=new ArrayList<Fragment>();
		fragList.add(new Fragment1());
		fragList.add(new Fragment2());
		fragList.add(new Fragment3());
		fragList.add(new Fragment4());
	
//		MyFragmentPagerAdapter adapter2=new MyFragmentPagerAdapter(getSupportFragmentManager(), fragList, titleList);
//		pager.setAdapter(adapter2);		
		
//		
//		MyFragmentPagerAdapter2 adapter3=new MyFragmentPagerAdapter2(getSupportFragmentManager(), fragList, titleList);
//		pager.setAdapter(adapter3);	
		pager.setOnPageChangeListener(this);
	}

	@Override
	public void onPageScrollStateChanged(int arg0) {
		// TODO Auto-generated method stub
		
	}

	@Override
	public void onPageScrolled(int arg0, float arg1, int arg2) {
		// TODO Auto-generated method stub
		
	}

	@Override
	public void onPageSelected(int arg0) {
		// TODO Auto-generated method stub
	
		Toast.makeText(this, "���ǵ�"+(arg0+1)+"������", Toast.LENGTH_SHORT).show();
	}



}
