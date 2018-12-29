<?php
/* Smarty version 3.1.30, created on 2017-03-15 23:49:35
  from "D:\wamp\www\zwj\view\html\admin\goodstypeadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c9628f34cc62_97305268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f854983d137d3ad3d99cd5a4f9afb28bde9d9d3' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\admin\\goodstypeadd.html',
      1 => 1489341446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c9628f34cc62_97305268 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BOOLSHOP 管理中心 - 新建商品类型 </title>
    <link rel="stylesheet" href="../../view/css/admin/general.css">
    <link rel="stylesheet" href="../../view/css/admin/main.css">
    <?php echo '<script'; ?>
 src="../../view/js/admin/jquery-3.1.0.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        
          $(function(){
              $('#form').submit(function(e){
                  var reg=/^.+$/;
                var goods_type_name=$.trim($('#goods_type_name').val());
                if(!reg.test(goods_type_name)){
                  e.preventDefault();
                  alert('-商品名称不能为空');
                }else{
                  $.ajax({
                    url:'goodstypeaddreg.php',
                    type:'POST',
                    dataType:'text',
                    async:false,
                    crossDomain: true == !(document.all),
                    data:{"goods_type_name":goods_type_name},
                    success:function(data){
                      if(data=="true"){
                        e.preventDefault();
                        alert('商品类型名称已存在！');
                        }
                    }
                  });
                }
              });
          });
        
    <?php echo '</script'; ?>
>
</head>
<body>

<h1>
<span class="action-span"><a href="goodstypelist.php">商品类型列表</a></span>
<span class="action-span1"><a href="#">BOOLSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 新建商品类型 </span>
<div style="clear:both"></div>
</h1>

<div class="main-div">
  <form action="goodstypeaddAct.php" method="post" name="theForm" enctype="multipart/form-data" id="form">
  <table width="100%" id="general-table">
      <tr>
        <td class="label">商品类型名称:</td>
        <td>
          <input type='text' name='goods_type_name' maxlength="20" value='' size='27' id="goods_type_name"/> <font color="red">*</font>
        </td>
      </tr>
      <tr>
        <td class="label">属性分组:</td>
        <td>
          <input type='text' name='attr_group' maxlength="20" value='' size='27' /> 
        </td>
      </tr>
      <tr>
        <td class="label">属性是否显示:</td>
        <td>
            <input type='radio' name='enabled' value="1" checked="checked"/><span>是</span>
            <input type='radio' name='enabled' value="0"/><span>否</span>
        </td>
      </tr>
      <tr>
        <td class="label">商品属性描述:</td>
        <td>
          <textarea name='goods_type_desc' rows="6" cols="48"></textarea>
        </td>
      </tr>
      </table>
      <div class="button-div">
        <input type="submit" value=" 确定 " />
        <input type="reset" value=" 重置 " />
      </div>
  </form>
</div>

<div id="footer">
共执行 3 个查询，用时 0.021687 秒，Gzip 已禁用，内存占用 2.081 MB<br />
版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利。</div>

</body>
</html><?php }
}
