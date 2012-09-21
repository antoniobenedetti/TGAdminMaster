<?php /* Smarty version Smarty-3.1.11, created on 2012-09-20 16:53:14
         compiled from ".\templates\default\editsettings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14478505b2dda529dc9-56626961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ee703fdb6232d479d59b4e34de3d71b5c13652f' => 
    array (
      0 => '.\\templates\\default\\editsettings.tpl',
      1 => 1334478766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14478505b2dda529dc9-56626961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged_in' => 0,
    'user_details' => 0,
    'lang' => 0,
    'infobox' => 0,
    'languages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505b2dda677826_86456576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505b2dda677826_86456576')) {function content_505b2dda677826_86456576($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['logged_in']->value){?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['db'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['db']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['name'] = 'db';
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_details']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['db']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['db']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['db']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['db']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['db']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['db']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['total']);
?>
    
    
    <span class="location">&nbsp;&nbsp;<a href="main.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['home'];?>
</a> / <?php echo $_smarty_tpl->tpl_vars['lang']->value['editclient_nav_edit_account'];?>
</span>
    
    <br />
    
    
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      
      
    <br /><br />



    <?php if ($_smarty_tpl->tpl_vars['infobox']->value){?>
    <table border="0" cellpadding="0" cellspacing="0" width="600" align="center" class="infobox">
      <tr>
        <td align="center"><br /><?php echo $_smarty_tpl->tpl_vars['infobox']->value;?>
<br /><br /></td>
      </tr>
    </table><br />
    <?php }?>



    <form action="editsettings.php" method="post">
    <table border="0" cellpadding="1" cellspacing="0" width="400" align="center" class="tablez">
      <tr class="table_title" height="20">
        <td align="center" colspan="2"><?php echo $_smarty_tpl->tpl_vars['lang']->value['editclient_nav_edit_account'];?>
</td>
      </tr>
                  
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['password'];?>
:&nbsp;</td>
        <td><input type="password" name="cur_password" class="textbox_normal" style="width:170px" value="" /></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['password_new'];?>
:&nbsp;</td>
        <td><input type="password" name="new_password" class="textbox_normal" style="width:170px" value="" /></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['password_confirm'];?>
:&nbsp;</td>
        <td><input type="password" name="new_password_confirm" class="textbox_normal" style="width:170px" value="" /></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['editclient_no_pass_change'];?>
</td>
      </tr>

      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['first_name'];?>
:&nbsp;</td>
        <td><input type="text" name="first_name" class="textbox_normal" style="width:170px" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['user_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['first_name']);?>
"></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['middle_name'];?>
:&nbsp;</td>
        <td><input type="text" name="middle_name" class="textbox_normal" style="width:170px" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['user_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['middle_name']);?>
"></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['last_name'];?>
:&nbsp;</td>
        <td><input type="text" name="last_name" class="textbox_normal" style="width:170px" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['user_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['last_name']);?>
"></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['company'];?>
:&nbsp;</td>
        <td><input type="text" name="company" class="textbox_normal" style="width:170px" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['user_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['company']);?>
"></td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['email'];?>
:&nbsp;</td>
        <td><input type="text" name="email_address" class="textbox_normal" style="width:170px" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['user_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['email_address']);?>
"></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['phone'];?>
:&nbsp;</td>
        <td><input type="text" name="phone_number" class="textbox_normal" style="width:170px" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['user_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['phone_number']);?>
"></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address'];?>
:&nbsp;</td>
        <td><input type="text" name="street_address1" class="textbox_normal" style="width:170px" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['user_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['street_address1']);?>
"></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address2'];?>
:&nbsp;</td>
        <td><input type="text" name="street_address2" class="textbox_normal" style="width:170px" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['user_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['street_address2']);?>
"></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['city'];?>
:&nbsp;</td>
        <td><input type="text" name="city" class="textbox_normal" style="width:170px" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['user_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['city']);?>
"></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['state'];?>
:&nbsp;</td>
        <td><input type="text" name="state" class="textbox_normal" style="width:170px" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['user_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['state']);?>
"></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['country'];?>
:&nbsp;</td>
        <td><input type="text" name="country" class="textbox_normal" style="width:170px" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['user_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['country']);?>
"></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['zip'];?>
:&nbsp;</td>
        <td><input type="text" name="zip_code" class="textbox_normal" style="width:170px" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['user_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['zip_code']);?>
"></td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>

      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['language'];?>
:&nbsp;</td>
        <td>
          <select name="language" style="width:170px">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['langz'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['langz']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['name'] = 'langz';
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['total']);
?>
                <?php if ($_smarty_tpl->tpl_vars['user_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['language']==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['langz']['index']]){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['langz']['index']];?>
" selected><?php echo ucwords($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['langz']['index']]);?>
</option>
                <?php }else{ ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['langz']['index']];?>
"><?php echo ucwords($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['langz']['index']]);?>
</option>
                <?php }?>
            <?php endfor; endif; ?>
          </select>
        </td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      
      <tr>
        <td colspan="2" align="center"><input type="submit" name="update" value=" " class="button_save" /></td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table>
    <input type="hidden" name="username" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['user_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['username']);?>
" />
    </form>
    
    <br /><br />
    
    <?php endfor; endif; ?>
      


    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }?>
<?php }} ?>