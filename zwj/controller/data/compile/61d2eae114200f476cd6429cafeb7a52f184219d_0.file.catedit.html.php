<?php
/* Smarty version 3.1.30, created on 2017-03-14 20:59:04
  from "D:\wamp\www\zwj\view\html\admin\catedit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c7e918e2ff79_54183898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61d2eae114200f476cd6429cafeb7a52f184219d' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\admin\\catedit.html',
      1 => 1475221660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c7e918e2ff79_54183898 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_str_repeat')) require_once 'D:\\wamp\\www\\zwj\\lib\\smarty3\\libs\\plugins\\modifier.str_repeat.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BOOLSHOP 管理中心 - 编辑商品分类 </title>
    <link rel="stylesheet" href="../../view/css/admin/general.css">
    <link rel="stylesheet" href="../../view/css/admin/main.css">
    <?php echo '<script'; ?>
 src="../../view/js/admin/jquery-3.1.0.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 type="text/javascript">
    
        $(function(){
          $('#cat_name').focus();
          $('#cat_name').focus(function(){
              $(this).css('outline','0');
          });
          $('#cat_name').blur(function(e){
           $('.main-div').click(function(){
              var reg=/^.+$/;
                var cat_name=$.trim($('#cat_name').val());
               if(reg.test(cat_name)){
                
                
               }else{
                 $('#cat_name').css('border','1px solid red');
                   $('#cat_name').next().hide();
                   $('#cat_name').next().next().html('-商品分类不能为空！');
                   $('#cat_name').next().next().show();
                   e.preventDefault();
               }
            });
          });
            $('#form').submit(function(e){
                var reg=/^.+$/;
                var cat_name=$.trim($('#cat_name').val());
               if(reg.test(cat_name)){
                $.ajax({
                  url:'cateaddreg.php',
                  type:'POST',
                  dataType:'text',
                  async:false,
                  crossDomain: true == !(document.all),
                  data:{'cat_name':$('#cat_name').val(),
                   'ori_cat_name':$('#ori_cat_name').val(),
                   'parent_id':$('#parent_id').val()  
                },
                  success:function(data){
                        if(data=="true"){
                           e.preventDefault();
                           alert('该分类下的子分类已存在！');
                           
                        }else{
                           //alert('商品分类添加成功');
                        }
                    }
                });
               }else{
                   alert('商品分类不能为空！');
                   $('#cat_name').focus();
                   e.preventDefault();
               }
            });
        });

    <?php echo '</script'; ?>
>
</head>
<body>

<h1>
<span class="action-span"><a href="catelist.php">商品分类</a></span>
<span class="action-span1"><a href="#">BOOLSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 编辑商品分类 </span>
<div style="clear:both"></div>
</h1>

<div class="main-div">
  <form action="cateditAct.php" method="post" name="theForm" enctype="multipart/form-data" id="form">
  <table width="100%" id="general-table">
      <tr>
        <td class="label">分类名称:</td>
        <td>
          <input type='text' name='cat_name' maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['catinfo']->value['cat_name'];?>
" size='27' id="cat_name"/> <font color="red" style="font-size:16px;">*</font>
          <span style="color:red;display:none;">-分类名称不能为空!</span>
        </td>
      </tr>
      <tr>
        <td class="label">上级分类:</td>
        <td>
          <select name="parent_id" id="parent_id">
                        <option value="0">顶级分类</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catlist']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['cat_id'] == $_smarty_tpl->tpl_vars['catinfo']->value['parent_id']) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
" selected="selected">
                          <?php echo smarty_modifier_str_repeat($_smarty_tpl->tpl_vars['v']->value['lev'],"&nbsp;&nbsp;");?>

                          <?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>

                         </option>
                        <?php } else { ?>
                       
                          <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
" >
                          <?php echo smarty_modifier_str_repeat($_smarty_tpl->tpl_vars['v']->value['lev'],"&nbsp;&nbsp;");?>

                          <?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</option>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                       
                      </select>
        </td>
      </tr>
       <tr>
        <td class="label">数量单位:</td>
        <td>
          <input type='text' name='measure_unit' value="<?php echo $_smarty_tpl->tpl_vars['catinfo']->value['measure_unit'];?>
" maxlength="20" value='' size='27' /> 
        </td>
      </tr>
       <tr>
        <td class="label">排序:</td>
        <td>
          <input type='text'  value="<?php echo $_smarty_tpl->tpl_vars['catinfo']->value['sort_order'];?>
" name='sort_order' maxlength="20" value='' size='27' />
        </td>
      </tr>
      <tr>
        <td class="label">是否显示:</td>
        <?php if ($_smarty_tpl->tpl_vars['catinfo']->value['is_show'] == 1) {?>
        <td>
            <input type='radio' name='is_show' value="1" checked="checked"/><span>是</span>
            <input type='radio' name='is_show' value="0"/><span>否</span>
        </td>
        <?php } else { ?>
        <td>
            <input type='radio' name='is_show' value="1" /><span>是</span>
            <input type='radio' name='is_show' value="0" checked="checked"/><span>否</span>
        </td>
        <?php }?>
      </tr>
       <tr>
        <td class="label">是否显示在导航栏:</td>
         <?php if ($_smarty_tpl->tpl_vars['catinfo']->value['show_in_nav'] == 1) {?>
        <td>
            <input type='radio' name='show_in_nav' value="1" checked="checked"/><span>是</span>
            <input type='radio' name='show_in_nav' value="0" /><span>否</span>
        </td>
        <?php } else { ?>
        <td>
            <input type='radio' name='show_in_nav' value="1" /><span>是</span>
            <input type='radio' name='show_in_nav' value="0" checked="checked"/><span>否</span>
        </td>
        <?php }?>
      </tr>
      <tr>
        <td class="label">关键字:</td>
        <td>
            <input type='input' name='keywords' value="<?php echo $_smarty_tpl->tpl_vars['catinfo']->value['keywords'];?>
"/>
        </td>
      </tr>
      <tr>
        <td class="label">栏目简介:</td>
        <td>
          <textarea name='cat_desc' rows="6" cols="48"><?php echo $_smarty_tpl->tpl_vars['catinfo']->value['cat_desc'];?>
</textarea>
        </td>
      </tr>
      </table>
      <div class="button-div">
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['catinfo']->value['cat_name'];?>
" name="ori_cat_name" id="ori_cat_name">
        <input type="submit" value=" 确定 " />
        <input type="reset" value=" 重置 " />
      </div>
    <input type="hidden" name="cat_id" value="<?php echo $_smarty_tpl->tpl_vars['catinfo']->value['cat_id'];?>
" />
  </form>
</div>

<div id="footer">
共执行 3 个查询，用时 0.021687 秒，Gzip 已禁用，内存占用 2.081 MB<br />
版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利。</div>

</body>
</html><?php }
}
