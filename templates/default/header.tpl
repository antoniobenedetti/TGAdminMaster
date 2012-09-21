<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>{$company} | {$pagetitle}</title>
<link rel="stylesheet" type="text/css" href="templates/{$template}/style.css" />
<script type="text/javascript" src="templates/{$template}/scripts/jquery.js"></script>
<script type="text/javascript" src="templates/{$template}/scripts/dd.js"></script>
<script type="text/javascript" src="templates/{$template}/scripts/gpx.js"></script>
</head>

<body>
          
<table border="0" cellpadding="0" cellspacing="0" align="center" width="850" style="border-left:1px solid #999999;border-right:1px solid #999999;border-bottom:1px solid #777;box-shadow:-1px 5px 10px #6D7B8D;-moz-box-shadow:-1px 0px 10px #6D7B8D;-webkit-box-shadow:-1px 0px 10px #6D7B8D;">
  <tr>
    <td align="center" height="80" colspan="6" background="templates/{$template}/img/logo_grad.png"><img src="templates/{$template}/img/logo.png" style="display:block;"></td>
  </tr>
</table>

{if $nonav != 1}
<table border="0" cellpadding="0" cellspacing="0" align="center" width="850" id="hdr_nav">
  <tr align="center" height="43" style="vertical-align:middle" valign="middle">
      <td style="vertical-align:middle" valign="middle" colspan="6" height="43" align="center" background="templates/{$template}/img/nav/bg.png" bgcolor="#053a68">
          <ul id="jsddm" style="vertical-align:middle" width="200">
              <li><a href="main.php" style="text-align:center;width:140px"><img src="templates/{$template}/img/nav/transparent/main.png" border="0" style="vertical-align:middle"><span class="nav_titles">&nbsp;&nbsp;{$lang.nav_main}</span></a></li>
	      <li><a href="servers.php?type=game" style="text-align:center;width:140px"><img src="templates/{$template}/img/nav/transparent/games.png" border="0" style="vertical-align:middle"><span class="nav_titles">&nbsp;&nbsp;{$lang.main_game_servers}</span></a></li>
	      <li><a href="servers.php?type=voip" style="text-align:center;width:140px"><img src="templates/{$template}/img/nav/transparent/voip.png" border="0" style="vertical-align:middle"><span class="nav_titles">&nbsp;&nbsp;{$lang.main_voice_servers}</span></a></li>
              <li><a href="tickets.php" style="text-align:center;width:140px"><img src="templates/{$template}/img/nav/transparent/support.png" border="0" style="vertical-align:middle"><span class="nav_titles">&nbsp;&nbsp;{$lang.main_tickets}</span></a></li>
	      <li><a href="editsettings.php" style="text-align:center;width:140px"><img src="templates/{$template}/img/nav/transparent/settings.png" border="0" style="vertical-align:middle"><span class="nav_titles">&nbsp;&nbsp;{$lang.main_settings}</span></a></li>
          </ul>
      </td>
  </tr>
</table>
{/if}

<table border="0" cellpadding="0" cellspacing="0" align="center" width="847" style="border-bottom:1px solid #999999;border-bottom-left-radius:8px;border-bottom-right-radius:8px;box-shadow:-1px 0px 10px #6D7B8D;-moz-box-shadow:-1px 5px 10px #6D7B8D;-webkit-box-shadow:-1px 5px 10px #6D7B8D;">
  <tr>
    <td valign="top" class="center_table" colspan="6" style="border-top:1px solid black">
