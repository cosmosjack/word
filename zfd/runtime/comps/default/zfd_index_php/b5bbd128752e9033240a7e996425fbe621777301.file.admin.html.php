<?php /* Smarty version Smarty-3.1.8, created on 2017-10-12 01:41:16
         compiled from "E:/UPUPW/UPUPW_AP5.5_64/vhosts/log.shikexu.com/zfd/home/views/default\index\admin.html" */ ?>
<?php /*%%SmartyHeaderCode:3235759de5266eba8f4-72027231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5bbd128752e9033240a7e996425fbe621777301' => 
    array (
      0 => 'E:/UPUPW/UPUPW_AP5.5_64/vhosts/log.shikexu.com/zfd/home/views/default\\index\\admin.html',
      1 => 1507743654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3235759de5266eba8f4-72027231',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59de526702f6a7_80019370',
  'variables' => 
  array (
    'res' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59de526702f6a7_80019370')) {function content_59de526702f6a7_80019370($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>祝丰达</title>
    <meta name="keywords" content="祝丰达">
    <meta name="description" content="祝丰达">

    <link rel="shortcut icon" href="favicon.ico"> <link href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">

    <!-- Data Tables -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/style.min.css?v=4.0.0" rel="stylesheet"><base target="_blank">

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>基本 <small>分类，查找</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="table_data_tables.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="table_data_tables.html#">选项1</a>
                            </li>
                            <li><a href="table_data_tables.html#">选项2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                        <tr>
                            <th>名字</th>
                            <th>电话</th>
                            <th>微信号</th>
                            <th>放假时间</th>
                            <th>年纪</th>
                            <th>学院</th>
                            <th>是否想代理</th>
                            <th>申请时间</th>
                            <th>备注</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr class="gradeX">
                            <td>名字</td>
                            <td>电话</td>
                            <td>微信号</td>
                            <td>放假时间</td>
                            <td>年纪</td>
                            <td>学院</td>
                            <td>是否想代理</td>
                            <td>申请时间</td>
                            <td>备注</td>
                        </tr>
                        </tbody>
                        <!--<tfoot>
                        <tr>
                            <th>名字</th>
                            <th>电话</th>
                            <th>微信号</th>
                            <th>放假时间</th>
                            <th>年纪</th>
                            <th>学院</th>
                            <th>是否想代理</th>
                            <th>申请时间</th>
                            <th>备注</th>
                        </tr>
                        </tfoot>-->
                    </table>

                </div>
            </div>
        </div>
        <!--<div class="col-sm-6 h-100 p-lg">
            <p>基本消息</p>
            <button class="btn btn-primary btn-sm demo1">打开示例</button>
        </div>-->
    </div>
</div>

<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/jquery.min.js?v=2.1.4"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/bootstrap.min.js?v=3.3.5"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/plugins/jeditable/jquery.jeditable.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/content.min.js?v=1.0.0"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/plugins/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/record_list.js"></script>


</body>

</html><?php }} ?>