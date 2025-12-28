<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'             => '必须接受 :attribute',
    'accepted_if'          => '当 :other 是 :value 时，必须接受 :attribute',
    'active_url'           => ':attribute 必须是合法的URL地址',
    'after'                => ':attribute 必须是在 :date 之后的日期',
    'after_or_equal'       => ':attribute 必须等于或者在 :date 之后',
    'alpha'                => ':attribute 只能包含英文字母',
    'alpha_dash'           => ':attribute 只能包含英文字母,数字和减号',
    'alpha_num'            => ':attribute 只能包含英文字母和数字',
    'array'                => ':attribute 必须是数组',
    'before'               => ':attribute 必须是在 :date. 之前的日期',
    'before_or_equal'      => ':attribute 必须等于或者在 :date 之前',
    'between'              => [
        'numeric' => ':attribute 必须在:min - :max之间',
        'file'    => ':attribute 大小必须在:min kb - :max kb 之间',
        'string'  => ':attribute 长度必须在:min - :max 之间',
        'array'   => ':attribute 长度必须在 :min - :max 之间',
    ],
    'boolean'              => ':attribute 的值必须是 true 或者 false',
    'confirmed'            => ':attribute 必须一致',
    'current_password'     => '密码不正确',
    'date_equals'          => ':attribute 必须等于 :date.',
    'date_format'          => ':attribute 必须符合格式 :format',
    'declined'             => ':attribute 必须是 no、off、0 或 false',
    'declined_if'          => '当 :other 是 :value 时，:attribute 必须是 no、off、0 或 false',
    'different'            => ':attribute 必须和 :other 不同',
    'digits'               => ':attribute 位数必须是 :digits',
    'digits_between'       => ':attribute 位数必须在 :min 到 :max 之间',
    'dimensions'           => ':attribute 必须是合法的图片比例或大小.',
    'distinct'             => ':attribute 值必须唯一',
    'email'                => ':attribute 必须是合法的Email格式',
    'ends_with'            => ':attribute 必须以 :values 结尾',
    'enum'                 => '已选的 :attribute 无效',
    'exists'               => ':attribute 不存在',
    'file'                 => ':attribute 必须是正确的文件',
    'filled'               => ':attribute 必须有值',
    'gt'                   => [
        'numeric' => ':attribute 必须大于 :value',
        'file'    => ':attribute 文件大小必须大于 :value kb',
        'string'  => ':attribute 必须大于 :value 字符',
        'array'   => ':attribute 数量必须大于 :value 条',
    ],
    'gte'                  => [
        'numeric' => ':attribute 必须大于或者等于 :value.',
        'file'    => ':attribute 文件大小必须大于或者等于 :value kb.',
        'string'  => ':attribute 必须大于或等于 :value 字符.',
        'array'   => ':attribute 必须存在或者大于 :value 条.',
    ],
    'image'                => ':attribute 必须是图片',
    'in'                   => ':attribute 不合法',
    'in_array'             => ':attribute 不存在于 :other.',
    'integer'              => ':attribute 必须是整数',
    'ip'                   => ':attribute 必须是合法的IP地址',
    'ipv4'                 => ':attribute 必须是标准 IPv4 格式',
    'ipv6'                 => ':attribute 必须是标准 IPv6 格式',
    'lt'                   => [
        'numeric' => ':attribute 必须小于 :value',
        'file'    => ':attribute 文件大小必须小于 :value kb',
        'string'  => ':attribute 必须小于 :value 字符',
        'array'   => ':attribute 数量必须小于 :value 条',
    ],
    'lte'                  => [
        'numeric' => ':attribute 必须小于或者等于 :value.',
        'file'    => ':attribute 文件大小必须小于或者等于 :value kb.',
        'string'  => ':attribute 必须小于或等于 :value 字符.',
        'array'   => ':attribute 必须存在或者小于 :value 条.',
    ],
    'mac_address'          => ':attribute 必须是有效的 MAC 地址',
    'max'                  => [
        'numeric' => ':attribute 不能大于 :max',
        'file'    => ':attribute 文件大小不能大于 :max kb',
        'string'  => ':attribute 长度不能大于 :max',
        'array'   => ':attribute 不得多余 :max 条.',
    ],
    'mimes'                => ':attribute 文件格式必须是 :values 其中之一',
    'mimetypes'            => ':attribute 必须是正确的 :values 格式',
    'min'                  => [
        'numeric' => ':attribute 不能小于 :min',
        'file'    => ':attribute 文件大小不能小于 :min kb',
        'string'  => ':attribute 长度不能小于 :min',
        'array'   => ':attribute 长度必须大于 :min',
    ],
    'multiple_of'          => ':attribute 必须是 :value 的倍数',
    'not_in'               => ':attribute 不合法',
    'not_regex'            => ':attribute 值不合法.',
    'nullable'             => ':attribute 可以为空.',
    'numeric'              => ':attribute 必须是数字',
    'password'             => ':attribute 格式不正确',
    'present'              => ':attribute 字段必须存在',
    'prohibited'           => ':attribute 字段必须为空或者不存在',
    'prohibited_if'        => '当 :other 是 :value 时，:attribute 字段必须为空或者不存在',
    'prohibited_unless'    => '除非 :other 是 :values，否则 :attribute 字段必须为空或者不存在',
    'prohibits'            => ':attribute 字段禁止 :other 出现',
    'regex'                => ':attribute 不合法',
    'required'             => ':attribute 必须填写',
    'required_array_keys'  => ':attribute 字段必须包含 :values 的一个',
    'required_if'          => ':other 为 :value 的时候必须填写 :attribute',
    'required_unless'      => ':attribute 在 :other 是 :values 必填',
    'required_with'        => ':values 填写了的时候也必须填写 :attribute',
    'required_with_all'    => ':attribute 在 :values 值存在的时候必填',
    'required_without'     => ':values 不填写的时候必须填写 :attribute',
    'required_without_all' => ':attribute 当没有 :values 时候必填',
    'same'                 => ':attribute 必须和 :other 相同',
    'size'                 => [
        'numeric' => ':attribute 位数必须是 :size',
        'file'    => ':attribute 大小必须是 :size kb',
        'string'  => ':attribute 长度必须为 :size',
        'array'   => ':attribute 必须存在 :size 个数据',
    ],
    'starts_with'          => ':attribute 必须以 :values 开头',
    'string'               => ':attribute 必须是字符串',
    'timezone'             => ':attribute 时区格式不正确',
    'unique'               => ':attribute 已经存在了',
    'uploaded'             => ':attribute 未上传完成, 超过服务器上传最大尺寸',
    'url'                  => ':attribute 格式不正确',
    'uuid'                 => ':attribute 不是一个合法的UUID.',

    // custom rule
    'mobile'               => ':attribute 格式不正确',
    'json'                 => ':attribute 须是标准的JSON 格式',
    'date'                 => ':attribute 必须是合法的日期',
    'chid'                 => ':attribute 必须是正确的身份证号',
    'simple_pwd'           => ':attribute 输入的密码必须符合规范',
    'username'             => ':attribute 必须是正确的用户名的格式',
    'date_range'           => ':attribute 不是正确的时间范围',
    'urls'                 => ':attribute 必须全部是图片地址, 请等待上传完成, 或者删除未上传成功的图片',
    'captcha'              => ':attribute 不正确',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
    ],

];