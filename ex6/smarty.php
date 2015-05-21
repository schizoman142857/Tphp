
<?php
require_once('./smarty/Smarty.class.php');

global $smarty;

$smarty = new Smarty();

$smarty->template_dir = './smarty/templates/';
$smarty->compile_dir = './smarty/templates_c/';
$smarty->config_dir = './smarty/configs/';
$smarty->cache_dir = './smarty/cache/';

?>
