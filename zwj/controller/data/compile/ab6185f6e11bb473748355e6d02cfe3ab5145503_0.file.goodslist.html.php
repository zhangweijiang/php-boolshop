<?php
/* Smarty version 3.1.30, created on 2017-04-18 01:24:36
  from "D:\wamp\www\zwj\view\html\admin\goodslist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f4fa544c5935_54014584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab6185f6e11bb473748355e6d02cfe3ab5145503' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\admin\\goodslist.html',
      1 => 1492449871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f4fa544c5935_54014584 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_str_repeat')) require_once 'D:\\wamp\\www\\zwj\\lib\\smarty3\\libs\\plugins\\modifier.str_repeat.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<title>BOOLSHOP 管理中心 - 商品列表 </title>
<link rel="stylesheet" href="../../view/css/admin/general.css">
<link rel="stylesheet" href="../../view/css/admin/main.css">
<?php echo '<script'; ?>
 src="/zwj/view/js/admin/jquery-3.1.0.js"><?php echo '</script'; ?>
>
<style>

  input,pre{
    font-size: 13px;
    font-family: '宋体';
  }
  td{
    text-align: center;
  }

</style>
<?php echo '<script'; ?>
 type="text/javascript">

  $(function(){
    //获取文本宽度
    var textWidth = function(text){ 
        var sensor = $('<pre>'+ text +'</pre>').css({display: 'none'}); 
        $('body').append(sensor); 
        var width = sensor.width();
        sensor.remove(); 
        return width+2;
    };
    //input宽度自适应
    $("input.can_edit_input").unbind('keydown').bind('keydown', function(){
        $(this).width(textWidth($(this).val()));
    }); 
    $('input.can_edit_input').each(function(){
      $(this).width(textWidth($(this).val()));
      $(this).css('border','1px solid transparent');
      $(this).hover(function(){
          $(this).css('background','#278296');
      },function(){
        $(this).css('background','none');
      });
      $(this).focus(function(){
        $(this).width(textWidth($(this).val())+13);
        $(this).css('background','none');
      });
    });
    

    $('td>img').click(function(){
      //下拉框里的属性
      // var cat_id=$('#cat_id').val();
      // var intro_type=$('#intro_type').val();
      // var brand_id=$('#brand_id').val();
      // var provider_name=$('#provider_name').val();
      // var is_on_sale=$('#is_on_sale').val();
      //表单里的属性
      var goods_id=$(this).attr('goods_id');
      var value=$(this).attr('value');
      var name=$(this).attr('name');
          $.ajax({
                      url:'/zwj/controller/admin/goodslist_edit.php',
                      type:'POST',
                      dataType:'text',
                      async:false,
                      data:{'name':name,
                      'value':value,
                      "goods_id":goods_id
                          },
                       success:function(data){
                       
                           
                            $('#searchForm').submit();
                          
                          
                       }
              });
    });
    
    var ori_shop_price=$('#shop_price').val();
    var ori_goods_number=$('#goods_number').val();
    $('td>input.can_edit_input').change(function(){
      var shop_price=$('#shop_price').val();
      var goods_number=$('#goods_number').val();
      if(isNaN(shop_price)||$.trim(shop_price)==""){
        shop_price=ori_shop_price;
        alert("您输入了一个非法的市场价格");
        $('#shop_price').val(shop_price);
      }else if(isNaN(goods_number)){
        goods_number=ori_goods_number;
        alert("商品库存数量错误");
        $('#goods_number').val(ori_goods_number);
      }else{
        var goods_id=$(this).attr('goods_id');
        var value=$(this).val();
        var name=$(this).attr('name');
            $.ajax({
                        url:'/zwj/controller/admin/goodslist_edit.php',
                        type:'POST',
                        dataType:'text',
                        async:false,
                        data:{'name':name,
                        'value':value,
                        "goods_id":goods_id
                            },
                         success:function(data){
                            if(data==1){
                              $('#searchForm').submit();
                            }else{
                              alert("您输入的货号已存在，请换一个");
                              $('#searchForm').submit();
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
<span class="action-span"><a href="goodsadd.php">添加新商品</a></span>
<span class="action-span1"><a href="#">BOOLSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品列表 </span>
<div style="clear:both"></div>
</h1>

<div class="form-div">

  <form action="/zwj/controller/admin/goodsSearch.php" name="searchForm" method="post" id="searchForm">
    <img src="../../view/images/admin/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
      
    <select name="cat_id" id="cat_id"><option value="0">所有分类</option>             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catlist']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['data']->value['cat_id'] == $_smarty_tpl->tpl_vars['v']->value['cat_id']) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
" selected="selected">
                  <?php echo smarty_modifier_str_repeat($_smarty_tpl->tpl_vars['v']->value['lev'],"&nbsp;&nbsp;");?>

                  <?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>

                </option>
                <?php } else { ?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
">
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

   
    <select name="brand_id" id="brand_id"><option value="">所有品牌</option>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brand']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
                  <?php if ($_smarty_tpl->tpl_vars['data']->value['brand_id'] == $_smarty_tpl->tpl_vars['b']->value['brand_id']) {?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['b']->value['brand_id'];?>
" selected="selected">
                    <?php echo $_smarty_tpl->tpl_vars['b']->value['brand_name'];?>

                  </option>
                  <?php } else { ?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['b']->value['brand_id'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['b']->value['brand_name'];?>

                  </option>
                  <?php }?>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </select>

    
    <select name="intro_type" id="intro_type"><option value="">全部</option>
      <?php if ($_smarty_tpl->tpl_vars['data']->value['intro_type'] == "is_best") {?>
      <option value="is_best" selected="selected">精品</option><option value="is_new">新品</option><option value="is_hot">热销</option>
      <?php } elseif ($_smarty_tpl->tpl_vars['data']->value['intro_type'] == "is_new") {?>
      <option value="is_best" >精品</option><option value="is_new" selected="selected">新品</option><option value="is_hot">热销</option>
      <?php } elseif ($_smarty_tpl->tpl_vars['data']->value['intro_type'] == "is_hot") {?>
      <option value="is_best" >精品</option><option value="is_new">新品</option><option value="is_hot" selected="selected">热销</option>
      <?php } else { ?>
      <option value="is_best" >精品</option><option value="is_new">新品</option><option value="is_hot">热销</option>
      <?php }?>
    </select>
         
     
      <select name="provider_name" id="provider_name"><option value="">全部</option>
        <?php if ($_smarty_tpl->tpl_vars['data']->value['provider_name'] == "北京供货商") {?>
        <option value="北京供货商" selected="selected">北京供货商</option>
        <option value="上海供货商">上海供货商</option>
        <?php } elseif ($_smarty_tpl->tpl_vars['data']->value['provider_name'] == "上海供货商") {?>
        <option value="北京供货商" >北京供货商</option>
        <option value="上海供货商" selected="selected">上海供货商</option>
        <?php } else { ?>
        <option value="北京供货商" >北京供货商</option>
        <option value="上海供货商" >上海供货商</option>
        <?php }?>
              </select>

            
      <select name="is_on_sale" id="is_on_sale"><option value=''>全部</option>
        <?php if ($_smarty_tpl->tpl_vars['data']->value['is_on_sale'] == '1') {?>
        <option value="1" selected="selected">上架</option><option value="0">下架</option>
        <?php } elseif ($_smarty_tpl->tpl_vars['data']->value['is_on_sale'] == '0') {?>
        <option value="1" >上架</option><option value="0" selected="selected">下架</option>
        <?php } else { ?>
        <option value="1" >上架</option><option value="0">下架</option>
        <?php }?>
      </select>
      
    关键字 <input type="text" name="keywords" size="15" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['keywords'];?>
" id="keywords"/>
    <input type="submit" value=" 搜索 " class="button" />
  </form>
</div>
<form method="post" action="" name="listForm" >

  <div class="list-div" id="listDiv">
<table cellpadding="3" cellspacing="1">
  <tr>
    <th>
      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" />
      <a href="#">编号</a><img src="../../view/images/admin/sort_desc.gif"/>    </th>

    <th><a href="#">商品名称</a></th>
    <th><a href="#">货号</a></th>
    <th><a href="#">价格</a></th>
    <th><a href="#">上架</a></th>
    <th><a href="#">精品</a></th>
    <th><a href="#">新品</a></th>

    <th><a href="#">热销</a></th>
        <th><a href="#">库存</a></th>
        <th>操作</th>
   </tr>
  <tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodslist']->value, 'g');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
?>
    <td><input type="checkbox" name="checkboxes[]"  /><?php echo $_smarty_tpl->tpl_vars['g']->value['goods_id'];?>
</td>

    <td ><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_name'];?>
" class="can_edit_input" name="goods_name" goods_id="<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_id'];?>
"></td>
    <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_sn'];?>
" class="can_edit_input" name="goods_sn" goods_id="<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_id'];?>
"></td>
    <td ><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['g']->value['shop_price'];?>
" class="can_edit_input" name="shop_price" goods_id="<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_id'];?>
" id="shop_price"></td>
    <td align="center"><?php if ($_smarty_tpl->tpl_vars['g']->value['is_on_sale'] == 1) {?><img src="../../view/images/admin/yes.gif"  goods_id="<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_id'];?>
" value="0" name="is_on_sale"/><?php } else { ?><img src="../../view/images/admin/no.gif"  goods_id="<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_id'];?>
" value="1" name="is_on_sale"/><?php }?></td>
    <td align="center"><?php if ($_smarty_tpl->tpl_vars['g']->value['is_best'] == 1) {?><img src="../../view/images/admin/yes.gif"  goods_id="<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_id'];?>
" value="0" name="is_best"/><?php } else { ?><img src="../../view/images/admin/no.gif"  goods_id="<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_id'];?>
" value="1" name="is_best"/><?php }?></td>
    <td align="center"><?php if ($_smarty_tpl->tpl_vars['g']->value['is_new'] == 1) {?><img src="../../view/images/admin/yes.gif"  goods_id="<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_id'];?>
" value="0" name="is_new"/><?php } else { ?><img src="../../view/images/admin/no.gif"  goods_id="<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_id'];?>
" value="1" name="is_new"/><?php }?></td>
    <td align="center"><?php if ($_smarty_tpl->tpl_vars['g']->value['is_hot'] == 1) {?><img src="../../view/images/admin/yes.gif"  goods_id="<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_id'];?>
" value="0" name="is_hot"/><?php } else { ?><img src="../../view/images/admin/no.gif"  goods_id="<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_id'];?>
" value="1" name="is_hot"/><?php }?></td>
        <td ><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_number'];?>
" class="can_edit_input" name="goods_number" goods_id="<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_id'];?>
" id="goods_number"></td>
        <td >
      <a href="/zwj/controller/front/goods.php?goods_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_id'];?>
" target="_blank" title="查看"><img src="../../view/images/admin/icon_view.gif" width="16" height="16" border="0" /></a>
      <a href="goodsedit.php?goods_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_id'];?>
" title="编辑"><img src="../../view/images/admin/icon_edit.gif" width="16" height="16" border="0" /></a>
    <!--  <a href="#" title="复制"><img src="../../view/images/admin/icon_copy.gif" width="16" height="16" border="0" /></a>-->
      <a href="goodstrash.php?goods_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['goods_id'];?>
"  title="回收站"><img src="../../view/images/admin/icon_trash.gif" width="16" height="16" border="0" /></a></td>
  </tr>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </table>



</div>
</form>

<div id="footer">
共执行 7 个查询，用时 0.112141 秒，Gzip 已禁用，内存占用 3.085 MB<br />
版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利。</div>
</body>
</html><?php }
}
