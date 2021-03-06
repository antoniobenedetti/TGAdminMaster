<?php
/*
 * GamePanelX Pro
 * Complete Game and Voice server management tool
 * 
 * Copyright(C) 2009-2010 GamePanelX Pro.  All Rights Reserved. 
 * 
 * Email: support@gamepanelx.com
 * Website: http://www.gamepanelx.com
 * 
 * This software is furnished under a license and may be used and copied
 * only  in  accordance  with  the  terms  of such  license and with the
 * inclusion of the above copyright notice.  This software  or any other
 * copies thereof may not be provided or otherwise made available to any
 * other person.  No title to and  ownership of the  software is  hereby
 * transferred.                                                         
 *                                                                      
 * You may not reverse  engineer, decompile, defeat  license  encryption
 * mechanisms, or  disassemble this software product or software product
 * license.  GamePanelX Pro may terminate this license if you don't
 * comply with any of the terms and conditions set forth in our end user
 * license agreement (EULA).  In such event,  licensee  agrees to return
 * licensor  or destroy  all copies of software  upon termination of the
 * license.                                                             
 *                                                                      
 * Please see the EULA file for the full End User License Agreement.    
*/

//
// Smarty
//
require '../libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->compile_dir  = '../admin/templates_c/';

// Required Files
require('../include/auth.php');
require('../include/config.php');

// Page Title
$smarty->assign('pagetitle', 'System Configuration');


########################################################################

// Check license variable
if($gpxseckey_T2V1lmkWLli04Z7q3FT != 'F9hJt6up1h80qk9REDD2xyA89TfI185gwtLXJsSMhc61fWv5T33548rLqtW5MWGjkgFl8ISzsoF8491IT2V1lmkWLli04Z7q3FTls169B8PmTx0lRZet777Pr40p7R01FkQFymp1Z629GG5dEW8nI3')
{
    die('Invalid license');
}

########################################################################

// Connect to the database
$db = @mysql_connect($config['sql_host'],$config['sql_user'],$config['sql_pass']) or die('<center><b>Error:</b> <i>remoteinfo.php</i>: Failed to connect to the database!</center>');
@mysql_select_db($config['sql_db']) or die('<center><b>Error:</b> <i>remoteinfo.php</i>: Failed to select the database!</center>');


########################################################################

// Network Server ID from the URL
$url_id = $_GET['id'];

// Check malformed ID
if(empty($url_id) || !is_numeric($url_id))
{
    die('<center><b>Error:</b> Invalid id given!</center>');
}

$smarty->assign('network_id', $url_id);

########################################################################

// Infobox from the URL
$url_info = $_GET['info'];

// Allowed info
$allowed_info = array('updated');

if(!empty($url_info))
{
    if(in_array($url_info, $allowed_info))
    {
        // Config Updated
        if($url_info == 'updated')
        {
            $info_msg = 'Configuration Successfully Updated!';
            $smarty->assign('infobox', $info_msg);
        }
    }
}

########################################################################


// Current Template
$template = $config['Template'];

//
// Get all icons for this page
//
$result_icons = @mysql_query("SELECT href,image,image_text,popup_text FROM pages WHERE page='remoteinfo.php' AND template='$template' ORDER BY sort_order") or die('<center><b>Error:</b> <i>remoteinfo.php:</i> Failed to get icon order!</center>');

while ($line_icons = mysql_fetch_assoc($result_icons))
{
    $value_icons[] = $line_icons;
}

// Smarty array
$smarty->assign('icons', $value_icons);


########################################################################

// Set user's language
require('../include/functions/language.php');
$lang = gpx_language_get();
$smarty->assign('lang', $lang);

########################################################################




require(GPX_DOCROOT . '/include/functions/remote.php');

// Run remote commands
if(!$result_info = remote_gpx_remote_serverinfo($url_id))
{
    die('Failed to run: ' . $result_info);
}


########################################################################


// Make array to separate everything
$separater      = '%gpx%';
$arr_response = explode($separater, $result_info);

// Parse full respose
$remote_load_avg    = trim($arr_response[0]);
$remote_cpu_total   = trim($arr_response[1]);
$remote_cpu_type    = trim($arr_response[2]);
$remote_mem_info    = trim($arr_response[3]);
$remote_disk_usage  = trim($arr_response[4]);


// Parse memory Info
$arr_mem    = explode(' ', $remote_mem_info);
$mem_total  = $arr_mem[0];
$mem_used   = $arr_mem[1];
$mem_free   = $arr_mem[2];


// Assign to Smarty
$smarty->assign('remote_load_avg', $remote_load_avg);
$smarty->assign('remote_cpu_total', $remote_cpu_total);
$smarty->assign('remote_cpu_type', $remote_cpu_type);
$smarty->assign('remote_mem_total', $mem_total);
$smarty->assign('remote_mem_used', $mem_used);
$smarty->assign('remote_mem_free', $mem_free);
$smarty->assign('remote_disk_usage', $remote_disk_usage);

########################################################################

// Show HTML page
$smarty->display($config['Template'] . '/remoteinfo.tpl'); 
exit;
