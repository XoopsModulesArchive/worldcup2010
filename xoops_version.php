<?php

if (!defined('XOOPS_ROOT_PATH')) {
	die('XOOPS root path not defined');
}

$modversion['dirname'] = basename(dirname(__FILE__));
$modversion['name'] = ucfirst(basename(dirname(__FILE__)));
$modversion['version'] = '0.1';
$modversion['description'] = '';
$modversion['author'] = "Mowaffaq Ali";
$modversion['credits'] = "FIFA (www.fifa.com)";
$modversion['help'] = "";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 0;
$modversion['image'] = "images/worldcup2010.png";

// Menu
$modversion['hasMain'] = 0;

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Blocks
$modversion['blocks'][1]['file'] = "worldcup2010.php";
$modversion['blocks'][1]['name'] = 'FIFA Latest News';
$modversion['blocks'][1]['description'] = 'Five latest news stories which have been published on FIFA.com';
$modversion['blocks'][1]['show_func'] = "fifa_latestnews_show";
$modversion['blocks'][1]['template'] = 'fifa_latestnews_block.html';

$modversion['blocks'][2]['file'] = "worldcup2010.php";
$modversion['blocks'][2]['name'] = 'South Africa 2010';
$modversion['blocks'][2]['description'] = 'Follow your team during the FIFA World Cup';
$modversion['blocks'][2]['show_func'] = "southafrica_show";
$modversion['blocks'][2]['template'] = 'southafrica_block.html';

$modversion['blocks'][3]['file'] = "worldcup2010.php";
$modversion['blocks'][3]['name'] = 'World Cup';
$modversion['blocks'][3]['description'] = 'Get the lowdown on the 736 stars playing at South Africa 2010';
$modversion['blocks'][3]['show_func'] = "worldcup_show";
$modversion['blocks'][3]['template'] = 'worldcup_block.html';

$modversion['blocks'][4]['file'] = "worldcup2010.php";
$modversion['blocks'][4]['name'] = 'Latest Photos';
$modversion['blocks'][4]['description'] = 'Latest footballing photos which have been uploaded on FIFA.com';
$modversion['blocks'][4]['show_func'] = "worldcup_photos_show";
$modversion['blocks'][4]['template'] = 'worldcup_photos_block.html';

$modversion['blocks'][5]['file'] = "worldcup2010.php";
$modversion['blocks'][5]['name'] = 'FIFA/Coca-Cola World Ranking';
$modversion['blocks'][5]['description'] = 'Follow the fortunes of your favourite national team';
$modversion['blocks'][5]['show_func'] = "fifa_ranking_show";
$modversion['blocks'][5]['template'] = 'fifa_ranking_block.html';

$modversion['blocks'][6]['file'] = "worldcup2010.php";
$modversion['blocks'][6]['name'] = 'World Leagues';
$modversion['blocks'][6]['description'] = 'Get up to the minute results and standings from your favourite leagues';
$modversion['blocks'][6]['show_func'] = "world_leagues_show";
$modversion['blocks'][6]['template'] = 'world_leagues_block.html';

// Config items
$modversion['config'][1]['name'] = 'worldcup_lang';
$modversion['config'][1]['title'] = '_MD_AM_LANGUAGE';
$modversion['config'][1]['description'] = '';
$modversion['config'][1]['formtype'] = 'select';
$modversion['config'][1]['valuetype'] = 'text';
$modversion['config'][1]['options'] = array('Arabic' => 'ar', 'English' => 'en', 'French' => 'fr', 'Spanich' => 'es', 'German' => 'de', 'Portuguese' => 'pt');
$modversion['config'][1]['default'] = 'ar';

?>