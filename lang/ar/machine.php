<?php

return [

    'title' => 'الآليات',

    'label' => 'آلية',

    'name'=>'اسم الآلة',
    'date_of_adding'=>'تاريخ الإضافة',


    'type'=>[
        'title'=>'نوع الآلية',
        'add_type'=>'إضافة نوع'
    ],

    'actions'=>[
        'delete' => 'حذف آلية',
        'edit' => 'تعديل آلية'
    ],
    'messages'=>[
        'deleted_failed_message'=>'لا يمكنك حذف :name لأنه يملك إصلاحات ضمن النظام. قم بحذف إصلاحاتها ثم حاول مجدد',
        'deleted_bulk_failed_message'=>'لا يمكنك حذف الآليات هذه لأنهم يملكون إصلاحات ضمن النظام. قم بحذف إصلاحاتهم ثم حاول مجدداً',
    ],
    'serial_number'=>'الرقم التسلسلي',
    'add_new_machine'=>'إضافة آلية',
    'view_details'=>'عرض التفاصيل',
    'last_machines'=>'آخر الآليات',
    'new_machines'=>'الآليات الجدد',

    'empty_table_heading'=>'لا يوجد آليات',
    'empty_table_description'=>'قم بإضافة آليات للبدء'

];
