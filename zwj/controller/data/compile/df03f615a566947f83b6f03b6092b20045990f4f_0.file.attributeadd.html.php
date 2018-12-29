<?php
/* Smarty version 3.1.30, created on 2017-03-14 20:59:26
  from "D:\wamp\www\zwj\view\html\admin\attributeadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c7e92ec96cc2_82043157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df03f615a566947f83b6f03b6092b20045990f4f' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\admin\\attributeadd.html',
      1 => 1485860520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c7e92ec96cc2_82043157 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BOOLSHOP 管理中心 - 添加属性 </title>
   <?php echo '<script'; ?>
 src="../../view/js/admin/jquery-3.1.0.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="../../view/css/admin/general.css">
    <link rel="stylesheet" href="../../view/css/admin/main.css">
    <?php echo '<script'; ?>
>
    
      $(function(){
          $(':radio').click(function(){
              if($(this).val()==1){
                $('.attr_values').prop('disabled',false);
                //$('.attr_values').removeAttr('disabled');
              }else{
                $('.attr_values').val("");
                //$('.attr_values').attr('disabled','disabled');
                $('.attr_values').prop('disabled',true);
              }
          });

          $('#form').submit(function(e){
                  var reg=/^.+$/;
                var attr_name=$.trim($('#attr_name').val());
                if(!reg.test(attr_name)){
                  e.preventDefault();
                  alert('-请输入属性名称。');
                }else {
                  $.ajax({
                    url:'attributeaddreg.php',
                    type:'POST',
                    dataType:'text',
                    async:false,
                    crossDomain: true == !(document.all),
                    data:{"attr_name":attr_name,
                          "goods_type_id":$('#goods_type_id').val()
                     },
                    success:function(data){
                      if(data=="true"){
                        e.preventDefault();
                        alert('该属性名称已存在，请您换一个名称。');
                        }else if($('.attr_input_type:checked').val()==1){
                          var attr_values=$.trim($('.attr_values').val());
                            if( attr_values==""){
                              e.preventDefault();
                              alert('请输入该属性的可选值');
                            }
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
<span class="action-span"><a href="attributelist.php?goods_type_id=<?php echo $_smarty_tpl->tpl_vars['goodstypebyid']->value['goods_type_id'];?>
">商品属性</a></span>
<span class="action-span1"><a href="#">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 添加属性 </span>
<div style="clear:both"></div>
</h1>

<div class="main-div">
  <form action="attributeaddAct.php" method="post" name="theForm" enctype="multipart/form-data" id="form">
  <table width="100%" id="general-table">
      <tr>
        <td class="label">属性名称:</td>
        <td>
          <input type='text' name='attr_name' maxlength="20" value='' size='27' id="attr_name"/> <font color="red">*</font>
        </td>
      </tr>
      <tr>
        <td class="label">所属商品类型:</td>
        <td>
          <select name="goods_type_id" id="goods_type_id">
              <option value="0">请选择...</option>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodstype']->value, 'gp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gp']->value) {
?>
              <?php if ($_smarty_tpl->tpl_vars['gp']->value['goods_type_id'] == $_smarty_tpl->tpl_vars['goodstypebyid']->value['goods_type_id']) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['gp']->value['goods_type_id'];?>
" name="goods_type_name" selected="selected">
                  <?php echo $_smarty_tpl->tpl_vars['gp']->value['goods_type_name'];?>

                </option>
                <?php } else { ?>
                 <option value="<?php echo $_smarty_tpl->tpl_vars['gp']->value['goods_type_id'];?>
" name="goods_type_name" >
                  <?php echo $_smarty_tpl->tpl_vars['gp']->value['goods_type_name'];?>

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
        <td class="label">该属性值得录入方式:</td>
        <td>
            <input type='radio' name='attr_input_type' value="0" 
            checked="checked" class="attr_input_type"/>
            <span>手工录入</span>
            <input type='radio' name='attr_input_type' value="1" class="attr_input_type"/>
            <span>从下面的列表中选择（一行代表一个可选值）</span>
            <input type='radio' name='attr_input_type' value="2" class="attr_input_type"/>
            <span>多行文本框</span>
        </td>
      </tr>
      <tr>
        <td class="label">可选值列表:</td>
        <td>
          <textarea class="attr_values" name='attr_values' rows="6" cols="48" disabled="disabled" ></textarea>
        </td>
      </tr>
      <tr>
        <td class="label" >必填属性：</td>
            <td ><input type="checkbox"
              name="show_in_front" value="1" />
              打勾表示为必填属性，如尺码必须填写相应的值，否则为普通属性。</td>
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
