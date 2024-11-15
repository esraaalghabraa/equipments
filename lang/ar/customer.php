<?php

return [

    'title' => 'العملاء',

    'label' => 'عميل',

    'name'=>'الاسم',
    'phone'=>'رقم الهاتف',
    'date_of_adding'=>'تاريخ الإضافة',


    'view_details'=>'عرض التفاصيل',

    'last_customers' => 'آخر العملاء',
    'new_customers' => 'العملاء الجدد',
    'add_new_customer' => 'إضافة عميل',

    'empty_table_heading'=>'لا يوجد عملاء',
    'empty_table_description'=>'قم بإضافة عملاء للبدء',

    'actions'=>[
        'delete' => 'حذف العميل',
        'edit' => 'تعديل العميل'
    ],
    'messages'=>[
        'deleted_failed_message'=>'لا يمكنك حذف :name لأنه يملك آليات ضمن النظام. قم بحذف آليات ثم حاول مجدد',
        'deleted_bulk_failed_message'=>'لا يمكنك حذف العملاء التاليون لأنهم يملكون آليات ضمن النظام. قم بحذف آلياتهم ثم حاول مجدداً',
    ],

];
