<?php
/**
 * This Module was developed by Martin Lantzsch
 * @author:     Martin Lantzsch
 * @mail:       martin@linux-doku.de
 * @litotex.de: LinuxDoku (Support Leader)
 */

@session_start();
$modul_name="mypage"; //NAME OF THE MODUL
require("./../../includes/global.php");

// check if module is active
if (is_modul_name_aktive($modul_name)==0){
	show_error('MODUL_LOAD_ERROR','core');
	exit();
}
	// get page name from url
	$page = $db->escape_string($_REQUEST['page']);
	
	// if no page is given use default
	if($page == '')
	{
	  $page = 'main';
	}

	// read page data
	$sql = "SELECT * FROM cc".$n."_mypages WHERE link = '$page' AND active = '1'";
	$query = $db->query($sql);
	$page = $db->fetch_array($query);
	
	// if we have no page give "404"
	if($db->num_rows($query) == 0)
	{
	  $modul_mypage_name = '404';
	  $modul_mypage_content = 'No page found!';
	}
	
	// set vars to tpl
	$modul_mypage_name = $page['name'];
	$modul_mypage_content = $page['content'];
	
	// give it to the template object
	$tpl->assign('MODUL_MYPAGE_NAME', $modul_mypage_name);
	$tpl->assign('MODUL_MYPAGE_CONTENT', $modul_mypage_content);

	// load template
	template_out('mypage.html',$modul_name);
	exit();