<?php
require_once( "common/admin/admin_menu.php" );
// Set version
$version = "22/9 2009 - 1";
// Get from config
$url = config::get('fetchurl');
$timestamp = config::get('lastfetch');
$time = date('r', $timestamp);
if ($url == null)
{
	$url = "http://eve.no-ip.de/prices/30d/prices-all.xml";
}

$page = new Page( "Settings - Value fetcher" );
$html = '<center>Mod version: <b><a href="http://eve-id.net/forum/viewtopic.php?f=505&t=9653">'. $version .'</a></b><br><br>';
$html .= 'Last update: '.$time.'<br><br>';

$html .= '<form method="post" action="?a=fetch_values">';
$html .= '<table width="100%" border="1"><tr><td>Update Ship Values</td><td><input type="radio" name="ship" value="shipyes" checked>Yes</td><td><input type="radio" name="ship" value="shipno">No</td></tr>';
$html .= '<tr><td>Filename</td><td colspan="2"><input type="text" name="turl" id="turl" value="'.$url.'" size=110/></td></tr>';
$html .= '<tr><td colspan="3" align="center"><i>Leave above field empty to reset to default.</i></td></tr>';
if ((time() - $timestamp) < 86400)
{
	$html .= '<tr><td colspan="3" align="center"><b>YOU HAVE UPDATED LESS THAN 24 HOURS AGO!</b></td></tr>';
}
$html .= '<tr><td colspan="3"><button value="submit" type="submit" name="submit">Fetch</button></td></tr>';
$html .= '</table></center>';

$page->setContent( $html );
$page->addContext( $menubox->generate() );
$page->generate();
?>
