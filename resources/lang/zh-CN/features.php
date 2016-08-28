<?php

return [
   'one_is_required'           => '（至少需要一张图片）',
   'default_values'            => '默认值',
   'defaults_method_not_exist' => '您请求的方法不存在',
   'defaults_required'         => '必需有默认值',
   'help_message'              => '帮助信息',
   'help_messages'             => '帮助信息',
   'helper_method'             => '指定帮助方法名（该方法需预先编制好）',
   'max_num_values'            => '最大值',
   'maximum_number'            => '出于安全原因，允许的最大值为：',
   'msg_help_max_num_values'   => '指定您在一件商品中重复这个特征的可能次数。',
   'msg_help_type_input'       => '这会是在商品表单中显示的输入值',
   'msg_help_type_product'     => '指定拥有这个特征的商品种类',
   'new_feature'               => '新特征',
   'number_characters'         => '字符数',
   'numerical_validation'      => '数值验证',
   'product_features'          => '商品特征',
   'insert_message'            => '特征保存成功.',
   'update_message'            => '特征更新成功.',
   'new_product_feature'       => '新的商品特征',
   'select_condition'          => '选择状况',
   'separate_with_bar'         => '请用“|”符号进行分隔',
   'separate_with_commas'      => '请用逗号进行分隔',
   'type_data'                 => '数据类型',
   'type_input'                => '输入类型',
   'type_message'              => '信息类型',
   'type_product'              => '商品类型',
   'use_bar'                   => '使用“|”符号确定数值',
   'validation'                => '验证',
   'view_product_detail'       => '查看商品详情',
   'view_product_form'         => '查看商品表单',
   //'only_numerical_values'     => '仅限数字',
   'is_invalid'                                  => '无效',
   'is_required'                                 => '必需',
   'validation_rules_numerical_validation_array' => [
      ''              => '',
      'maximum_value' => '最大值',
      'minimum_value' => '最小值',
      'range_values'  => '取值范围',
   ],
   'validation_rules_number_characters_array' => [
      ''                   => '',
      'maximum_characters' => '最大字符个数',
      'minimum_characters' => '最小字符个数',
      'character_range'    => '字符个数范围',
   ],
   'validation_rules_type_data_array' => [
      ''             => '',
      'alphanumeric' => '字母或数字',
      'letters'      => '字母',
      'numeric'      => '数字',
      // 'personalized_value' => '根据值个性化',
   ],
   'validation_rules_array' => [
      ''                => '',
      'all_required'    => '全部必需',
      'one_required'    => '至少需要一个',
      'required_number' => '需要数量',
   ],
   'validation_rules__msg_help_array' => [
      'msg_help_all_required'       => '这个特征的所有输入项皆必填',
      'msg_help_alphanumeric'       => '所有输入项都必须是字母或数字',
      'msg_help_character_range'    => '指定字符个数范围',
      'msg_help_letters'            => '所有输入项都必须是字母',
      'msg_help_maximum_characters' => '指定最大字符个数',
      'msg_help_maximum_value'      => '指定能接受的最大数值',
      'msg_help_minimum_characters' => '指定最小字符个数',
      'msg_help_minimum_value'      => '指定能接受的最小数值',
      'msg_help_numeric'            => '所有输入项都必须是数字',
      'msg_help_one_required'       => '这个特征至少需要填写一项输入项',
      'msg_help_personalized_value' => '指定该输入项的数据类型',
      'msg_help_range_values'       => '指定可能输入值的范围',
      'msg_help_required_number'    => '如果下个输入项被指定，则此项必填',
   ],
   'default_values_array' => [
      ''                     => '',
      'general'              => '常规',
      'specific_data'        => '特定数据',
      'custom_General'       => '自定义常规',
      'custom_specific_data' => '自定义特定数据',
   ],
   'default_values_msg_help_array' => [
      'msg_help_checkbox_data'        => '用“|”符号来分隔，或指定帮助方法名（该方法需预先编制好）',
      // 'msg_help_checkbox_data'        => '用逗号来分隔，或指定帮助方法名（该方法需预先编制好）',
      'msg_help_custom_General'       => '将会被选择的取值，拥有特殊行为或已在代码中定义好',
      'msg_help_custom_specific_data' => '将会被选择的取值，拥有特殊行为，或对于每个数据已在代码中定义好（取值个数最小为2）',
      'msg_help_general'              => '要选择的取值',
      'msg_help_specific_data'        => '为每个数据要选择的取值（取值个数最小为2）',
      'msg_help_repeat_values'        => '默认数据，对应取值 No.',
   ],
   'help_messages_array' => [
      ''                   => '',
      'general'            => '常规',
      'specific'           => '特定',
      'general_selection'  => '常规选择',
      'specific_selection' => '特定选择',
   ],
   'help_messages_msg_help_array' => [
      'msg_help_general'             => '对于这个属性的独有信息',
      'msg_help_general_selection'   => '输入一组信息，用“|”符号分隔，这组信息将是这个属性的可选项。',
      'msg_help_help_messages'       => '帮助信息可以完善这个属性数据的信息，帮助用户理解（比如“重量”属性的帮助信息可以是“克、千克、磅”）。',
      'msg_help_specific'            => '对于这个属性的每一项的信息',
      'msg_help_specific_selection'  => '输入一组信息，用“|”符号分隔，这组信息将是这个属性每一项的可选项。',
      'msg_help_type_message'        => '代表显示帮助信息的不同方式，通过商品或别的视图的表单中。',
      'msg_help_repeat_values'       => '信息，对应取值 No.',
   ],
   'validation_messages' => [
      'status.in'                        => '无效状态',
      'name.required'                    => '名字必填',
      'input_type.required'              => '输入类型必填',
      'type_products.required'           => '商品类型必填',
      'default.required_if'              => '当该类型被选中时，默认项必填',
      'default2.required_if'             => '当该类型被选中时，默认项必填',
      'condition.in'                     => '默认状况无效',
      'type_data.in'                     => '数据类型无效',
      'numerical_validation.in'          => '数字验证的状态无效',
      'number_characters.in'             => '字符个数验证的状态无效',
      'start_value_number.numeric'       => '所接受的值必须是数字',
      'end_value_number.required_if'     => '所接受的最大值必填',
      'end_value_number.numeric'         => '所接受的最大值必须是数字',
      'start_value_characters.numeric'   => '字符个数数量必须是数字',
      'end_value_characters.required_if' => '所接受的字符个数最大值必填',
      'end_value_characters.numeric'     => '字符个数数量必须是数字',
      'type_message.in'                  => '类型信息无效',
   ],
];