<?php /* Smarty version Smarty-3.1.11, created on 2012-09-20 22:09:26
         compiled from ".\templates\default\remoteinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7360505b77f614e539-09775104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28ed0f042b06bdefd82ed60373d001949b9b33c0' => 
    array (
      0 => '.\\templates\\default\\remoteinfo.tpl',
      1 => 1334478766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7360505b77f614e539-09775104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged_in' => 0,
    'lang' => 0,
    'network_id' => 0,
    'infobox' => 0,
    'template' => 0,
    'remote_load_avg' => 0,
    'remote_cpu_type' => 0,
    'remote_cpu_total' => 0,
    'remote_mem_total' => 0,
    'remote_mem_used' => 0,
    'remote_mem_free' => 0,
    'remote_disk_usage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505b77f6229c65_38377753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505b77f6229c65_38377753')) {function content_505b77f6229c65_38377753($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['logged_in']->value){?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    
    <span class="location">&nbsp;&nbsp;<a href="main.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['admin_home'];?>
</a> / <a href="network.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['network'];?>
</a> / <a href="managenetworkserver.php?id=<?php echo $_smarty_tpl->tpl_vars['network_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['managenetsrv_title'];?>
</a> / <?php echo $_smarty_tpl->tpl_vars['lang']->value['remoteinfo_title'];?>

    
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

    <table border="0" cellpadding="1" cellspacing="0" width="600" align="center" class="tablez">
      <tr class="table_title" height="20">
        <td align="center" colspan="2"><?php echo $_smarty_tpl->tpl_vars['lang']->value['remoteinfo_details'];?>
</td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>

      <tr>
        <td align="right" class="description" width="160"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/cpu_24.png" border="0" width="16" height="16" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['remoteinfo_load_avg'];?>
:&nbsp;</td>
        <td><?php echo $_smarty_tpl->tpl_vars['remote_load_avg']->value;?>
</td>
      </tr>
      
      <tr>
        <td align="right" class="description"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/cpu_24.png" border="0" width="16" height="16" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['remoteinfo_cpu_info'];?>
:&nbsp;</td>
        <td><?php echo $_smarty_tpl->tpl_vars['remote_cpu_type']->value;?>
</td>
      </tr>
      
      <tr>
        <td align="right" class="description"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/cpu_24.png" border="0" width="16" height="16" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['remoteinfo_total_cpus'];?>
:&nbsp;</td>
        <td><?php echo $_smarty_tpl->tpl_vars['remote_cpu_total']->value;?>
</td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      
      <tr>
        <td align="right" class="description"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/memory_24.png" border="0" width="16" height="16" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['remoteinfo_mem_total'];?>
 (Mb):&nbsp;</td>
        <td><?php echo $_smarty_tpl->tpl_vars['remote_mem_total']->value;?>
</td>
      </tr>
      
      <tr>
        <td align="right" class="description"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/memory_24.png" border="0" width="16" height="16" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['remoteinfo_mem_used'];?>
 (Mb):&nbsp;</td>
        <td><?php echo $_smarty_tpl->tpl_vars['remote_mem_used']->value;?>
</td>
      </tr>
      
      <tr>
        <td align="right" class="description"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/memory_24.png" border="0" width="16" height="16" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['remoteinfo_mem_free'];?>
 (Mb):&nbsp;</td>
        <td><?php echo $_smarty_tpl->tpl_vars['remote_mem_free']->value;?>
</td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      
      <tr>
        <td colspan="2" align="left" style="padding-left:40px" class="description"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/partition_24.png" border="0" width="16" height="16" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['remoteinfo_disk_usage'];?>
</td>
      </tr>
      
      <tr>
        <td colspan="2" align="left" style="padding-left:50px"><pre><?php echo $_smarty_tpl->tpl_vars['remote_disk_usage']->value;?>
</pre></td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>

      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }?>
<?php }} ?>