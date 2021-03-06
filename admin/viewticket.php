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
$smarty->assign('pagetitle', 'View Support Ticket');


########################################################################

// Check license variable
if($gpxseckey_T2V1lmkWLli04Z7q3FT != 'F9hJt6up1h80qk9REDD2xyA89TfI185gwtLXJsSMhc61fWv5T33548rLqtW5MWGjkgFl8ISzsoF8491IT2V1lmkWLli04Z7q3FTls169B8PmTx0lRZet777Pr40p7R01FkQFymp1Z629GG5dEW8nI3')
{
    die('Invalid license');
}

########################################################################

// Connect to the database
$db = @mysql_connect($config['sql_host'],$config['sql_user'],$config['sql_pass']) or die('<center><b>Error:</b> <i>viewticket.php</i>: Failed to connect to the database!</center>');
@mysql_select_db($config['sql_db']) or die('<center><b>Error:</b> <i>viewticket.php</i>: Failed to select the database!</center>');

########################################################################


// ID from the URL
$url_id = $_GET['id'];

// Check malformed ID
if(empty($url_id) || !is_numeric($url_id))
{
    die('<center><b>Error:</b> Invalid id given!</center>');
}

$safe_id = mysql_real_escape_string($url_id);

// Assign ticket ID
$smarty->assign('ticketid', $safe_id);

########################################################################

// Actions from the URL
$url_action = $_GET['action'];

// List of allowed actions
$allowed_actions = array('delete');

// Correct action
if(!empty($url_action) && !in_array($url_action, $allowed_actions))
{
    die('<center><b>Error:</b> <i>viewticket.php:</i> Invalid URL Parameters!</center>');
}

// Delete the ticket
if(!empty($url_action) && !empty($safe_id))
{
    // Delete client
    if($url_action == 'delete')
    {
        // Delete main ticket and all associated tickets
        if($safe_id > 0)
        {
            require('../include/functions/tickets.php');
            if(!gpx_tickets_delete($safe_id))
            {
                die('<center><b>Error:</b> <i>viewticket.php:</i> Failed to delete the ticket!</center>');
            }
        }
        
        // Show box on clients page
        header("Location: tickets.php?info=deleted");
        exit;
    }
}

########################################################################

// Infobox from the URL
$url_info = $_GET['info'];

// Allowed info
$allowed_info = array('updated');

if(!empty($url_info))
{
    if(in_array($url_info, $allowed_info))
    {
        // Update Account
        if($url_info == 'updated')
        {
            $info_msg = 'Ticket successfully updated!';
            $smarty->assign('infobox', $info_msg);
        }
    }
}



########################################################################

// Set user's language
require('../include/functions/language.php');
$lang = gpx_language_get();
$smarty->assign('lang', $lang);

########################################################################


// First Page
if(!isset($_POST['update']))
{
    // Get original thread info
    $query_orig = "SELECT 
                      DATE_FORMAT(tickets.date_added, '%c/%e/%Y %l:%i %p') AS date_added,
                      tickets.priority,
                      tickets.category,
                      tickets.opened_by,
                      tickets.response_type,
                      tickets.status,
                      tickets.subject,
                      tickets.ticket_text,
                      tickets.internal_notes,
                      clients.username 
                    FROM tickets 
                    LEFT JOIN clients ON 
                      tickets.userid = clients.id 
                    WHERE tickets.id = '$safe_id' 
                    LIMIT 0,1";
    
    $result_orig = @mysql_query($query_orig);

    // Smarty loop
    while ($line_orig = mysql_fetch_assoc($result_orig))
    {
        $value_orig[] = $line_orig;
    }

    // Smarty mysql loop
    $smarty->assign('ticket_orig', $value_orig);
    
    ####################################################################
    
    // Get latest response
    $query_latest = "SELECT 
                        id,
                        DATE_FORMAT(tickets.date_added, '%c/%e/%Y %l:%i %p') AS date_added,
                        ticket_text 
                      FROM tickets 
                      WHERE threadid = '$safe_id' 
                      AND response_type = 'user' 
                      ORDER BY id DESC 
                      LIMIT 0,1";
    
    $result_latest = @mysql_query($query_latest) or die('<center><b>Error:</b> <i>viewticket.php:</i> Failed to get latest response!</center>');
    
    // Smarty loop
    while ($line_latest = mysql_fetch_assoc($result_latest))
    {
        $value_latest[] = $line_latest;
    }
    
    // Grab latest ID in this Ticket
    $latest_ticketid = $value_latest[0]['id'];

    // Smarty mysql loop
    $smarty->assign('ticket_latest', $value_latest);
    
    ####################################################################

    // Set this ticket to viewed by Admin
    if(!empty($latest_ticketid))
    {
        @mysql_query("UPDATE tickets SET read_admin = 'Y' WHERE id = '$latest_ticketid'");
    }
    
    ####################################################################
    
    // Get all rows for this threadid
    $query_ticket = "SELECT 
                        DATE_FORMAT(date_added, '%c/%e/%Y %l:%i %p') AS date_added,
                        response_type,
                        response_userid,
                        ticket_text
                      FROM tickets 
                      WHERE threadid = '$safe_id' 
                      ORDER BY id DESC 
                      LIMIT 0,250";
    
    $result_ticket  = @mysql_query($query_ticket) or die('<center><b>Error:</b> <i>viewticket.php:</i> Failed to get ticket info!</center>');

    // Smarty loop
    while ($line_ticket = mysql_fetch_assoc($result_ticket))
    {
        // Get this username, based on the response type
        if($line_ticket['response_type'] == 'admin')
        {
            $sql_table = 'admins';
        }
        else
        {
            $sql_table = 'clients';
        }
        
        $result_user = @mysql_query("SELECT username FROM $sql_table WHERE id = '$line_ticket[response_userid]'");
        
        while($row_user = mysql_fetch_array($result_user))
        {
            // Add username to the ticket array
            $line_ticket['username'] = $row_user['username'];
        }

        // Smarty
        $value_ticket[] = $line_ticket;
    }

    ####################################################################

    // Smarty mysql loop
    $smarty->assign('ticket_details', $value_ticket);
    
    // Display HTML Page
    $smarty->display($config['Template'] . '/viewticket.tpl'); 
}

########################################################################


// Submit Page
elseif(isset($_POST['update']))
{
    // POST Values (escape all of them)
    $post_response  = $_POST['response'];
    $post_notes     = $_POST['notes'];
    $post_status    = $_POST['status'];
    $post_priority  = $_POST['priority'];
    $post_category  = $_POST['category'];
    $user_type      = 'admin';

    // Current userid
    $this_userid = $_SESSION['gpx_userid'];
    
    // Update original ticket Priority and Status
    require_once('../include/functions/tickets.php');
    
    if(!gpx_ticket_update($safe_id,$post_priority,$post_category,$post_status,$this_userid,$user_type,$post_response,$post_notes))
    {
        die('<center><b>Error:</b> <i>viewticket.php:</i> Failed to update the ticket!</center>');
    }
    
    
    // Redirect to viewticket.php
    header("Location: viewticket.php?id=$url_id&info=updated");
    exit;
}
