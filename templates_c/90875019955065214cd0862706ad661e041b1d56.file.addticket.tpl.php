<?php /* Smarty version Smarty-3.1.11, created on 2012-09-20 21:12:36
         compiled from ".\templates\default\addticket.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19152505b6aa4652d01-56750398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90875019955065214cd0862706ad661e041b1d56' => 
    array (
      0 => '.\\templates\\default\\addticket.tpl',
      1 => 1334478766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19152505b6aa4652d01-56750398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged_in' => 0,
    'lang' => 0,
    'template' => 0,
    'client_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505b6aa46fffe6_74665000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505b6aa46fffe6_74665000')) {function content_505b6aa46fffe6_74665000($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['logged_in']->value){?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    
    <span class="location">&nbsp;&nbsp;<a href="main.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['admin_home'];?>
</a> / <a href="tickets.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_title'];?>
</a> / <?php echo $_smarty_tpl->tpl_vars['lang']->value['addticket_title'];?>
</span>
    
    <br />
    
    
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      
    <br /><br />
    
    <form action="addticket.php" method="post" name="addclient">
    <table border="0" cellpadding="1" cellspacing="0" width="450" align="center" class="tablez">
      <tr class="table_title" height="20">
        <td align="center" colspan="2"><?php echo $_smarty_tpl->tpl_vars['lang']->value['addticket_details'];?>
</td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      
      <tr>
        <td colspan="2" align="center"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/tickets_add.png" border="0" /><br /><?php echo $_smarty_tpl->tpl_vars['lang']->value['addticket_create'];?>
</td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['addticket_priority'];?>
:&nbsp;</td>
        <td>
	  <select name="priority" style="width:210px">
	    <option value="low"><?php echo $_smarty_tpl->tpl_vars['lang']->value['addticket_low'];?>
</option>
	    <option value="medium" selected><?php echo $_smarty_tpl->tpl_vars['lang']->value['addticket_medium'];?>
</option>
	    <option value="high"><?php echo $_smarty_tpl->tpl_vars['lang']->value['addticket_high'];?>
</option>
	  </select>
        </td>
      </tr>
      
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['addticket_category'];?>
:&nbsp;</td>
        <td>
	  <select name="category" style="width:210px">
	    <option value="support" selected><?php echo $_smarty_tpl->tpl_vars['lang']->value['addticket_support'];?>
</option>
	    <option value="billing"><?php echo $_smarty_tpl->tpl_vars['lang']->value['addticket_billing'];?>
</option>
	    <option value="sales"><?php echo $_smarty_tpl->tpl_vars['lang']->value['addticket_sales'];?>
</option>
	  </select>
        </td>
      </tr>
      
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['addticket_subject'];?>
:&nbsp;</td>
        <td><input type="text" name="subject" class="textbox_normal" style="width:210px"></td>
      </tr>
            
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      
      <tr>
	<td colspan="2" align="center"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['addticket_text'];?>
:</b></td>
      </tr>
      <tr>
        <td height="150" colspan="2" align="center"><textarea name="ticket_text" class="ticket_response"></textarea></td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      
      <tr>
        <td colspan="2" align="center"><input type="submit" name="create" value=" " class="button_create" /></td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table>
    <input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
" />
    </form>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }?>
<?php }} ?>