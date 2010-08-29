; <?php die('Litotex Modul-Konfigurationsdatei') ?>
[info]
modul_name = "mypage"
modul_description = "Create new Pages with any Content you wish."
modul_version = "0.1.0"
modul_copyright = "2009"
modul_autor = "Martin Lantzsch (litotex.de = Martin)"
modul_autor_website = "http://linux-doku.de"
modul_autor_mail = "martin@linux-doku.de"
modul_link_name = "MyPage"
modul_filename = "mypage.php"
modul_acp = "0"
modul_game_type = "300"
modul_disable_allowed = "1"
modul_show_error_msg = "1"
modul_permission_level = "0"
[install]
move_lang_file[] = "lang_de.php"
move_module_file[] = "mypage.php"
move_template_file[] = "mypage.html"
db_update[]="0.1.0; CREATE TABLE IF NOT EXISTS `cc1_mypages` (`link` VARCHAR( 255 ) NOT NULL ,`name` VARCHAR( 255 ) NOT NULL ,`content` TEXT NOT NULL ,`active` INT( 2 ) NOT NULL )"
db_update[]="0.1.0; INSERT INTO `cc1_mypages` (`link`, `name`, `content`, `active`) VALUES ('main', 'Deine eigene Seite', '<h2>Was ist das?</h2>Dies ist die Standard Seite des mypage Moduls.<br><br>Mit diesem Modul können Sie eigene Seiten mit freiem Inhalt in ihrem Browsergame anlegen.<br><h2>Wie?</h2>Ganz einfach, Installieren Sie sich das "acp_mypage" Modul und legen Sie neue Seiten über das ACP an.<h2>Formatierungen?</h2>Darüber müssen Sie sich keine Gedanken machen, Formatierungen können Sie ganz einfach beim erstellen neuer Seiten im ACP mit dem WYSIWYG Editor hinzufügen.<h2>Wie viele Seiten?</h2>Bei der Anzahl der Seiten sind keine Beschränkungen gesetzt, Sie können beliebig viele Seiten anlegen.<h2>Ich weiß nicht weiter wo bekomme ich Hilfe?</h2>Nicht verzweifeln, unter <a href=\'http://freebg.de\'>FreeBg.de</a> wartet eine aufgeweckte freundliche Community auf Sie, die Sie sicherlich bei ihrem Vorhaben unterstützen wird.<h2>Dank an</h2>Martin - Entwickler des Moduls<br>gh1234 - Tester und Helfer bei Litotex Speziellen Fragen<br>Das Litotex Team für diese tolle Engine<br>', '1');"
[unistall]
