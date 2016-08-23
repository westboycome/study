package com.imooc.contentproviderdemo2;

import android.app.Activity;
import android.content.ContentResolver;
import android.content.ContentUris;
import android.content.ContentValues;
import android.net.Uri;
import android.os.Bundle;
import android.provider.ContactsContract.CommonDataKinds.Phone;
import android.provider.ContactsContract.CommonDataKinds.StructuredName;
import android.provider.ContactsContract.Data;
import android.provider.ContactsContract.RawContacts;

public class MainActivity extends Activity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        ContentResolver cr =  getContentResolver();
        //����ϵ���� ����һ������
        ContentValues values = new ContentValues();
       Uri uri =  cr.insert(RawContacts.CONTENT_URI, values);
       Long raw_contact_id = ContentUris.parseId(uri);
       values.clear();
       //��������
       values.put(StructuredName.RAW_CONTACT_ID, raw_contact_id);
       values.put(StructuredName.DISPLAY_NAME, "������");
       values.put(StructuredName.MIMETYPE, StructuredName.CONTENT_ITEM_TYPE);
       uri = cr.insert(Data.CONTENT_URI, values);
       //����绰��Ϣ
       values.clear();
       values.put(Phone.RAW_CONTACT_ID,raw_contact_id);
       values.put(Phone.NUMBER,"13333333333");
       values.put(Phone.MIMETYPE, Phone.CONTENT_ITEM_TYPE);
       uri = cr.insert(Data.CONTENT_URI, values);
    }


    
}
