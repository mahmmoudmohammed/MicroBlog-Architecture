<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'                   => 'يجب قبول :attribute.',
    'code_verified_valid'        => 'كود التأكيد غير صحيح',
    'active_url'                 => ':attribute لا يُمثّل رابطًا صحيحًا.',
    'after'                      => 'يجب على :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal'             => ':attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha'                      => 'يجب أن لا يحتوي :attribute سوى على حروف.',
    'alpha_dash'                 => 'يجب أن لا يحتوي :attribute سوى على حروف، أرقام ومطّات.',
    'alpha_num'                  => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط.',
    'array'                      => 'يجب أن يكون :attribute ًمصفوفة.',
    'before'                     => 'يجب على :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal'            => ':attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date.',
    'between'                    => [
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'file'    => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'string'  => 'يجب أن يكون عدد حروف النّص :attribute بين :min و :max.',
        'array'   => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max.',
    ],
    'boolean'                    => 'يجب أن تكون قيمة :attribute إما true أو false .',
    'confirmed'                  => 'حقل التأكيد غير مُطابق للحقل :attribute.',
    'date'                       => ':attribute ليس تاريخًا صحيحًا.',
    'date_equals'                => 'يجب أن يكون :attribute مطابقاً للتاريخ :date.',
    'date_format'                => 'لا يتوافق :attribute مع الشكل :format.',
    'different'                  => 'يجب أن يكون الحقلان :attribute و :other مُختلفين.',
    'digits'                     => 'يجب أن يحتوي :attribute على :digits رقمًا/أرقام.',
    'digits_between'             => 'يجب أن يحتوي :attribute بين :min و :max رقمًا/أرقام .',
    'dimensions'                 => 'الـ :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct'                   => 'للحقل :attribute قيمة مُكرّرة.',
    'email'                      => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية.',
    'exists'                     => 'القيمة المحددة :attribute غير موجودة.',
    'file'                       => 'الـ :attribute يجب أن يكون ملفا.',
    'filled'                     => ':attribute إجباري.',
    'gt'                         => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :value.',
        'file'    => 'يجب أن يكون حجم الملف :attribute أكبر من :value كيلوبايت.',
        'string'  => 'يجب أن يكون طول النّص :attribute أكثر من :value حرف.',
        'array'   => 'يجب أن يحتوي :attribute على أكثر من :value عناصر/عنصر.',
    ],
    'gte'                        => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :value.',
        'file'    => 'يجب أن يكون حجم الملف :attribute على الأقل :value كيلوبايت.',
        'string'  => 'يجب أن يكون طول النص :attribute على الأقل :value حرف.',
        'array'   => 'يجب أن يحتوي :attribute على الأقل على :value عُنصرًا/عناصر.',
    ],
    'image'                      => 'يجب أن يكون :attribute صورةً.',
    'in'                         => ':attribute غير موجود.',
    'enum'                       => ':attribute غير موجود.',
    'in_array'                   => ':attribute غير موجود في :other.',
    'integer'                    => 'يجب أن يكون :attribute عددًا صحيحًا.',
    'ip'                         => 'يجب أن يكون :attribute عنوان IP صحيحًا.',
    'ipv4'                       => 'يجب أن يكون :attribute عنوان IPv4 صحيحًا.',
    'ipv6'                       => 'يجب أن يكون :attribute عنوان IPv6 صحيحًا.',
    'json'                       => 'يجب أن يكون :attribute نصآ من نوع JSON.',
    'lt'                         => [
        'numeric' => 'يجب أن تكون قيمة :attribute أصغر من :value.',
        'file'    => 'يجب أن يكون حجم الملف :attribute أصغر من :value كيلوبايت.',
        'string'  => 'يجب أن يكون طول النّص :attribute أقل من :value حرف.',
        'array'   => 'يجب أن يحتوي :attribute على أقل من :value عناصر/عنصر.',
    ],
    'lte'                        => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :value.',
        'file'    => 'يجب أن لا يتجاوز حجم الملف :attribute :value كيلوبايت.',
        'string'  => 'يجب أن لا يتجاوز طول النّص :attribute :value حرف.',
        'array'   => 'يجب أن لا يحتوي :attribute على أكثر من :value عناصر/عنصر.',
    ],
    'max'                        => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :max.',
        'file'    => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت.',
        'string'  => 'يجب أن لا يتجاوز طول النّص :attribute :max حرف.',
        'array'   => 'يجب أن لا يحتوي :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'mimes'                      => 'يجب أن يكون ملفًا من نوع : :values.',
    'mimetypes'                  => 'يجب أن يكون ملفًا من نوع : :values.',
    'min'                        => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :min.',
        'file'    => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت.',
        'string'  => 'يجب أن يكون طول النص :attribute على الأقل :min حرف.',
        'array'   => 'يجب أن يحتوي :attribute على الأقل على :min عُنصرًا/عناصر.',
    ],
    'not_in'                     => ':attribute موجود.',
    'not_regex'                  => 'صيغة :attribute غير صحيحة.',
    'numeric'                    => 'يجب على :attribute أن يكون رقمًا.',
    'password'                   => [
        'letters'       => 'يجب أن تحتوي :attribute على حرف واحد على الأقل.',
        'mixed'         => 'يجب أن تحتوي :attribute على حرف كبير واحد وحرف صغير واحد على الأقل.',
        'numbers'       => 'يجب أن تحتوي :attribute على رقم واحد على الأقل.',
        'symbols'       => 'يجب أن تحتوي :attribute على رمز واحد على الأقل.',
        'uncompromised' => 'ظهرت :attribute المعطاة في تسرب بيانات. الرجاء اختيار :attribute مختلفة',
    ],
    'present'                    => 'يجب تقديم :attribute.',
    'regex'                      => 'صيغة :attribute غير صحيحة.',
    'required'                   => ':attribute مطلوب.',
    'required_if'                => ':attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless'            => ':attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with'              => ':attribute مطلوب إذا توفّر :values.',
    'required_with_all'          => ':attribute مطلوب إذا توفّر :values.',
    'required_without'           => ':attribute مطلوب إذا لم يتوفّر :values.',
    'required_without_all'       => ':attribute مطلوب إذا لم يتوفّر :values.',
    'same'                       => 'يجب أن يتطابق :attribute مع :other.',
    'size'                       => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية لـ :size.',
        'file'    => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت.',
        'string'  => 'يجب أن يحتوي النص :attribute على :size حرف بالضبط.',
        'array'   => 'يجب أن يحتوي :attribute على :size عنصرٍ/عناصر بالضبط.',
    ],
    'starts_with'                => 'يجب أن يبدأ :attribute بأحد القيم التالية: :values',
    'string'                     => 'يجب أن يكون :attribute نصًا.',
    'timezone'                   => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا.',
    'unique'                     => 'قيمة :attribute مُستخدمة من قبل.',
    'uploaded'                   => 'فشل في تحميل الـ :attribute.',
    'url'                        => 'صيغة الرابط :attribute غير صحيحة.',
    'uuid'                       => ':attribute يجب أن يكون بصيغة UUID سليمة.',
    'e164'                       => ':attribute صيغة الهاتف غير صحيحة',
    'the_given_data_was_invalid' => 'البيانات غير صحيحة.',
    'roles_required'             => 'الأدوار مطلوبة.',
    'invalid_old_password'       => 'كلمة المرور القديمة غير صحيحة.',
    'iban'                       => 'رقم الحساب المصرفي الدولي غير صحيح.',
    'file_existence'             => 'الملف غير موجود.',
    'phone'                      => 'رقم الهاتف غير صالح.',
    'iso_date'                   => 'التاريخ غير صالح يجب أن يكون صيغة ISO8601.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention 'attribute.rule' to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'username'  => [
            'regex' => 'يجب ان لا يحتوى :attribute على مسافات'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of 'email'. This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name'                                      => 'الاسم',
        'username'                                  => 'اسم المُستخدم',
        'email'                                     => 'البريد الإلكتروني',
        'full_name'                                => 'الاسم',
        'password'                                  => 'كلمة المرور',
        'password_confirmation'                     => 'تأكيد كلمة المرور',
        'new_password'                              => 'كلمة السر الجديدة',
        'image'                                     => 'الصورة',
        'type'                                      => 'النوع',
        'from'                                      => 'من',
        'to'                                        => 'إلي',
        'message'                                   => 'محتوي الرسالة',
        'user_id'                                   => 'رقم المستخدم',
        'permissions'                               => 'الصلاحيات',
        'user_name'                                 => 'اسم المستخدم',
        'old_password'                              => 'الرقم السرى القديم',
    ],
];
