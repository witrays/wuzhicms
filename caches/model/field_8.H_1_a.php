<?php
 return array (
  'point' => 
  array (
    'id' => '410',
    'modelid' => '8',
    'field' => 'point',
    'name' => '所需积分',
    'remark' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'number',
    'setting' => 
    array (
      'fieldtype' => 'int',
      'defaultvalue' => '',
    ),
    'ext_code' => '',
    'unsetgids' => '',
    'unsetroles' => '',
    'master_field' => '1',
    'ban_field' => '0',
    'location' => '0',
    'search_field' => '0',
    'ban_contribute' => '1',
    'to_fulltext' => '1',
    'to_block' => '1',
    'sort' => '0',
    'disabled' => '0',
    'powerful_field' => '0',
    'workflow_field' => '0',
    'master_table' => 'point2goods',
    'attr_table' => '',
  ),
  'surplus' => 
  array (
    'id' => '411',
    'modelid' => '8',
    'field' => 'surplus',
    'name' => '库存数',
    'remark' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'number',
    'setting' => '',
    'ext_code' => '',
    'unsetgids' => '',
    'unsetroles' => '',
    'master_field' => '1',
    'ban_field' => '0',
    'location' => '0',
    'search_field' => '0',
    'ban_contribute' => '1',
    'to_fulltext' => '1',
    'to_block' => '0',
    'sort' => '0',
    'disabled' => '0',
    'powerful_field' => '0',
    'workflow_field' => '0',
    'master_table' => 'point2goods',
    'attr_table' => '',
  ),
  'price' => 
  array (
    'id' => '412',
    'modelid' => '8',
    'field' => 'price',
    'name' => '现金价',
    'remark' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'number',
    'setting' => 
    array (
      'fieldtype' => 'money',
      'defaultvalue' => '',
    ),
    'ext_code' => '',
    'unsetgids' => '',
    'unsetroles' => '',
    'master_field' => '1',
    'ban_field' => '0',
    'location' => '0',
    'search_field' => '0',
    'ban_contribute' => '1',
    'to_fulltext' => '0',
    'to_block' => '1',
    'sort' => '0',
    'disabled' => '0',
    'powerful_field' => '1',
    'workflow_field' => '0',
    'master_table' => 'point2goods',
    'attr_table' => '',
  ),
  'point_money' => 
  array (
    'id' => '501',
    'modelid' => '8',
    'field' => 'point_money',
    'name' => '积分＋现金',
    'remark' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'powerful',
    'setting' => 
    array (
      'formtext' => '<input type="text" name="form[point_money]" id="point_money" value="{FIELD_VALUE}" class="input-text" placeholder="积分">

＋ {price}',
      'fieldtype' => 'mediumint',
      'minnumber' => '1',
    ),
    'ext_code' => '',
    'unsetgids' => '',
    'unsetroles' => '',
    'master_field' => '1',
    'ban_field' => '0',
    'location' => '0',
    'search_field' => '0',
    'ban_contribute' => '1',
    'to_fulltext' => '1',
    'to_block' => '1',
    'sort' => '0',
    'disabled' => '0',
    'powerful_field' => '0',
    'workflow_field' => '0',
    'master_table' => 'point2goods',
    'attr_table' => '',
  ),
  'cid' => 
  array (
    'id' => '365',
    'modelid' => '8',
    'field' => 'cid',
    'name' => '所属栏目',
    'remark' => '',
    'css' => '',
    'minlength' => '1',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '请选择栏目',
    'formtype' => 'cid',
    'setting' => 
    array (
    ),
    'ext_code' => '',
    'unsetgids' => '',
    'unsetroles' => '',
    'master_field' => '1',
    'ban_field' => '1',
    'location' => '5',
    'search_field' => '0',
    'ban_contribute' => '0',
    'to_fulltext' => '0',
    'to_block' => '0',
    'sort' => '1',
    'disabled' => '0',
    'powerful_field' => '0',
    'workflow_field' => '0',
    'master_table' => 'point2goods',
    'attr_table' => '',
  ),
  'title' => 
  array (
    'id' => '366',
    'modelid' => '8',
    'field' => 'title',
    'name' => '标题',
    'remark' => '',
    'css' => '',
    'minlength' => '2',
    'maxlength' => '80',
    'pattern' => '',
    'errortips' => '请输入标题',
    'formtype' => 'title',
    'setting' => 
    array (
    ),
    'ext_code' => '',
    'unsetgids' => '',
    'unsetroles' => '',
    'master_field' => '1',
    'ban_field' => '1',
    'location' => '5',
    'search_field' => '0',
    'ban_contribute' => '0',
    'to_fulltext' => '1',
    'to_block' => '1',
    'sort' => '2',
    'disabled' => '0',
    'powerful_field' => '0',
    'workflow_field' => '0',
    'master_table' => 'point2goods',
    'attr_table' => '',
  ),
  'keywords' => 
  array (
    'id' => '367',
    'modelid' => '8',
    'field' => 'keywords',
    'name' => '关键词',
    'remark' => '多关键词之间用半角逗号“,”隔开',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'keyword',
    'setting' => 
    array (
    ),
    'ext_code' => '',
    'unsetgids' => '',
    'unsetroles' => '',
    'master_field' => '1',
    'ban_field' => '1',
    'location' => '0',
    'search_field' => '1',
    'ban_contribute' => '0',
    'to_fulltext' => '1',
    'to_block' => '0',
    'sort' => '3',
    'disabled' => '0',
    'powerful_field' => '0',
    'workflow_field' => '0',
    'master_table' => 'point2goods',
    'attr_table' => '',
  ),
  'remark' => 
  array (
    'id' => '363',
    'modelid' => '8',
    'field' => 'remark',
    'name' => '摘要',
    'remark' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'textarea',
    'setting' => 
    array (
      'defaultvalue' => '',
      'enablehtml' => '0',
    ),
    'ext_code' => '',
    'unsetgids' => '',
    'unsetroles' => '',
    'master_field' => '1',
    'ban_field' => '1',
    'location' => '0',
    'search_field' => '0',
    'ban_contribute' => '0',
    'to_fulltext' => '1',
    'to_block' => '1',
    'sort' => '4',
    'disabled' => '0',
    'powerful_field' => '0',
    'workflow_field' => '0',
    'master_table' => 'point2goods',
    'attr_table' => '',
  ),
  'thumb' => 
  array (
    'id' => '361',
    'modelid' => '8',
    'field' => 'thumb',
    'name' => '缩略图',
    'remark' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'image',
    'setting' => 
    array (
      'defaultvalue' => '',
      'upload_allowext' => 'gif|jpg|jpeg|png|bmp',
      'watermark' => '0',
      'isselectimage' => '1',
      'images_width' => '',
      'images_height' => '',
    ),
    'ext_code' => '',
    'unsetgids' => '',
    'unsetroles' => '',
    'master_field' => '1',
    'ban_field' => '1',
    'location' => '0',
    'search_field' => '0',
    'ban_contribute' => '0',
    'to_fulltext' => '0',
    'to_block' => '1',
    'sort' => '5',
    'disabled' => '0',
    'powerful_field' => '0',
    'workflow_field' => '0',
    'master_table' => 'point2goods',
    'attr_table' => '',
  ),
  'block' => 
  array (
    'id' => '354',
    'modelid' => '8',
    'field' => 'block',
    'name' => '添加到推荐位',
    'remark' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'block',
    'setting' => 
    array (
    ),
    'ext_code' => '',
    'unsetgids' => '',
    'unsetroles' => '',
    'master_field' => '1',
    'ban_field' => '0',
    'location' => '0',
    'search_field' => '0',
    'ban_contribute' => '0',
    'to_fulltext' => '0',
    'to_block' => '0',
    'sort' => '6',
    'disabled' => '0',
    'powerful_field' => '0',
    'workflow_field' => '0',
    'master_table' => 'point2goods',
    'attr_table' => '',
  ),
  'content' => 
  array (
    'id' => '364',
    'modelid' => '8',
    'field' => 'content',
    'name' => '正文',
    'remark' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'editor',
    'setting' => 
    array (
      'defaultvalue' => '',
      'enablesaveimage' => '1',
      'watermark_enable' => '0',
    ),
    'ext_code' => '',
    'unsetgids' => '',
    'unsetroles' => '',
    'master_field' => '1',
    'ban_field' => '0',
    'location' => '5',
    'search_field' => '0',
    'ban_contribute' => '0',
    'to_fulltext' => '1',
    'to_block' => '0',
    'sort' => '8',
    'disabled' => '0',
    'powerful_field' => '0',
    'workflow_field' => '0',
    'master_table' => 'point2goods',
    'attr_table' => '',
  ),
  'relation' => 
  array (
    'id' => '362',
    'modelid' => '8',
    'field' => 'relation',
    'name' => '相关内容',
    'remark' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'relation',
    'setting' => 
    array (
      'formtext' => '相关内容',
      'fieldtype' => 'tinyint',
      'minnumber' => '1',
    ),
    'ext_code' => '',
    'unsetgids' => '',
    'unsetroles' => '',
    'master_field' => '1',
    'ban_field' => '0',
    'location' => '1',
    'search_field' => '0',
    'ban_contribute' => '0',
    'to_fulltext' => '0',
    'to_block' => '0',
    'sort' => '11',
    'disabled' => '0',
    'powerful_field' => '0',
    'workflow_field' => '0',
    'master_table' => 'point2goods',
    'attr_table' => '',
  ),
  'url' => 
  array (
    'id' => '356',
    'modelid' => '8',
    'field' => 'url',
    'name' => '链接地址',
    'remark' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'url',
    'setting' => 
    array (
    ),
    'ext_code' => '',
    'unsetgids' => '',
    'unsetroles' => '',
    'master_field' => '1',
    'ban_field' => '1',
    'location' => '0',
    'search_field' => '0',
    'ban_contribute' => '0',
    'to_fulltext' => '0',
    'to_block' => '1',
    'sort' => '11',
    'disabled' => '0',
    'powerful_field' => '0',
    'workflow_field' => '0',
    'master_table' => 'point2goods',
    'attr_table' => '',
  ),
  'addtime' => 
  array (
    'id' => '353',
    'modelid' => '8',
    'field' => 'addtime',
    'name' => '添加时间',
    'remark' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'datetime',
    'setting' => 
    array (
      'fieldtype' => 'int',
      'format' => 'Y-m-d H:i:s',
    ),
    'ext_code' => '',
    'unsetgids' => '',
    'unsetroles' => '',
    'master_field' => '1',
    'ban_field' => '1',
    'location' => '1',
    'search_field' => '0',
    'ban_contribute' => '0',
    'to_fulltext' => '0',
    'to_block' => '1',
    'sort' => '12',
    'disabled' => '0',
    'powerful_field' => '0',
    'workflow_field' => '0',
    'master_table' => 'point2goods',
    'attr_table' => '',
  ),
  'allowcomment' => 
  array (
    'id' => '359',
    'modelid' => '8',
    'field' => 'allowcomment',
    'name' => '允许评论',
    'remark' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'box',
    'setting' => 
    array (
      'options' => '允许|1
不允许|0',
      'boxtype' => 'radio',
      'fieldtype' => 'tinyint',
      'minnumber' => '1',
      'size' => '',
      'defaultvalue' => '1',
      'outputtype' => '0',
      'filtertype' => '0',
    ),
    'ext_code' => '',
    'unsetgids' => '',
    'unsetroles' => '',
    'master_field' => '1',
    'ban_field' => '0',
    'location' => '2',
    'search_field' => '0',
    'ban_contribute' => '0',
    'to_fulltext' => '0',
    'to_block' => '0',
    'sort' => '17',
    'disabled' => '0',
    'powerful_field' => '0',
    'workflow_field' => '0',
    'master_table' => 'point2goods',
    'attr_table' => '',
  ),
  'groups' => 
  array (
    'id' => '355',
    'modelid' => '8',
    'field' => 'groups',
    'name' => '用户组权限',
    'remark' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'group',
    'setting' => 
    array (
      'groups' => '4,5',
    ),
    'ext_code' => '',
    'unsetgids' => '',
    'unsetroles' => '',
    'master_field' => '1',
    'ban_field' => '0',
    'location' => '2',
    'search_field' => '0',
    'ban_contribute' => '0',
    'to_fulltext' => '0',
    'to_block' => '0',
    'sort' => '18',
    'disabled' => '0',
    'powerful_field' => '0',
    'workflow_field' => '0',
    'master_table' => 'point2goods',
    'attr_table' => '',
  ),
  'sort' => 
  array (
    'id' => '357',
    'modelid' => '8',
    'field' => 'sort',
    'name' => '权重',
    'remark' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '255',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'slider',
    'setting' => 
    array (
      'defaultvalue' => '0',
    ),
    'ext_code' => '',
    'unsetgids' => '',
    'unsetroles' => '',
    'master_field' => '1',
    'ban_field' => '1',
    'location' => '1',
    'search_field' => '0',
    'ban_contribute' => '0',
    'to_fulltext' => '0',
    'to_block' => '0',
    'sort' => '20',
    'disabled' => '0',
    'powerful_field' => '0',
    'workflow_field' => '0',
    'master_table' => 'point2goods',
    'attr_table' => '',
  ),
  'template' => 
  array (
    'id' => '358',
    'modelid' => '8',
    'field' => 'template',
    'name' => '内容页模板',
    'remark' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'template',
    'setting' => 
    array (
    ),
    'ext_code' => '',
    'unsetgids' => '',
    'unsetroles' => '',
    'master_field' => '1',
    'ban_field' => '0',
    'location' => '1',
    'search_field' => '0',
    'ban_contribute' => '0',
    'to_fulltext' => '0',
    'to_block' => '0',
    'sort' => '21',
    'disabled' => '0',
    'powerful_field' => '0',
    'workflow_field' => '0',
    'master_table' => 'point2goods',
    'attr_table' => '',
  ),
  'status' => 
  array (
    'id' => '360',
    'modelid' => '8',
    'field' => 'status',
    'name' => '稿件状态',
    'remark' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'box',
    'setting' => 
    array (
      'options' => '通过审核|9
待审|1
定时发送|8
草稿|6',
      'boxtype' => 'radio',
      'fieldtype' => 'tinyint',
      'minnumber' => '1',
      'defaultvalue' => '9',
      'outputtype' => '0',
    ),
    'ext_code' => '',
    'unsetgids' => '',
    'unsetroles' => '',
    'master_field' => '1',
    'ban_field' => '1',
    'location' => '0',
    'search_field' => '0',
    'ban_contribute' => '0',
    'to_fulltext' => '0',
    'to_block' => '0',
    'sort' => '30',
    'disabled' => '0',
    'powerful_field' => '0',
    'workflow_field' => '0',
    'master_table' => 'point2goods',
    'attr_table' => '',
  ),
)?>