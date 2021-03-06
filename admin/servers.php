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

########################################################################

$url_id     = $_GET['id'];
$url_type   = $_GET['type'];

$allowed_types = array('game','voip','other');

// Default to game
if(!in_array($url_type, $allowed_types))
{
    $url_type = 'game';
}


// ID and Type in the URL
if(!empty($url_id) && is_numeric($url_id) && !empty($url_type))
{
    $where_url = "WHERE servers.type='$url_type' AND servers.userid='$url_id'";
    
    // Assign User ID
    $smarty->assign('server_userid', $url_id);
}
// Just the Type
elseif(empty($url_id) && !empty($url_type))
{
    $where_url = "WHERE servers.type = '$url_type'";
}

########################################################################

// Page Title
$smarty->assign('pagetitle', 'View Servers');


// Assign Server Type
$smarty->assign('type', $url_type);

########################################################################

//
// Sort By from URL
//
if(isset($_GET['order']))
{
    $get_order    = $_GET['order'];
    $allowed_ord  = array('id','server','username','info','description');
    
    if(!in_array($get_order, $allowed_ord)) die('Invalid order by!');
    
    // Connection Info
    if($get_order == 'info')
    {
        $sort_by  = strtoupper($_GET['sort']);
        $order_by = 'network.ip ' . $sort_by . ',servers.port ' . $sort_by . ' ';
    }
    // Username
    elseif($get_order == 'username')
    {
        $sort_by  = strtoupper($_GET['sort']);
        $order_by = 'clients.username ' . $sort_by . ' ';
    }
    // All others
    else
    {
        $order_by = 'servers.' . $get_order;
        
        if(isset($_GET['sort']))
        {
            $sort_by  = strtoupper($_GET['sort']);
            if($sort_by == 'ASC' || $sort_by == 'DESC')
              $order_by .= ' ' . $sort_by . ' ';
        }
        else $order_by .= ' ASC ';
    }
}
// Default to ID
else
{
    $order_by = 'servers.id DESC';
}

// Assign order and sort
$smarty->assign('s_order', $get_order);
$smarty->assign('s_sort', strtolower($sort_by));

########################################################################

// Hardcoded for now
$per_page = 30;

//
// Paging
//
if(isset($_GET['p']) && is_numeric($_GET['p']))
{
    $start_page = $_GET['p'];
    
    // Subtract 1 so pages start at 1, now 0
    if($start_page >= 1) $start_page--;
    
    $sql_limit  = $start_page * $per_page . ',' . $per_page;
}
// Default
else $sql_limit = '0,' . $per_page;

########################################################################

// Connect to the database
$db = @mysql_connect($config['sql_host'],$config['sql_user'],$config['sql_pass']) or die('<center><b>Error:</b> <i>servers.php</i>: Failed to connect to the database!</center>');
@mysql_select_db($config['sql_db']) or die('<center><b>Error:</b> <i>servers.php</i>: Failed to select the database!</center>');

// Get server info
$query_servers = "SELECT 
                      servers.id,
                      servers.userid,
                      servers.server,
                      servers.port,
                      servers.creation_status,
                      servers.description,
                      cfg.long_name,
                      cfg.query_name,
                      clients.username,
                      network.ip 
                  FROM servers 
                  LEFT JOIN cfg ON 
                      servers.server = cfg.short_name 
                  LEFT JOIN clients ON 
                      servers.userid = clients.id 
                  LEFT JOIN network ON 
                      servers.networkid = network.id 
                  $where_url 
                  ORDER BY 
                      $order_by 
                  LIMIT 
                      $sql_limit";

$result = @mysql_query($query_servers) or die('<center><b>Error:</b> <i>servers.php:</i> Failed to list servers!</center>');

// Total Servers
$result_found = @mysql_query('SELECT FOUND_ROWS()');
$row_found    = mysql_fetch_row($result_found);
$total_found  = $row_found[0];

while ($line = mysql_fetch_assoc($result))
{
    // Smart loop
    $value[] = $line;
}

// Total pages
$total_pages  = round($total_found / $per_page);
$start_page   = $start_page + 1;

$smarty->assign('page', $start_page);
$smarty->assign('total_rows', $total_found);
$smarty->assign('total_pages', $total_pages);


########################################################################


//
// Get current server statuses
// (Create a full array of servers (query name, ip, port) and send it to GameQ)
//

// Count the SQL array
$total_servers = count($value);

if($total_servers > 0)
{
    // Subtract 1 from total servers since it starts at 0
    $total_servers = $total_servers - 1;

    // Create status array
    $status_info = array();

    for($i = 0; $i <= $total_servers; $i++)
    {
        // GPX Server short name
        $gpx_server = $value[$i]['server'];
        
        // Swap GPX game name for GameQ game name
        $result_name  = @mysql_query("SELECT query_name FROM cfg WHERE short_name = '$gpx_server'");

        while($row_name = mysql_fetch_array($result_name))
        {
            $status_info[$i]['server'] = $row_name['query_name'];
        }
        
        ################################################################
        
        // Add IP and Port to array
        $status_info[$i]['ip']    = $value[$i]['ip'];
        $status_info[$i]['port']  = $value[$i]['port'];
    }
    
    
    //
    // Query server for current status info
    //

    require_once('../include/functions/query.php');
    $result_array = gpx_query($status_info);
    
    /*
    echo '<pre>';
    var_dump($result_array);
    echo '</pre>';
    */

    // Add all server values back into the mix
    for($i = 0; $i <= $total_servers; $i++)
    {
        // No query name; do generic query
        if(empty($value[$i]['query_name']))
        {
            // Run a generic query
            if(gpx_query_generic($value[$i]['ip'],$value[$i]['port']))
            {
                $result_array[$i]['current_status'] = 'online';
            }
            else
            {
                $result_array[$i]['current_status'] = 'offline';
            }
        }

	// Current player num
	if(!$result_array[$i]['current_numplayers'])
	{
	    $result_array[$i]['current_numplayers'] = '0';
	}
        
        // Add regular db stuff back in
        $result_array[$i]['id']               = $value[$i]['id'];
        $result_array[$i]['userid']           = $value[$i]['userid'];
        $result_array[$i]['server']           = $value[$i]['server'];
        $result_array[$i]['os']               = $value[$i]['os'];
        $result_array[$i]['ip']               = $value[$i]['ip'];
        $result_array[$i]['port']             = $value[$i]['port'];
        $result_array[$i]['creation_status']  = $value[$i]['creation_status'];
        $result_array[$i]['description']      = $value[$i]['description'];
        $result_array[$i]['long_name']        = $value[$i]['long_name'];
        $result_array[$i]['username']         = $value[$i]['username'];
    }
}


########################################################################


// Smarty mysql loop
$smarty->assign('settings', $result_array);


########################################################################



// Infobox from the URL
$url_info = $_GET['info'];

// Allowed info
$allowed_info = array('created','deleted','restarted','stopped');

if(!empty($url_info))
{
    if(in_array($url_info, $allowed_info))
    {
        // Create account
        if($url_info == 'created')
        {
            $info_msg = 'Server successfully created!';
            $smarty->assign('infobox', $info_msg);
        }
        
        // Delete Account
        elseif($url_info == 'deleted')
        {
            $info_msg = 'Server successfully deleted!';
            $smarty->assign('infobox', $info_msg);
        }
        
        // Server Restarted
        elseif($url_info == 'restarted')
        {
            $info_msg = 'Server successfully Restarted!';
            $smarty->assign('infobox', $info_msg);
        }
        
        // Server Stopped
        elseif($url_info == 'stopped')
        {
            $info_msg = 'Server successfully Stopped!';
            $smarty->assign('infobox', $info_msg);
        }
    }
}




########################################################################


//
// Highlight - Highlight the server that was just created.
//
$url_highlight = $_GET['h'];

if($url_info == 'created' && !empty($url_highlight) && is_numeric($url_highlight))
{
    $smarty->assign('highlight', $url_highlight);
}


########################################################################

// Set user's language
require('../include/functions/language.php');
$lang = gpx_language_get();
$smarty->assign('lang', $lang);

########################################################################





// Current Template
$template = $config['Template'];

//
// Get all icons for this page
//
$result_icons = @mysql_query("SELECT href,image,image_text,popup_text FROM pages WHERE page='servers.php' AND template='$template' ORDER BY sort_order") or die('<center><b>Error:</b> <i>servers.php:</i> Failed to get icon order!</center>');

while ($line_icons = mysql_fetch_assoc($result_icons))
{
    $value_icons[] = $line_icons;
}

// Smarty array
$smarty->assign('icons', $value_icons);


// Display HTML Page
$smarty->display($config['Template'] . '/servers.tpl'); 

