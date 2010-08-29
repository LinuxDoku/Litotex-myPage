<?PHP
/*

This Module was developed by Martin Lantzsch
@author: Martin Lantzsch
@mail: martin@linux-doku.de
@litotex.de username: Martin

*/

@session_start();
$modul_name="mypage"; //NAME OF THE MODUL
require("./../../includes/global.php");

/* CHECK IF THE MODUL IS ACTIVE - IF NOT GIVE ERROR */
if (is_modul_name_aktive($modul_name)==0){
	show_error('MODUL_LOAD_ERROR','core');
	exit();
}
	/* GET THE PAGE NAME VIA GET */
	$page = $db->escape_string($_REQUEST['page']);
	
	/* IF NO PAGE IS GIVEN USE DEFAULT */
	if($page == "")
	{
	  $page = "main";
	}

	/* READ THE PAGE */
	$sql = "SELECT * FROM cc".$n."_mypages WHERE link = '$page' AND active = '1'";
	$query = $db->query($sql);
	$page = $db->fetch_array($query);
	
	/* IF WE HAVE NO PAGE SAY IT */
	if($db->num_rows($query) == 0)
	{
	  $modul_mypage_name = "404";
	  $modul_mypage_content = "No page found!";
	}
	
	/* SET THE VARS */
	$modul_mypage_name = $page['name'];
	$modul_mypage_content = $page['content'];
	
	/* GIVE THE CONTENT TO THE THEME */
	$tpl->assign('MODUL_MYPAGE_NAME', $modul_mypage_name);
	$tpl->assign('MODUL_MYPAGE_CONTENT', $modul_mypage_content);

	/* LOAD THEME */
	template_out('mypage.html',$modul_name);
	exit();

?>
